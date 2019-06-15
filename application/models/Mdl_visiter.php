<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mdl_visiter extends MY_Model{

    protected $_tb_visit = "tbl_visiter";
    
    public $ip;
    public $os;
    public $browser;

    public $user_name;
    public $user_id;

    public $today;
    public $cur_ip;

    function __construct(){
        parent::__construct();

        $this->user_id = $this->getUserId();
        $this->user_name = $this->getUserName();
        $this->ip = $this->getIP();
        $this->os = $this->getOS();
        $this->browser = $this->getBrowser();

        $this->today = date("Y-m-d ",time());
        $this->cur_ip = $this->ip;
    }


    //---
    

    function getVisiter($where = false){
        //$where = array("v_last_visit" => $this->today,"v_ip" => $this->cur_ip);
        
        $get = 0;

        if($where):
            $get = $this->db 
                        ->where($where)
                        ->order_by("v_last_visit_date","DESC")
                        ->get($this->_tb_visit);
        else:
            $get = $this->db
                        ->order_by("v_last_visit_date","DESC")
                        ->get($this->_tb_visit);  
        endif;
        return $get;
    }


    function saveVisiter($data,$where=false){


            $save = 0;
            $get = $this->getVisiter(
                array(
                    "v_last_visit_date " => $this->today,
                    "v_ip" => $this->ip
                    )
                )->result();
            $num = count($get);
            
           if($num == 0):
                //no record found in the db we save the new one
                $save = $this->saveTB($this->_tb_visit,$data);
            endif;
            if($save):
                return true;
            endif;
            return false;
    }



}//end of file