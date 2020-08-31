<?php  


class Mdl_mod extends MY_Model{

  protected $_tb_user = "users";
  protected $_tb_ustd = "tbl_user_status";
  function __construct(){
    parent::__construct();
  }



  function ustdGetList($where=false,$limit=false,$offset=false){

    $j1 = "{$this->_tb_user}.id={$this->_tb_ustd}.st_user_id";
    $get = "";
    if($where):
      $get = $this->ustdGetBy($where);
    else:
    $get = $this->db
                ->order_by("{$this->_tb_ustd}.date_create","DESC")
                ->join($this->_tb_user,$j1)
                ->get($this->_tb_ustd,$limit,$offset); 
    endif;

    return $get;
  }
  
  function ustdGetBy($where){

    $j1 = "{$this->_tb_user}.id={$this->_tb_ustd}.st_user_id";
    $get = $this->db
                ->join($this->_tb_user,$j1)
                ->order_by("{$this->_tb_ustd}.date_create","DESC")
                ->where($where)
                ->get($this->_tb_ustd);
    return $get;
  }

  function ustdModSave(){
    $share_id = $this->getEl("share_id");
    $img_url = $this->getEl("img_url");
    $friend_only = $this->getEl("friend_only");
    $share_title = $this->getEl("shareTitle");
    $share_body = $this->getEl("shareBody");

    $pub = !($this->getEl("pub"))?$pub=0:$pub=2;
    $friend_only = !($this->getEl("friend_only"))?$friend_only=0:$friend_only=2;

    $private_only = !($this->getEl("private_only"))?$private_only=0:$private_only=2;


    $share_data = array(
      "st_title" => $share_title,
      "st_body" => $share_body,
      "date_create" => $this->today_andTime,
      "date_update" => $this->today_andTime,
      "img_url" => $img_url,
      "show_public" => $pub,
      "friend_only" => $friend_only,
      "private_only" => $private_only
    );
    $msg = "";
    $save = "";
    if(!$share_id):
    //-- new item
      $uniq_id = $this->randomStr(66);
      $share_data["st_user_id"] = $this->user_id;
      $share_data["uniq_id"] = $uniq_id;
      $save = $this->SAVE($share_data,$this->_tb_ustd);
      $share_id = $save;
      $msg = "Success : data has been created @{$share_id}";
    else:
      unset($share_data["date_create"]);
      $save = $this->SAVE($share_data,$this->_tb_ustd,array("st_id" => $share_id));
      $msg = "Success : data has been updated @{$share_id}";
      endif;

    $r_data = array(
      "msg" => $msg,
      "share_id" => $share_id
    );
    return $r_data;
  }

  function ustdModDel($where){
    $st_id = 0;
    $msg = "";
    $get = $this->ustdGetBy($where)->result();
    foreach($get as $row):
      $st_id = $row->st_id;
      $this->Del(array("st_id" => $st_id),$this->_tb_ustd);
      endforeach;
      $get = $this->ustdGetList()->result();
      $num = count($get);
      $msg = "Success : data has been removed! there are {$num} item(s) from last operation.";

      $r_data = array("msg" => $msg);
      return $r_data;
  }
  

}


