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
    
    function __construct(){
        parent::__construct();
        $this->user_name = $this->getUserName();
        
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
        
        if(!$where):
            $get = $this->db
                    ->order_by("c_last_access","DESC")
                    ->limit($limit,$offset)
                    ->get($this->_tb_comment);
        else:
            $get = $this->db
                    ->order_by("c_last_access","DESC")
                    ->limit($limit,$offset)
                    ->where($where)
                    ->get($this->_tb_comment);
        endif;
        
        
        return $get;
    }

    //--funciton saveComment
    function saveComment($data,$where=false){
        $save = 0;
        $id = 0;
        if($where):
            $save = $this->saveTB($this->_tb_comment,$data,$where);
            $id = $where["c_id"];
        else:
            $save = $this->saveTB($this->_tb_comment,$data);
            $id = $save;
        endif;
        return $id;
    }

    function numComment($where=false){
        if($where):
            $get = $this->db
                    ->where($where) 
                    ->get($this->_tb_comment)->result();
        else:
            $get = $this->db 
                    ->get($this->_tb_comment)->result();
        endif;
        
        $num = count($get);
        return $num;
    }
}//end of file
