<?php  


class Mdl_blog extends MY_Model{

  protected $_tb_seo = "seo";
  protected $_tb_tmp = "tbl_template";
  protected $_tb_user = "users";
  protected $_tb_cat = "tbl_cat";
  protected $_tb_blog = "tbl_blog";

  function __construct(){
    parent::__construct();
  }



  function blogCount(){
      $get = $this->db->get($this->_tb_blog);
      return $get;
  }

  function blogView($bl_uniq_id){
      $get = $this->blogGet(array("bl_uniq_id" => $bl_uniq_id));

        $num = 0;
        $bl_id = 0;
        $last_num = 0;
        $last_ip = 0;
        $last_view_date = 0;
        $cur_day = date("Y-m-d",time());

        foreach($get->result() as $row):
            $num++;
            $last_num = $row->bl_view_count;
            $last_ip = $row->last_view_ip;
            $last_view_date = $row->last_view_date;
            $bl_id = $row->bl_id;
        endforeach;
            $up_data = array(
                "last_view_date" => $cur_day,
                "last_view_ip" => $this->ip
            );
        if($last_view_date != $cur_day || $last_ip != $this->ip):
            $last_num++;
            $up_data["bl_view_count"] = $last_num;
            
           $this->SAVE($up_data,$this->_tb_blog,array("bl_id" => $bl_id)); 
        endif;


      return $get;
  }

  function blogGet($where=false,$limit=false,$offset=false){
      //--- check if any pub date field equal to today
      $this->blogPublicToday();

      $j1 = "{$this->_tb_user}.id={$this->_tb_blog}.bl_user_id";
      $j2 = "{$this->_tb_cat}.cat_id={$this->_tb_blog}.bl_cat_id";
      $j3 = "{$this->_tb_seo}.kw_id={$this->_tb_blog}.bl_kw_id";
      $get = "";
      if($where):
          $get = $this->db
                        ->where($where)
                        ->order_by("bl_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->join($this->_tb_cat,$j2)
                        ->join($this->_tb_seo,$j3)
                        ->get($this->_tb_blog,$limit,$offset);
      else:
            $get = $this->db
                        ->order_by("bl_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->join($this->_tb_cat,$j2)
                        ->join($this->_tb_seo,$j3)
                        ->get($this->_tb_blog,$limit,$offset);
      endif;
      
      return $get;
  }


  function blogPublicToday(){
      $today = date("Y-m-d",time());
      $where = array(
          "show_pub_date" => $today
      );
      $get = $this->db
                  ->where($where)
                  ->get($this->_tb_blog)->result();
      if(count($get) != 0):
          $update = array(
                      "show_pub" => 2,
                      "bl_date_update" => $this->today_andTime
                    );
         
        foreach($get as $row):
           $this->SAVE($update,$this->_tb_blog,array("show_pub_date" => $today)); 
        endforeach;
      
    endif;

  }

  function blogAddKey($where){
      // $where = array(
      //     "bl_uniq_id" => ""
      // );

      $get = $this->db
                    ->where($where)
                    ->get($this->_tb_blog);
      if(count($get->result()) != 0):
          $update = array(
              "bl_date_update" => $this->today_andTime
          ); 
        $bl_id = 0;
        foreach($get->result() as $row):
            $bl_id = $row->bl_id;
            $keyNew = $this->randomChar(75);
            $update["bl_uniq_id"] = $keyNew;
            $this->SAVE($update,$this->_tb_blog,$where);
        endforeach;
      endif;
  }

  /*
   * Member
   *
   */

  function blogMemberSave(){
    $d = $this->blogMemberInput();
    $bl_user_id = $this->getEl("bl_user_id");
    if(!$bl_user_id):
        $bl_user_id = $this->user_id;
    endif;

    $bl_id = $this->getEl("bl_id");
    $msg = "";

    if(!$bl_id):
        //--- create
        $bl_id = $this->SAVE($d,$this->_tb_blog);
        $msg = "Success : created @{$bl_id}";
    else:
        //--- update
        unset($d["bl_date_create"]); 
        $d["bl_date_update"] = $this->today_andTime;
        $this->SAVE($d,$this->_tb_blog,array("bl_id" => $bl_id));
        $msg = "Success : updated @{$bl_id}";
    endif;

    $this->blogAddKey(array("bl_id" => $bl_id)); 
    $r_data = array(
        "bl_id" => $bl_id,
        "msg" => $msg
    );
    return $r_data;
  }

  function blogMemberDel($where){
      $this->DEL($where,$this->_tb_blog);
  }

  function blogMemberInput(){
      $bl_id = $this->getEl("bl_id");
      $bl_user_id = $this->getEl("bl_user_id");
      $bl_title = $this->getEl("bl_title");
      $bl_des = $this->getEl("bl_des");
      $bl_body = $this->getEl("bl_body");
      $show_pub = $this->getEl("show_pub");
      $show_pub_date = $this->getEl("show_pub_date");
      $cat_id = $this->getEl("set_cat");

      !($show_pub)?$show_pub=0:$show_pub=2;

      if(!$bl_user_id):
          $bl_user_id = $this->user_id;
      endif;

      $bl_data = array(
        "bl_cat_id" => $cat_id,
        "bl_user_id" => $bl_user_id,
        "bl_title" => $bl_title,
        "bl_des" => $bl_des,
        "bl_body" => $bl_body,
        "bl_date_create" => $this->today_andTime,
        "show_pub" => $show_pub,
        "show_pub_date" => $show_pub_date
      );

      return $bl_data;
  }
  /*
   *
   * End member 29-Apr-2020
   */


  /*
   * Admin section
   * 
   */

  function _seoSave(){
      $kw_id = $this->getEl("kw_id");
      $keyword = $this->getEl("keyword");
      $keydes = $this->getEl("keydes");
      $pub_user = "";

      $se_data = array(
          "og_title" => $keyword,
          "og_des" => $keydes,
          "og_type" => "article,blog",
          "article_publisher" => $this->user_name,
          "kw_date_add" => $this->today_andTime
      );

      if(!$kw_id):
          $kw_id = $this->SAVE($se_data,$this->_tb_seo);
      else:
      $get = $this->db
                    ->where(array("kw_id" => $kw_id))
                    ->get($this->_tb_seo)->result();
        foreach($get as $row):
            $pub_user = $row->article_publisher;
            $kw_id = $row->kw_id;
        endforeach;
        if($pub_user == ""):
            $pub_user = $this->user_name;
            $this->SAVE(array(
                        "article_publisher" => $pub_user,
                        "kw_date_add" => $this->today_andTime
                        ),$this->_tb_seo,array("kw_id" => $kw_id));
        endif;
        unset($se_data["article_publisher"]);
        unset($se_data["kw_date_add"]);
        $this->SAVE($se_data,$this->_tb_seo,array("kw_id" => $kw_id));
      endif;

        return $kw_id;
  } //--- End _seoSave

  function _blogSave(){
    $kw_id = $this->getEl("kw_id");
    $bl_id = $this->getEl("bl_id");
    $bl_user_id = $this->getEl("bl_user_id");
    if(!$bl_user_id) $bl_user_id = $this->user_id;
    $cat_id = $this->getEl("set_cat");
    $bl_title = $this->getEl("bl_title");
    $bl_des = $this->getEl("bl_des");
    $bl_body = $this->getEl("bl_body");
    $show_pub = $this->getEl("show_pub");
    !($show_pub)?$show_pub = 0:$show_pub=2;

    $show_pub_date = $this->getEl("show_pub_date");
    
    
    $bl_data = array(
        "bl_kw_id" => $kw_id,
        "bl_user_id" => $bl_user_id,
        "bl_cat_id" => $cat_id,
        "bl_title" => $bl_title,
        "bl_des" => $bl_des,
        "bl_body" => $bl_body,
        "show_pub" => $show_pub,
        "show_pub_date" => $show_pub_date,
        "bl_date_create" => $this->today_andTime
    );

    
    if(!$bl_id):
        $kw_id = $this->_seoSave();
        $uniq_key = $this->randomChar(75);
        $bl_data["bl_uniq_id"] = $uniq_key;
        $bl_data["bl_kw_id"] = $kw_id;
        $bl_id = $this->SAVE($bl_data,$this->_tb_blog);
    else:
        //--- update blog
        unset($bl_data["bl_date_create"]);
        $bl_data["bl_date_update"] = $this->today_andTime;
        $this->SAVE($bl_data,$this->_tb_blog,array("bl_id" => $bl_id));
    endif;
        
    return $bl_id;

  }

  function blogAdminSave(){

      $bl_id = $this->getEl("bl_id");
      $kw_id = $this->getEl("kw_id");
      $show_pub_date = $this->getEl("show_pub_date");
      $msg = "";

        if(!$bl_id):
            $bl_id = $this->_blogSave();
            $msg = "Success : blog created @{$bl_id}"; 
        else:
            $this->_blogSave();
            $msg = "Success : blog updated @{$bl_id}";
        endif;


        $r_data = array(
            "msg" => $msg."show {$show_pub_date} ha ha",
            "bl_id" => $bl_id
        );


        return $r_data;

  }

  function blogAdminDel($where){
      $this->DEL($where,$this->_tb_blog);
  }

  function blogInput(){
      $bl_id = $this->getEl("bl_id");
      $bl_user_id = $this->getEl("bl_user_id");
      $bl_cat_id = $this->getEl("set_cat");
      $bl_des = $this->getEl("bl_des");
      $bl_title = $this->getEl("bl_title");
      $bl_body = $this->getEl("bl_body");
      $show_public = $this->getEl("show_pub");

      $sh_1 = $this->getEl("show_pub_date");
      $show_pub_date = 0;
      if(!$sh_1):
      
          $sh_1 = 0;
          $show_pub_date = $sh_1;

      else:
        $sh_1 = strtotime($sh_1);
        $show_pub_date = date("Y-m-d",$sh_1); 
     endif; 
    
      !($show_public)?$show_public=0:$show_public=2;

        if(!$bl_user_id):
            $bl_user_id = $this->user_id;
        endif;      

      $bl_data = array(
          "bl_id" => $bl_id,
          "bl_user_id" => $bl_user_id,
          "bl_cat_id" => $bl_cat_id,
          "bl_des" => $bl_des,
          "bl_title" => $bl_title,
          "bl_body" => $bl_body,
          "show_pub" => $show_public,
          "show_pub_date" => $show_pub_date,
          "bl_date_create" => date("Y-m-d H:i:s",time())
      );

      return $bl_data;

  }



}


