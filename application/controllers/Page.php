<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

    
    public $user_name;

    protected $is_login;
    protected $user_id;
    protected $user_email;
    protected $is_admin;
    protected $user_pass;
    protected $moderate;
    



    //the table name
    //edit on Thu 8 Jun 2017
    protected $_tb_user;
    protected $_tb_page;
    protected $_tb_notice = "tbl_notification";

    public $o_put;
    public $user_type;
    public $ip;

    public $sysName = "Page";
    public $sysVersion = "1.0";
    public $sysDate = "3-Oct-2019";

  function __construct() {
    parent::__construct();

    //----test login with google
    //require_once APPPATH.'third_party/src/Google_Client.php';
	//require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

    //---load library
    $this->load->library("pagination");

    $this->load->model("Mdl_users");
    $this->_tb_user = $this->Mdl_users->getTable();

    $this->load->model("Mdl_page");
    $this->_tb_page = $this->Mdl_page->getTable();

    $this->load->model("Mdl_ustd"); //--18-Sep-2019
    
    //check the user session
    $this->is_login = $this->Mdl_users->user_is_login();
    $this->data["is_login"] = $this->is_login;
    $this->user_name = $this->Mdl_users->getUserName();
    $this->user_id = $this->Mdl_users->getUserId();
    $this->is_admin = $this->Mdl_users->user_is_admin();
    $this->user_pass = $this->session->userdata("user_pass");
    $this->user_email = $this->session->userdata("user_email");
    $this->moderate = $this->Mdl_users->user_is_mod();
    $this->user_type = $this->session->userdata("user_type");

    
    $this->ip = $this->Mdl_users->getIP();

    

    }

    function index(){

        $where = array("page_show !=" => 0);
        $get = $this->Mdl_page->getPage($where)->result();

        $this->data["get"] = $get;
        $this->data["meta_title"] = "{$this->sysName} version {$this->sysVersion} | {$this->user_type}";
        $this->data["subview"] = "page/page_list";
        $tmp = "_MAIN_TMP";
        $this->load->view($tmp,$this->data);

    }//end of index

    function about($id){
        //echo"This is about page";
        $where = array("page_id" => $id);
        $get = $this->Mdl_page->getPage($where)->result();
        $this->data["get"] = $get;

        $this->data["subview"] = "page/page_show";
        $this->load->view($tmp,$this->data);

    }


    function mod(){
        $this->data["subview"] = "mod/page/page_list";
        $tmp = "_SEP2019_TMP";
        $this->load->view($tmp,$this->data);
    }

    function modList($page=1){
        $get = $this->Mdl_page->modList()->result();
        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }

    function modEdit($id){
        $get = $this->Mdl_page->getPage(array("page_id" => $id))->result();

        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }

    function modSave(){

        $s = $this->Mdl_page->modSave();
        $this->o_put["page_id"] = $s["page_id"];
        $this->o_put["msg"] = $s["msg"];
        $this->output->set_output(json_encode($this->o_put));

    }
   //-----------end of admin section

}//end of the class users
