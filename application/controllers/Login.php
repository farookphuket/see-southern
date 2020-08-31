<?php 

//---create on 20 Nov 2018 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{

    public $is_login;
    public $user_id;

    

    public $is_admin;
    public $user_pass;
    public $moderate;
    

    //---protect string as google user
    protected $g_name;
    protected $g_email;

    //the table name
    //edit on Thu 8 Jun 2017
    protected $_tb_user = "";
    protected $_tb_notice = "tbl_notification";

    public $o_put;
    public $msg;
    public $user_type;
    public $user_type_text;
    public $ip;
    public $tmp;

    function __construct() {
            parent::__construct();

            //---load library
            $this->load->library("pagination");

            $this->load->model("Mdl_users");
            $this->load->model("Mdl_login");
            $this->_tb_user = $this->Mdl_login->getTable();
           
            
            $this->tmp = "skin/business/index"; 

        }


    function index(){
        $this->data["meta_title"] = "{$this->sysName} | get login";
        $this->data["subview"] = "PUBLIC/login/index";
       $this->data["action_id"] = $this->Mdl_login->randomChar(75); 
        $this->load->view($this->tmp,$this->data);
    }

    function webLogin(){
        $s = $this->Mdl_login->useWebLogin();
        $this->o_put["url"] = $s["url"];
        $this->o_put["msg"] = $s["msg"];
        $this->output->set_output(json_encode($this->o_put));
    }


    /*
     * Google login for see-southern.com
     * 15-Apr-2020
     */

    function googleLogin(){
            $this->data["meta_title"] = "login with your google account";
            $this->data["subview"] = "PUBLIC/login/_google_login";
            $this->load->view($this->tmp,$this->data);
    }

    function useGoogleService(){
        $get = $this->Mdl_login->useGoogleService();
        $this->o_put["url"] = $get["url"];
        $this->o_put["msg"] = $get["msg"];
        $this->output->set_output(json_encode($this->o_put));
    }

    /*
     * facebook login service 12-Apr-2020 START
     *
     */
        function facebookLogin(){
            $this->data["meta_title"] = "login with your facebook account";
            $this->data["subview"] = "PUBLIC/login/_facebook_login";
            $this->load->view($this->tmp,$this->data);

        }

    function useFacebookLogin(){
        //-- will return redirct url
        $s = $this->Mdl_login->useFacebookLogin();
        $this->o_put["msg"] = $s["msg"];
        $this->o_put["url"] = $s["url"];
        $this->output->set_output(json_encode($this->o_put));
    }

        
    /*
     * facebook login service 12-Apr-2020 END
     */ 

}
