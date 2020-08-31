<?php
/*
* class Users last edit on Sat-3-Sep-2016 
*
*/
class Mdl_users extends MY_Model{
    protected $_tb_user = "users";
    protected $_order_by;

    //add $_tb_user on Thu 15 June 2017


    function __construct() {
        parent::__construct();
 

   }


    function usersCount(){
        $get = $this->db->get($this->_tb_user);
        return $get;
    }
        
    //--getUser will return all user 
   function getUsers($where = false,$limit=false,$offset=false){

       $get = "";

        if($where):
            $get = $this->db
                        ->where($where)
                        ->order_by("date_register","DESC")
                        ->get($this->_tb_user,$limit,$offset);
        else:
            $get = $this->db
                        ->order_by("date_register","DESC")
                        ->get($this->_tb_user,$limit,$offset);
       endif;


      return $get; 

   }

   function userData(){
       $user_name = $this->getEl("user_name");
       $user_email = $this->getEl("user_email");
       $user_tel = $this->getEl("user_tel");
       $about_user = $this->getEl("about_user");
       
       
       $user_data = array(
            "name" => $user_name,
            "email" => $user_email,
            "tel" => $user_tel,
            "about_user" => $about_user
            
       );


       return $user_data; 

   }

   function userIsConfirmPassword(){
       $user_id = $this->getEl("user_id");
       $user_pass = $this->make_hash($this->getEl("conf_pass"));
       $get = $this->getUsers(array("id" => $user_id,"passwd" => $user_pass))->result();

       $is_confirm = 0;
       if(count($get) != 0):
           $is_confirm = 1;
       endif;
       $r_data = array(
           "is_confirm" => $is_confirm,
           "user_id" => $this->user_id
       );
       return $r_data;
   }

   function userSaveUserInfo(){
       $action_id = $this->getEl("action_id");
       $pass = $this->getEl("new_pass");
       $nP = $this->make_hash($pass);

       $msg = "";
       $user_id = "";
       if($action_id != $this->user_id):
            $msg = "Sorry! there is no command!";
            $user_id = 0;
        else:

           $d = $this->userData();
            if($pass):  
                $d["passwd"] = $nP;
            endif; 

           $d["last_update"] = $this->today_andTime;
           $this->SAVE($d,$this->_tb_user,array("id" => $this->user_id));
           $msg = "Success : your user account has been updated your pass = {$pass}";


        endif;


       $r_data = array(
           "user_id" => $this->user_id,
           "msg" => $msg
       );
       return $r_data;
           
   }





   
}//end class

