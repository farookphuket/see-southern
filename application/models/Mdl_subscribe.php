<?php 

class Mdl_subscribe extends MY_Model{


    protected $_tb_sub = "tbl_subscribe";


    //---public
    public $ip;
    public $os;
    public $browser;

    function __construct(){
        parent::__construct();

        $this->ip = $this->getIP();
        $this->os = $this->getOS();
        $this->browser = $this->getBrowser();
    }

    function get($where=false){
        $get = "";
        if($where):
            $get = $this->db
                        ->where($where)
                        ->order_by("sub_by_date","DESC")
                        ->get($this->_tb_sub);
        else:
            $get = $this->db
                        
                        ->order_by("sub_by_date","DESC")
                        ->get($this->_tb_sub);
        endif;
        return $get;
    }

    function save($data,$where=false){
        $id = "";
        $save = "";
        if($where):
            $save = $this->db 
                        ->set($data)
                        ->where($where)
                        ->update($this->_tb_sub);
            $id = $where["sub_id"];
        else:
            $save = $this->db 
                        ->set($data)
                        ->insert($this->_tb_sub);
            $id = $this->db->insert_id();
        endif;
        return $id;
    }
}//---end of file