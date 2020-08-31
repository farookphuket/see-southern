<?php  


class Mdl_article extends MY_Model{

  protected $_tb_ar = "tbl_article";
  protected $_tb_seo = "seo";
  protected $_tb_cat = "tbl_cat";
  protected $_tb_user = "users";


    public $ip;
    public $os;
    public $browser;


    

  function __construct(){
    parent::__construct();
  
  }


    function find($where){
        $get = $this->db
                    ->where($where)
                    ->get($this->_tb_ar);
        return $get;
    }
    function all($where=false,$limit=false,$offset=false){

        if($where):
            $get = $this->find($where);
        else:
            
        $get = $this->db
                    ->order_by("ar_date_create","DESC")
                    ->get($this->_tb_ar,$limit,$offset);
        endif;

        return $get;
    }



    function articleGet($where=false,$limit=false,$offset=false){
        $get = "";
        $j1 = "{$this->_tb_cat}.cat_id={$this->_tb_ar}.cat_id";
        $j2 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";
        $j3 = "{$this->_tb_seo}.kw_id={$this->_tb_ar}.kw_id";

        if($where):
            $get = $this->db
                        ->where($where)
                        ->order_by("ar_date_create","DESC")
                        ->join($this->_tb_cat,$j1)
                        ->join($this->_tb_user,$j2)
                        ->join($this->_tb_seo,$j3)
                        ->get($this->_tb_ar,$limit,$offset);
        else:
            $get = $this->db
                        ->order_by("ar_date_create","DESC")
                        ->join($this->_tb_cat,$j1)
                        ->join($this->_tb_user,$j2)
                        ->join($this->_tb_seo,$j3)
                        ->get($this->_tb_ar,$limit,$offset);
        endif;

        return $get;

    }








  /* article create on 18-Oct-2019 START */
  function arGetList($where=false,$limit=false,$offset=false){
    $get = "";
    $j1 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";
    $j2 = "{$this->_tb_seo}.kw_id={$this->_tb_ar}.kw_id";
    if($where):
      $get = $this->db
                  ->where($where)
                  ->join($this->_tb_user,$j1)
                  ->join($this->_tb_seo,$j2)
                  ->order_by("{$this->_tb_ar}.date_add","DESC")
                  ->get($this->_tb_ar,$limit,$offset);
    else:
      $get = $this->db
                  ->join($this->_tb_user,$j1)
                  ->order_by("{$this->_tb_ar}.date_add","DESC")
                  ->get($this->_tb_ar,$limit,$offset);
      endif;
    return $get;
  }

  function arGetBy($where){
    $j1 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";
    $j2 = "{$this->_tb_seo}.kw_id={$this->_tb_ar}.kw_id";
    $get = $this->db
                ->join($this->_tb_user,$j1)
                ->join($this->_tb_seo,$j2)
                ->where($where)
                ->get($this->_tb_ar); 
    return $get;
  }
  

  function arNumReadCount($where){
    $get = $this->arGetBy($where)->result();
    $ar_id = 0;
    $last_read_num = 0;
    $last_read_ip = "";
    $last_read_date = "";
    foreach($get as $row):
      $ar_id = $row->ar_id;
      $last_read_num = $row->ar_read_count;
      $last_read_ip = $row->last_view_ip;
      $last_read_date = $row->last_view_date;
    endforeach;

    $cur_user_ip = $this->ip;
    $cur_day = $this->today;
    $msg = "<p>Has been read {$last_read_num} time(s).</p>";
    if($cur_day != $last_read_date || $cur_user_ip != $last_read_ip):
      /* 
      * this code will run if the ip != last ip from the db */

      $last_read_num = $last_read_num+1;
      $up_data = array(
        "last_view_ip" => $cur_user_ip,
        "last_view_date" => $this->today,
        "ar_read_count" => $last_read_num
      );

    $this->SAVE($up_data,$this->_tb_ar,array("ar_id" => $ar_id));
      $msg = "<p>Has been read {$last_read_num} time(s).</p>";
    endif;


    $r_data = array(
      "msg" => $msg 
    );
    return $r_data;
  }
  /* article create on 18-Oct-2019 END */









  /* Moderator 22 Oct 2019 START */
  function modSave(){
    
    $save = "";
    $ar_id = $this->getEl("ar_id");
    $ar_user_id = $this->getEl("ar_user_id");
    $kw_id = $this->getEl("kw_id");
    $ar_title = $this->getEl("ar_title");
    $ar_sum = $this->getEl("ar_sum");
    $ar_body = $this->getEl("ar_body");

    //--the checkbox
    $show_pub = !($this->getEl("show_pub"))?$show_pub=0:$show_pub=2;
    $show_index = !($this->getEl("show_index"))?$show_index=0:$show_index=2;
    $approve = !($this->getEl("approve"))?$approve=0:$approve=2;


    $keyword = $this->getEl("keyword"); 
    $keydes = $this->getEl("keydes"); 
    $og_url = $this->getEl("og_url");
    
    $ar_data = array(
      "ar_title" => $ar_title,
      "ar_summary" => $ar_sum,
      "ar_body" => $ar_body,
      "ar_show_public" => $show_pub,
      "ar_show_index" => $show_index,
      "ar_is_approve" => $approve,
      "date_add" => $this->today_andTime,
      "date_edit" => $this->today_andTime,
    );

    $seo_data = array(
      "kw_page_keyword" => $keyword,
      "kw_page_des " => $keydes,
      "kw_canonical" => $og_url,
      "og_url" => $og_url,
      "og_site_name" => site_url(),
      "og_title" => $keyword,
      "og_description " => $keydes
    );

    if(!$ar_id):
      //--- create new post
      $uniq_id = $this->randomStr(150);
      $ar_data["uniq_id"] = $uniq_id;
      $ar_data["ar_post_by"] = $this->user_name;
      $ar_data["ar_post_ip"] = $this->ip;
      $ar_data["ar_user_id"] = $this->user_id;

      $url = site_url("article/read/{$uniq_id}");
      //-- seo section
      $seo_data["article_publisher"] = $this->user_name;
      $seo_data["kw_canonical"] = $url;
      //--save this key
      $kw_id = $this->SAVE($seo_data,$this->_tb_seo);

      //---save data to ar_table
      $save = $this->SAVE($ar_data,$this->_tb_ar);
      $ar_id = $save;

      $up_data = array(
        "kw_id" => $kw_id
      );
      $this->SAVE($up_data,$this->_tb_ar,array("ar_id" => $ar_id));
      
      $msg = "Success : data has been create @{$ar_id}";
    else:
    //-- update data
      unset($ar_data["date_add"]);
      $this->SAVE($ar_data,$this->_tb_ar,array("ar_id" => $ar_id));
      $this->SAVE($seo_data,$this->_tb_seo,array("kw_id" => $kw_id));
      $msg = "Success : data has been updated @{$ar_id}";
    endif;
    
    $r_data = array(
      "msg" => $msg,
      "ar_id" => $ar_id
    );

    return $r_data;
  }

  function modDel($where){
    $get = $this->arGetBy($where)->result();
    $ar_id = 0;
    $kw_id = 0;
    foreach($get as $row):
      $ar_id = $row->ar_id;
      $kw_id = $row->kw_id;
      endforeach;
      $this->DEL(array("ar_id" => $ar_id),$this->_tb_ar);
      $this->DEL(array("kw_id" => $kw_id),$this->_tb_seo);      
      $r_data = array("msg" => "Data has been deleted");
     return $r_data; 
  }


  /* Moderator 22 Oct 2019 END */


  /*
   * Admin Section 7-May-2020
   */

  function adminSeoSave(){
      $kw_id = $this->getEl("kw_id");
      $keyword = $this->getEl("keyword"); 
      $keydes = $this->getEl("keydes"); 

      $se_data = array(
          "og_title" => $keyword,
          "og_des" => $keydes,
          "article_publisher" => $this->user_name,
          "kw_date_add" => $this->today_andTime
      );
      if($kw_id):
        unset($se_data["article_publisher"]);
        unset($se_data["kw_date_add"]);
        $this->SAVE($se_data,$this->_tb_seo,array("kw_id" => $kw_id));
      else:
        $kw_id = $this->SAVE($se_data,$this->_tb_seo);
      endif;

      return $kw_id;

  }
  function adminArSave(){
    $kw_id = $this->getEl("kw_id");
    $ar_id = $this->getEl("ar_id");
    $cat_id = $this->getEl("set_cat");
    $ar_title = $this->getEl("ar_title");
    $ar_user_id = $this->getEl("ar_user_id");
    if(!$ar_user_id) $ar_user_id = $this->user_id;
    
    $is_pub = $this->getEl("show_pub");
    $is_apr = $this->getEl("is_approve");
    $is_index = $this->getEl("show_index");
    !($is_index)?$is_index=0:$is_index=2;
    !($is_apr)?$is_apr=0:$is_apr=2;
    !($is_pub)?$is_pub = 0:$is_pub=2;

    $ar_data = array(
        "cat_id" => $cat_id,
        "ar_user_id" => $ar_user_id,
        "ar_show_public" => $is_pub, 
        "ar_is_approve" => $is_apr, 
        "ar_show_index" => $is_index, 
        "ar_title" => $this->getEl("ar_title"),
        "ar_des" => $this->getEl("ar_des"),
        "ar_body" => $this->getEl("ar_body"),
        "ar_date_create" => $this->today_andTime
    );

    if(!$ar_id):
        //--- create new post
        $kw_id = $this->adminSeoSave();
        $ar_uniq_id = $this->randomChar(75); 
        $ar_data["ar_uniq_id"] = $ar_uniq_id;
        $ar_data["kw_id"] = $kw_id;

        $ar_id = $this->SAVE($ar_data,$this->_tb_ar);


    else:
        //--- update post
        
        unset($ar_data["ar_date_create"]);
        $ar_data["ar_date_update"] = $this->today_andTime;
        $this->SAVE($ar_data,$this->_tb_ar,array("ar_id" => $ar_id));
             
    endif;
    return $ar_id;
  }

  function adminSave(){

      $ar_id = $this->getEl("ar_id");
      $msg = "";

      if(!$ar_id):

          $ar_id = $this->adminArSave();
          $msg = "Success : Create item @{$ar_id}";
      else:
            $this->adminArSave();
            $msg = "Success : update item @{$ar_id}";
      endif;


      $r_data = array(
          "msg" => $msg,
          "ar_id" => $ar_id
      );
      return $r_data;
  }

  function adminDel($where){
    $get = $this->find($where)->result();
    foreach($get as $row):
        $this->DEL(array("kw_id" => $row->kw_id),$this->_tb_seo);
        $this->DEL(array("ar_id" => $row->ar_id),$this->_tb_ar);
    endforeach;
                
  }

  /*  END OF ADMIN */
  
}


