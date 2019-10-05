<?php
/*
* class Users last edit on Sat-3-Sep-2016 
*
*/
class Mdl_page extends MY_Model{
    protected $_tb_user = "users";
    protected $_tb_page = "tbl_page";
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
                    ->order_by("date_create","DESC")
                    ->get($this->_tb_page,$limit,$offset);
            else:
                $get = $this->db
                    ->order_by("date_create","DESC")
                    ->get($this->_tb_page,$limit,$offset);

            endif;
        return $get;
    }

    function modSave(){

        $page_id = $this->getEl("page_id");
        $page_title = $this->getEl("page_title");
        $page_body = $this->getEl("page_body");
        $show = !($this->getEl("show"))?$show=0:$show=2;

        $p_data = array(
            "page_title" => $page_title,
            "page_body" => $page_body,
            "page_show" => $show,

            "date_create" => $this->today_andTime,
            "date_update" => $this->today_andTime

        );
        if(!$page_id):
            $save = $this->SAVE($p_data,$this->_tb_page);
            $page_id = $save;
            $msg = "Success : page has been created @{$page_id}";
        else:
            unset($p_data["date_create"]);

            $save = $this->SAVE($p_data,$this->_tb_page,array("page_id" => $page_id));
            $msg = "Success : page id {$page_id} has been updated!";
        endif;

            $r_data = array(
                "page_id" => $page_id,
                "msg" => $msg
            );
            return $r_data;
    }

    function getPage($where){

        $get = "";
        if($where):
            $get = $this->db
                        ->where($where)
                        ->get($this->_tb_page);
            endif;
        return $get;
    }

    /* moderate section 3 Oct 2019 END */
    
        
    //end of check login user

}//end class

