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



    /* moderate section 3 Oct 2019 START */

    function modList($where=false,$limit=false,$offset=false){

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

    /* moderate section 3 Oct 2019 END */
    
    //-----------Update <Sun-17-Dec-2017></Sun-17-Dec-2017>
    //--getUser will return all user if no id 
   function getUsers($where_u = false,$limit=false,$offset=false){

        
        
        $get = "";
        if($where_u):
            //return one row
            $get = $this->getTB($this->_tb_user,$where_u,$limit,$offset);
        else:
            //return all rows
            $get = $this->getTB($this->_tb_user,null,$limit,$offset);
        endif;
        return $get;
   }

   //------------
   function saveUser($data,$where=false){

        
        $id = 0;
        if($where):
            //--update data
            $id = $where["id"];
            $this->db 
                    ->where($where)
                    ->set($data)
                    ->update($this->_tb_user);
        else:
            $this->db 
                ->set($data)
                ->insert($this->_tb_user);
            $id = $this->db->insert_id();
        endif;
        return $id;

   }

   //------delUser Sat 30 Dec 2017
   function delUser($where){
       $del = $this->delTB($this->_tb_user,$where);
       
   }

   //--------End of Sun 17 Dec 2017


    //the method to check the login user
    
    function get_ban($id){
        $where = array(
                    "id" => $id,
                    "is_ban" => 1
                    );
        $get = $this->db
                    ->where($where)
                    ->get($this->_tb_user);
        $num = count($get->result());
        if($num == 0):
            return false;
        else:
            return true;
        endif;
        
    }
    
    function get_active($id){
        
        $where = array(
                    "id" => $id,
                    "is_activated !=" => 0
                    );
        $get = $this->db
                    ->where($where)
                    ->get($this->_tb_user);
        $num = count($get->result());
        if($num == 0):
            return false;
        else:
            return true;
        endif;
    }
    
    
    //----------Mon 18 Sep 2017
    function get_user($cmd=false,$id=false){
        
        $data = array();
        
        switch($cmd):
        
            case"active_user": 
                $where = array("is_activated" => 1);
                $get = $this->getTB($this->_tb_user,$where);
                $num = count($get->result());
                $data['num_active_user'] = $num;
                
            break;
            default : 
                $get = $this->db->get($this->_tb_user);
                $num = count($get->result());
                $data['num_user'] = $num;
            break;
        endswitch;
        //$data['num_user'] = $num;
        return $data;
    }
    
    //end of check login user

}//end class

