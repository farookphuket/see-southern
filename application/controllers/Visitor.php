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
        $this->load->library("pagination");

        if($this->is_login):
            if($this->is_admin):
                $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
            elseif($this->moderate):
                $this->temp = "MOD/skin/SEP2019/_SEP2019_TMP";
            else:
                $this->temp = "MEMBER/skin/business/index";
            endif;
        else:
            $this->temp = "PUBLIC/skin/business/index";
        endif;
    }

    function index(){
        if($this->is_login):
            $url = "";
            if($this->is_admin):
                $url = site_url("visitor/admin");
            elseif($this->moderate):
                $url = site_url("visitor/mod");
            else:
                $url = site_url("visitor/u");
            endif;
            redirect($url);
        endif;
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
    


    function admin($page=1){
        if(!$this->is_admin):
            redirect(site_url("users/logout"));
            exit();
        endif;
        $get1 = $this->Mdl_visitor->visitorGet()->result();
        $num = count($get1);

        $url = "visitor/admin";
        $per_page = 15;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get2 = $this->Mdl_visitor->visitorGet(null,$per_page,$start)->result();
        if($num > $per_page):
            $this->data["pagination"] = $this->pagination->create_links();
        endif;
        $this->data["subview"] = "ADMIN/visitor/index";
        $this->data["get_all"] = $get1;
        $this->data["get_visitor"] = $get2;
        $this->load->view($this->temp,$this->data);
    }

    function runOutput(){
        return $this->output->set_output(json_encode($this->o_put));
    }

}
