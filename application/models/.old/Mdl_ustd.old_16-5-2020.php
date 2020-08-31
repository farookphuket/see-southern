<?php  


class Mdl_ustd extends MY_Model{

  protected $_tb_tmp = "tbl_template";
  protected $_tb_user = "users";
  protected $_tb_cat = "tbl_cat";
  protected $_tb_ustd = "tbl_user_status";

  function __construct(){
    parent::__construct();
  }


  function ustdCount(){
      $get = $this->db->get($this->_tb_ustd);
      return $get;
  }
  function ustdGet($where=false,$limit=false,$offset=false){
      $j1 = "{$this->_tb_user}.id={$this->_tb_ustd}.st_user_id";
      $get = "";
      if($where):
          $get = $this->db
                        ->where($where)
                        ->order_by("st_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->get($this->_tb_ustd,$limit,$offset);
      else:
            $get = $this->db
                        ->order_by("st_date_create","DESC")
                        ->join($this->_tb_user,$j1)
                        ->get($this->_tb_ustd,$limit,$offset);
      endif;
      return $get;
  }

  function ustdUserGetTemplate($where){
      $j1 = "{$this->_tb_cat}.cat_id={$this->_tb_tmp}.cat_id";
      $get = $this->db
                    ->join($this->_tb_tmp,$j1)
                    ->where($where)
                    ->get($this->_tb_cat); 
      return $get;
  }

  function ustdUserSave(){
      $d = $this->ustdUserForm();
      $st_user_id = $this->getEl("st_user_id");
      if(!$st_user_id):
          $st_user_id = $this->user_id;
      endif;

      $d["st_user_id"] = $st_user_id;

        $st_id = $this->getEl("st_id");
        $msg = "";
      if(!$st_id):
          //--create
          $st_id = $this->SAVE($d,$this->_tb_ustd);
            $msg = "Success : Create @{$st_id} ";
        else:
            unset($d["st_date_create"]);
            $d["st_date_update"] = $this->today_andTime;
            $this->SAVE($d,$this->_tb_ustd,array("st_id" => $st_id));
            $msg = "Success : Update @{$st_id}";
        //-- update
      endif;

      $r_data = array(
          "msg" => $msg,
          "st_id" => $st_id
      );
     return $r_data; 

  }


  function ustdUserDel($where){
      $this->DEL($where,$this->_tb_ustd);
  }
  function ustdUserForm(){

      $is_show = $this->getEl("show_pub");
      !($is_show)?$is_show = 0:$is_show = 2;
        
      $st_title = $this->getEl("st_title");
      $st_body = $this->getEl("st_body");
      $st_id = $this->getEl("st_id");

      $u_data = array(
          "st_id" => $st_id,
          "st_title" => $st_title,
          "st_body" => $st_body,
          "show_public" => $is_show,
          "st_date_create" => $this->today_andTime
      );
      return $u_data;

  }

  /*
   * End Of User Section
   */

  function ustdAdminSave(){
      $d = $this->ustdInput();

      $st_id = $d["st_id"];
      
      $st_user_id = $d["st_user_id"];
      $msg = "";
      if(!$d["st_id"]):
            $msg = "Suucess : data has been created at @{$st_id}";
            $st_id  = $this->SAVE($d,$this->_tb_ustd);
        else:
            $msg = "Success : data has been updated @{$st_id}";
            unset($d["st_date_create"]);
            $d["st_date_update"] = $this->today_andTime;
            $this->SAVE($d,$this->_tb_ustd,array("st_id" => $st_id));
      endif;
            $r_data = array(
                "msg" => $msg,
                "st_id" => $st_id
            );
        return $r_data;

  }

  function ustdAdminDel($where){
      $this->DEL($where,$this->_tb_ustd);
  }

  function ustdInput(){
      $st_id = $this->getEl("st_id");
      $st_user_id = $this->getEl("st_user_id");
      $st_title = $this->getEl("st_title");
      $st_body = $this->getEl("st_body");
      $show_public = $this->getEl("show_public");
    
      !($show_public)?$show_public=0:$show_public=2;
        if(!$st_user_id):
            $st_user_id = $this->user_id;
        endif;      

      $ustd_data = array(
          "st_id" => $st_id,
          "st_user_id" => $st_user_id,
          "st_title" => $st_title,
          "st_body" => $st_body,
          "show_public" => $show_public,
          "st_date_create" => $this->today_andTime
      );

      return $ustd_data;

  }



}


