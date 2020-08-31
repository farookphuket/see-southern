<?php

class Mdl_comment extends MY_Model{


    //--user system
    public $ip;
    public $os;
    public $browser;
    
    //--user
    public $user_id;
    public $user_name;


    //--table
    protected $_tb_comment = "tbl_comment";
    protected $_tb_user = "users";

    
    function __construct(){
        parent::__construct();
        
    }

    function find($where){
        $get = $this->db->where($where)->get($this->_tb_comment);
        return $get;
    }

    function all(){
        $get = $this->db->get($this->_tb_comment);
        return $get;
    }


    function getComment($where=false,$limit=false,$offset=false){
       $j1 = "{$this->_tb_user}.id = {$this->_tb_comment}.c_user_id"; 
        if(!$where):
            $get = $this->db
                    ->join($this->_tb_user,$j1)
                    ->order_by("c_date_create","DESC")
                    ->limit($limit,$offset)
                    ->get($this->_tb_comment);
        else:
            $get = $this->db
                    ->join($this->_tb_user,$j1)
                    ->order_by("c_date_create","DESC")
                    ->limit($limit,$offset)
                    ->where($where)
                    ->get($this->_tb_comment);
        endif;
        return $get;
    }

    function cmtCount($user_id=false,$show=false,$del=false){
        

        $get = 0;
        $j1 = "{$this->_tb_user}.id={$this->_tb_comment}.c_user_id";
        
        $where = array();

        if($user_id) $where['c_user_id'] = $this->user_id;

        if($show) $where["c_set_show !="] = 0;
            
        if($del) $where["{$this->_tb_comment}.c_set_del !="] = 0;

        if($user_id):
            $get = $this->db
                        ->join($this->_tb_user,$j1)
                        ->where($where)
                        ->order_by("c_date_create","DESC")
                        ->get($this->_tb_comment);
        else:
            $get = $this->db
                        ->join($this->_tb_user,$j1)
                        ->order_by("c_date_create","DESC")
                        ->get($this->_tb_comment);

        endif;
        $num = count($get->result());
        return $num;

    }

    function cmtMemberSave(){
        $c_id = $this->getEl("c_id");
        $msg = "";
        if(!$c_id):
            $c_id = $this->_commentSave();
            $msg = "Success : comment has been created, thank you";
        else:
            $this->_commentSave(); 
            $msg = "Success : comment has been updated, thank you";
        endif;
            $r_data = array(
                "c_id" => $c_id,
                "msg" => $msg
            );
        return $r_data;
    }


    function cmtMemberDel($where){
        $this->DEL($where,$this->_tb_comment);

    }

    /*
     *
     * Admin 
     */
    function cmtAdminSave(){
        $c_id = $this->getEl("c_id");
        $msg = "";
        if(!$c_id):
            $c_id = $this->_commentSave();
            $msg = "Success : comment has been created, thank you";
        else:

            $this->_commentSave(); 
            $msg = "Success : comment has been updated, thank you";
        endif;
            $r_data = array(
                "c_id" => $c_id,
                "msg" => $msg
            );
        return $r_data;
    }

    function commentAdminDel($where){
        $this->DEL($where,$this->_tb_comment);
    }



    function _commentSave(){
        $c_id = $this->getEl("c_id");
        $c_user_id = $this->getEl("c_user_id");
        $c_item_id = $this->getEl("c_item_id");
        $c_section_name = $this->getEl("c_section_name");
        $c_full_url = $this->getEl("c_full_url");
        $c_comment_title = $this->getEl("c_comment_title");
        $c_comment_body = $this->getEl("c_comment_body");

        $c_set_show = $this->getEl("c_set_show");
        !($c_set_show)?$c_set_show=0:$c_set_show=2;

        $c_set_del = $this->getEl("c_set_del");
        !($c_set_del)?$c_set_del=0:$c_set_del=2;

        if(!$c_user_id) $c_user_id = $this->user_id;

        $c_data = array(
            "c_item_id" => $c_item_id,
            "c_full_url" => $c_full_url,
            "c_section_name" => $c_section_name,
            "c_user_id" => $c_user_id,
            "c_comment_title" => $c_comment_title,
            "c_comment_body" => $c_comment_body,
            "c_date_create" => $this->today_andTime
            
        );
        if(!$c_id):
            //-- create comment
            $c_data["c_user_ip"] = $this->ip;
            $c_id = $this->SAVE($c_data,$this->_tb_comment);
        else:
            unset($c_data["c_date_create"]);
            unset($c_data["c_full_url"]);
            unset($c_data["c_item_id"]);
            unset($c_data["c_section_name"]);
            $c_data["c_date_update"] = $this->today_andTime;
            $c_data["c_set_show"] = $c_set_show;
            $c_data["c_set_del"] = $c_set_del;
            $this->SAVE($c_data,$this->_tb_comment,array("c_id" => $c_id));
        endif;

        return $c_id;
    }

}//end of file
