<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Visitor extends MY_Controller{

    protected $_tb_visit = "tbl_visitor";


    public $o_put;
    public $temp;    


    function __construct(){
        parent::__construct();
        $this->load->model("Mdl_visitor");


        
    }

    function index(){
        
    }

   /*
    * Call by ajax
    *
    */ 

    function visitorGetCount(){
        $s = $this->Mdl_visitor->visitorCount()->result();

        $td = $this->Mdl_visitor->visitorCountToday();
        $tM = $this->Mdl_visitor->visitorCountMonth();
        $tY = $this->Mdl_visitor->visitorCountYear();
        

        $this->o_put["get"] = $s;
        $this->o_put["today"] = $td["visit_today"];
        $this->o_put["yesterday"] = $td["visit_yesterday"];
        $this->o_put["thisMonth"] = $tM["visit_thisMonth"];
        $this->o_put["lastMonth"] = $tM["visit_lastMonth"];
        $this->o_put["thisYear"] = $tY["visit_thisYear"];
        $this->o_put["lastYear"] = $tY["visit_lastYear"];
        $this->runOutput();
    }
    


    function runOutput(){
        return $this->output->set_output(json_encode($this->o_put));
    }

}
