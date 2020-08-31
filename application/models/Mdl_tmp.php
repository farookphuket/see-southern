<?php  


class Mdl_tmp extends MY_Model{

  protected $_tb_tmp = "tbl_template";
  protected $_tb_user = "users";
  protected $_tb_cat = "tbl_cat";

  function __construct(){
    parent::__construct();
  }


  function find($where){
      $get = $this->db->where($where)->get($this->_tb_tmp);
      return $get;
  }

  function all(){
      $get = $this->db->get($this->_tb_tmp);
      return $get;
  }



  /*
   * admin section
   */

  function getTmp($where=false,$limit=false,$offset=false){
      $get = "";
      $j1 = "{$this->_tb_user}.id={$this->_tb_tmp}.tmp_user_id";
      $j2 = "{$this->_tb_cat}.cat_id={$this->_tb_tmp}.cat_id";
      if($where):
        $get = $this->db
                    ->where($where)
                    ->order_by("tmp_date_create","DESC")
                    ->join($this->_tb_user,$j1)
                    ->join($this->_tb_cat,$j2)
                    ->get($this->_tb_tmp,$limit,$offset);
      else:
         $get = $this->db
                    ->order_by("tmp_date_create","DESC")
                    ->join($this->_tb_user,$j1)
                    ->join($this->_tb_cat,$j2)
                    ->get($this->_tb_tmp,$limit,$offset);   
      endif;
      return $get;
  }



  function tmpAdminSave(){
      $tmp_id = $this->getEl("tmp_id");
      $tmp_user_id = $this->getEl("tmp_user_id");
      $tmp_title = $this->getEl("tmp_title");
      $set_cat = $this->getEl("set_cat");
      $tmp_show_pub = $this->getEl("tmp_show_pub");
      !($tmp_show_pub)?$tmp_show_pub=0:$tmp_show_pub=2;
      $tmp_des = $this->getEl("tmp_des");
      $tmp_body = $this->getEl("tmp_body");

      $msg = "";

      if(!$tmp_user_id):
          $tmp_user_id = $this->user_id;
      endif;

      $tmp_data = array(
          "tmp_title" => $tmp_title,
          "tmp_des" => $tmp_des,
          "tmp_body" => $tmp_body,
          "tmp_show_pub" => $tmp_show_pub,
          "tmp_user_id" => $tmp_user_id,
          "cat_id" => $set_cat,
          "tmp_date_create" => $this->today_andTime
      );

      if($tmp_id):
          //--- update
        unset($tmp_data["tmp_date_create"]);
        $this->SAVE($tmp_data,$this->_tb_tmp,array("tmp_id" => $tmp_id));
        $msg = "Success : data has been updated @{$tmp_id}";
        else:
            //-- create
        $tmp_id = $this->SAVE($tmp_data,$this->_tb_tmp);
        $msg = "Success : data has created @{$tmp_id}";
      endif;
        $r_data = array(
            "msg" => $msg,
            "tmp_id" => $tmp_id 
        );
        return $r_data;
  }

  function tmpAdminDel($where){
      $this->DEL($where,$this->_tb_tmp);
      $r_data = array("msg" => "Success : data has been remove");
      return $r_data;
  }

  /*
   * END OF FILE
   * */

}


