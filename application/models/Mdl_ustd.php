<?php
/*
* class Users last edit on Sat-3-Sep-2016 
*
*/
class Mdl_ustd extends MY_Model{
    protected $_tb_user = "users";
    protected $_tb_status = "tbl_user_status";

    //add $_tb_user on Thu 15 June 2017

    function __construct() {
        parent::__construct();
 

   }
    
/**
 *  userStatus create on 18-Sep-2019
 *
 */

    function userGetStatus($where=false,$limit=false,$offset=false){
      $get = "";
      $j1 = "{$this->_tb_user}.id={$this->_tb_status}.st_user_id";
      if($where):
        $get = $this->db
                    ->order_by("date_create","DESC")
                    ->join($this->_tb_user,$j1)
                    ->where($where)
                    ->get($this->_tb_status,$limit,$offset);
      else:
          $get = $this->db
                    ->order_by("date_create","DESC")
                    ->join($this->_tb_user,$j1)
                    ->get($this->_tb_status,$limit,$offset);

        endif;
      return $get;
    }


    function userStatusSave(){

      $save = "";
      $st_id = $this->getEl("st_id");
      $st_body = $this->getEl("st_body");
      $img_url = $this->getEl("img_url");

      $st_title = "{$this->user_name} new status {$this->today_andTime}";

      $uniq_id = $this->randomChar(66);

      $st_data = array(
        "st_body" => $st_body,
        "st_title" => $st_title,
        "date_create" => $this->today_andTime,
        "date_update" => $this->today_andTime,
        "img_url" => $img_url,
        "uniq_id" => $uniq_id,
        "st_user_id" => $this->user_id
      );

      if(!$st_id):
        $save = $this->SAVE($st_data,$this->_tb_status);
      else:

      $save = $this->SAVE($st_data,$this->_tb_status,array("st_id" => $st_id));
        endif;


      $data = array(
        "user_id" => $this->user_id
      );
      return $data;
    }//---End of userStatusSave



    /* MOD section Start 30-sep-2019 */

    function modSave(){

        $msg = "";
        $uniq_id = $this->getEl("uniq_id");
        $st_user_id = $this->getEl("st_user_id");
        $st_id = $this->getEl("st_id");
        $st_title = $this->getEl("st_title");
        $st_body = $this->getEl("st_body");

        $show = !($this->getEl("pub"))?$show = 0:$show=2;
        $friend_only = !($this->getEl("friend_only"))?$friend_only = 0:$friend_only=2;
        $private_only = !($this->getEl("private_only"))?$private_only = 0:$private_only=2;

        if(!$st_user_id):
            $st_user_id = $this->user_id;
            endif;
        
        $st_data = array(
            "date_create" => $this->today_andTime,
            "date_update" => $this->today_andTime,
            "show_public" => $show,
            "friend_only" => $friend_only,
            "private_only" => $private_only,
            "st_title" => $st_title,
            "st_body" => $st_body,
            "st_user_id" => $st_user_id
        );

        if(!$st_id):
            //-- new item
            $st_data["uniq_id"] = $this->randomChar(66);
            $st_id = $this->SAVE($st_data,$this->_tb_status);

            $msg = "Success : data has been created @{$st_id}";
        else:
            //--- update data
            unset($st_data["date_create"]);
            unset($st_data["st_user_id"]);
                
            $this->SAVE($st_data,$this->_tb_status,array("{$this->_tb_status}.st_id" => $st_id));

            $msg = "Success : data has been updated on @{$st_id}";
        endif;

        $r_data = array(
            "msg" => $msg,
            "st_id" => $st_id
        ); 
        return $r_data;
    }


    function modDel($id){
        $where = array("{$this->_tb_status}.st_id" => $id);
        $last_count = 0;
        $this->DEL($where,$this->_tb_status);

        $msg = "Success : data has been deleted";
                    
        $r_data = array("msg" => $msg);
        return $r_data;
    }

    /* MOD section End */

    /* -- Admin section */
    function adminGet($where=false,$limit=false,$offset=false){
      $get = "";
      if($where):
        $get = $this->db
                    ->where($where)
                    ->order_by("date_create","DESC")
                    ->get($this->_tb_status,$limit,$offset);
      else:
        $get = $this->db
                    ->order_by("date_create","DESC")
                    ->get($this->_tb_status,$limit,$offset);

      endif;
      return $get;
    }


    //---- adminSave 19-Sep-2019
    function adminSave(){
      
      $st_id = $this->getEl("st_id");
      $img_url = $this->getEl("img_url");
      $st_body = $this->getEl("st_body");
      $uniq_id = $this->getEl("uniq_id");
      $show_pub = $this->getEl("show_pub");
      $friend_only = $this->getEl("friend_only");
      $private_only = $this->getEl("private_only");

    if(!$show_pub):
        $show_pub = 0;
      endif;

      if(!$friend_only):
        $friend_only = 0;
      endif;
     if(!$private_only):
        $private_only = 0;
      endif;

      if(!$uniq_id):
        $uniq_id = $this->randomChar(66);
       endif; 
      $st_user_id = $this->getEl("st_user_id");//--- just to prevent admin mode edit the user Id
      $st_data = array(
        "st_user_id" => $this->user_id,
        "img_url" => $img_url,
        "st_body" => $st_body,
        "date_create" => $this->today_andTime,
        "date_update" => $this->today_andTime,
        "show_public" => $show_pub,
        "friend_only" => $friend_only,
        "private_only" => $private_only 

      );

      if($st_user_id != 0):
        unset($st_data["st_user_id"]);

      endif;
      if(!$st_id):
        $save = $this->SAVE($st_data,$this->_tb_status);
        $st_id = $save;
      else:
        unset($st_data["date_create"]); 
        $save = $this->SAVE($st_data,$this->_tb_status,array("{$this->_tb_status}.st_id" => $st_id));
        

      endif;
      //-- return data
      $data = array(
        "st_id" => $st_id
      );
      return $data;

    }
  
    /* -- End of Admin Section */

}//end class

