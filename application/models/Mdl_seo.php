<?php 


class Mdl_seo extends MY_Model{

    
    protected $_tb_seo = "seo";

    function __construct(){
        parent::__construct();
    }

    //---
    function getAll($where=false,$limit=false,$offset=false){
        $get = 0;
        if($where):
            $get = $this->db 
                        ->where($where)
                        ->order_by("kw_date_add","DESC")
                        
                        ->get($this->_tb_seo,$limit,$offset);
        else:
            $get = $this->db 
                        
                        ->order_by("kw_date_add","DESC")
                        ->get($this->_tb_seo,$limit,$offset);
        endif;
        return $get;
    }

    function getTagList($key){
        $where = array("kw_id" => $key);
        $get = $this->db->where($where)->get($this->_tb_seo);
        return $get;
    }

    function saveTag($data,$where=false){
        $save = 0;
        $id = 0;
        if(!$where):
            $save = $this->db
                            ->set($data)
                            ->insert($this->_tb_seo);
            $id = $this->db->insert_id();
        else:
            $save = $this->db
                            ->where($where)
                            ->set($data)
                            ->update($this->_tb_seo);
            $id = $where["kw_id"];
        endif;
        return $id;
    } 

    //----delete tag
    function delTag($where){
        
        $this->db 
                ->where($where)
                ->delete($this->_tb_seo);
        
        //---check data
        $r = $this->db->affected_rows();
        return $r;
    }

}