<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


 /*
New edit with the MY_Model class on Thu-25-Aug-2016

*/
        protected $is_login;
        protected $is_admin;

        

        //--public variable
        
        public $ip;
        public $os;
        public $browser;
        public $o_put;

    function __construct() {
    parent::__construct();
    $this->is_login = $this->session->userdata("is_login");
        $this->load->model("Mdl_home");
        $this->load->model("Mdl_article");
        $this->load->model("Mdl_tour");

        $this->load->library("pagination");

        //$this->today = date("d-m-Y h:i a",time());
        //$this->u_data = $this->get_user_info();||comment two line out as no use
        $this->ip = $this->Mdl_home->getIP();
        $this->os = $this->Mdl_home->getOS();
        $this->browser = $this->Mdl_home->getBrowser();



    }
public function index()
{

    $url = site_url();
    $this->data['subview'] = "home_index";
    $this->data['meta_title'] = "Welcome  to {$url}";
    
    
    

    $this->load->view("_layout_main",$this->data);



}//end of index function
//----------------------------
//-------get Recent post
function getRecentPost(){
    $where = array(
        "ar_show_public !=" => 0,
        "ar_show_index !=" => 0,
        "ar_is_approve !=" => 0
    );
    $get = $this->Mdl_article->getArticle($where,10)->result();
    $num = count($get);
    $this->o_put["num_ar"] = $num;
    $this->o_put["get_ar"] = $get;
    $this->output->set_output(json_encode($this->o_put));
}


//----------getTourList
function getTourList($seg=1){
    //---Sat 3 Nov 2018

    $where = array(
        "mark_draft" => 0
    );
    $get = $this->Mdl_tour->getTour($where)->result();
    $num = count($get);

    $per_page = 4;
    $url = "getTourList";
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $seg;
    $start = ($page-1)*$conf["per_page"];
    $get_all = $this->Mdl_tour->getTour($where,$conf["per_page"],$start)->result();

    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;
    $this->o_put["get_tour"] = $get_all;
    $this->o_put["num_tour"] = $num;

    $this->output->set_output(json_encode($this->o_put));
}





}//end of Home class
