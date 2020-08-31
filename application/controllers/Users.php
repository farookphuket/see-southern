<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    
    
    protected $_tb_cat = "tbl_cat";

    public $o_put;
    public $tmp;

    public $sysName = "Users";
    public $sysVersion = "3.20";
    public $sysDate = "12-Apr-2020";

  function __construct() {
    parent::__construct();

    $this->load->library("pagination");

    $this->load->model("Mdl_users");
    $this->load->model("Mdl_ustd"); 
    $this->load->model("Mdl_cat"); 
    
        if($this->is_login):
            if($this->moderate):
                $this->tmp = "PUBLIC/skin/business/about";
            endif;
        
             
            $this->tmp = "MEMBER/skin/business/products";
            else:
                
            $this->tmp = "PUBLIC/skin/business/index";
        endif;

    }

    function index(){

        
        $url = "";
        if($this->is_login):
            $url = site_url("users/u/");
            if($this->is_admin):
                $url = site_url("admin/u");
            endif;
            if($this->moderate):
              $url = site_url("moderate/u");
            endif;
            redirect($url);
        endif;
        $this->data["meta_title"] = "{$this->sysName} | index";
        $this->data["action_id"] = $this->Mdl_users->randomChar(75);
        $this->data["subview"] = "PUBLIC/login/index";
        $this->load->view($this->tmp,$this->data);

    }//end of index

    
    

    /*
     * User section start 25-Apr-2020
     */
    function u(){

        if(!$this->is_login):
            redirect(site_url("users/logout"));
            exit();
        endif;

        $this->data["user_id"] = $this->user_id;


/*
        $where = array(
            "{$this->_tb_cat}.cat_uri" => "ustd",
            "{$this->_tb_cat}.cat_show_public !=" => 0
        
        );
        $this->data["get_cat"] = $this->Mdl_cat->getCat($where)->result();
 */


        $this->data["subview"] = "MEMBER/index";
        $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text} | welcome {$this->user_name}";
        $this->load->view($this->tmp,$this->data);

    }


    function userEditInfo(){
        $id = $this->user_id;
        $get = $this->Mdl_users->getUsers(array("id" => $id))->result();
        $this->o_put["get"] = $get;
        $this->runOutput();
    }

    function userIsConfirmPassword(){
        //-- sent session for this user to change his profile
        $s  = $this->Mdl_users->userIsConfirmPassword();
        $this->o_put["is_confirm"] = $s["is_confirm"];
        $this->o_put["user_id"] = $s["user_id"];
        $this->runOutput();
    }
    function userSaveUserInfo(){
        $s = $this->Mdl_users->userSaveUserInfo();
        $this->o_put["user_id"] = $s["user_id"];
        $this->o_put["msg"] = $s["msg"];
        $this->runOutput();
    }


    /*  End of user section 
     *  Last update 25 Apr 2020
     *  */




    //no need to edit
    function logout(){

        $user_data = array("user_name","user_id","is_login","is_admin");
        $this->session->unset_userdata($user_data);
        $this->session->sess_destroy();
        //redirect(site_url());
        $this->data["subview"] = "PUBLIC/login/logout";
        $this->data["meta_title"] = "loging out...";
        $this->tmp = "PUBLIC/skin/business/index";
        $this->load->view($this->tmp,$this->data);
    }
////End of mon-12-Sep-2016







    function runOutput(){
        return $this->output->set_output(json_encode($this->o_put));
    }




}//end of the class users
