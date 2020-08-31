<?php  


class Mdl_blog extends MY_Model{

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

  function blogGet($where=false,$limit=false,$offset=false){
      $this->blogPublicToday();
      //$this->blogAddKey();
      $j1 = "{$this->_tb_user}.id={$this->_tb_blog}.bl_user_id";
      $j2 = "{$this->_tb_cat}.cat_id={$this->_tb_blog}.bl_cat_id";
      $get = "";
      if($where):
          $get = $this->db
                        ->where($where)
                        ->order_by("bl_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->join($this->_tb_cat,$j2)
                        ->get($this->_tb_blog,$limit,$offset);
      else:
            $get = $this->db
                        ->order_by("bl_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->join($this->_tb_cat,$j2)
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
  function blogAdminSave(){
      $d = $this->blogInput();

      $bl_id = $d["bl_id"];
      
      $bl_user_id = $d["bl_user_id"];
      $msg = "";
      if(!$d["bl_id"]):
            $msg = "Success : data has been created at @{$bl_id}";
            $d["bl_date_create"] = $this->today_andTime;
            $bl_id  = $this->SAVE($d,$this->_tb_blog);
        else:
            $msg = "Success : data has been updated @{$bl_id}";
            unset($d["bl_date_create"]);
            $d["bl_date_update"] = $this->today_andTime;
            $this->SAVE($d,$this->_tb_blog,array("bl_id" => $bl_id));
      endif;
            $this->blogAddKey(array("bl_id" => $bl_id));
            $r_data = array(
                "msg" => $msg,
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


