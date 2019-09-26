<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ustd extends MY_Controller {

    
    public $user_name;

    protected $is_login;
    protected $user_id;
    protected $user_email;
    protected $is_admin;
    protected $user_pass;
    protected $moderate;
    



    //the table name
    //edit on Thu 8 Jun 2017
    protected $_tb_user = "users";
    protected $_tb_status = "tbl_user_status";

    public $o_put;
    public $msg;
    public $today;
    public $user_type;
    public $ip;

  function __construct() {
    parent::__construct();

    //----test login with google
    //require_once APPPATH.'third_party/src/Google_Client.php';
	//require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

    //---load library
    $this->load->library("pagination");

    $this->load->model("Mdl_ustd");
    $this->load->model("Mdl_users");
    
    //check the user session
    $this->is_login = $this->user_is_login();
    $this->data["is_login"] = $this->is_login;
    $this->user_name = $this->getUserName();
    $this->user_id = $this->getUserId();
    $this->is_admin = $this->user_is_admin();
    $this->user_pass = $this->session->userdata("user_pass");
    $this->user_email = $this->session->userdata("user_email");
    $this->moderate = $this->user_is_mod();
    $this->user_type = $this->session->userdata("user_type");

    
    $this->ip = $this->Mdl_users->getIP();

    
 
  }

    function index(){

        //if the user enter this page
        //the script will check the session

        //$command = $this->input->post("command");
        //-----------end of google test
        $url = site_url("users/logout");
        if($this->is_login):
            $url = site_url("ustd/u");
            if($this->is_admin):
                $url = site_url("ustd/admin");
            endif;
            if($this->moderate):
              $url = site_url("ustd/mod");
            endif;
            redirect($url);
        endif;
        $this->data["meta_title"] = "user status share";
        $this->data["subview"] = "ustd/index";
        $tmp = "_MAIN_TMP";
        $this->load->view($tmp,$this->data);

    }//end of index


    /* -- Admin section 19-Sep-2019 -- */

    function admin(){
      if(!$this->is_admin):
        redirect(site_url("users/logout"));
        exit();
      endif;
      $this->data["subview"] = "admin/ustd/index";
      $this->data["meta_title"] = "Managing user status|{$this->user_name}|{$this->user_type}";
      $tmp = "_ADMIN_TMP";
      $this->load->view($tmp,$this->data);
      

    }

    function adminGet($page=1){
      $get = $this->Mdl_ustd->adminGet()->result();

      $this->o_put["get_st"] = $get;
      $this->output->set_output(json_encode($this->o_put));
    }

    function adminEdit($id){
      $where = array("{$this->_tb_status}.st_id" => $id);
      $get = $this->Mdl_ustd->adminGet($where)->result();
      $this->o_put["get_st"] = $get;
      $this->output->set_output(json_encode($this->o_put));
    }

    function adminSave(){
      $save = $this->Mdl_ustd->adminSave();
      $st_id = $save["st_id"];
      //$uniq_id = $save["uniq_id"];


  
      $this->o_put["st_id"] = $st_id;
      $this->o_put["msg"] = "success : data has been save";
      $this->output->set_output(json_encode($this->o_put));
    }

    /* -- End of Admin Section -- */
}//end of the class ustd
