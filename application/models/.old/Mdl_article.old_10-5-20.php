<?php  


class Mdl_article extends MY_Model{

  protected $_tb_ar = "tbl_article";
  protected $_tb_seo = "seo";
  protected $_tb_user = "users";


    public $ip;
    public $os;
    public $browser;


    /* public $user_name; */
    /* public $user_email; */
    /* public $user_id; */
    /* public $user_id; */

  function __construct(){
    parent::__construct();
  
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
  
}


