<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Moderate extends MY_Controller{
    protected $user_id;
    protected $user_name;
    protected $is_login;
    protected $is_admin;
    protected $moderate;

    public $o_put;

    
    protected $_tb_user = "users";

    function __construct() {
      parent::__construct();
      $this->load->model("Mdl_mod");


      $this->is_admin = $this->Mdl_mod->user_is_admin();
      $this->is_login = $this->Mdl_mod->user_is_login();
      $this->moderate = $this->Mdl_mod->user_is_mod();
      $this->user_id = $this->Mdl_mod->getUserId();
      $this->user_name = $this->Mdl_mod->getUserName();

      //Load the library..edit on Mon-31-July-2017
      $this->load->library("pagination");

      //Load the models
      $this->load->model("Mdl_users");
      $this->load->model("Mdl_article");
      $this->load->model("Mdl_admin");
      $this->load->model("Mdl_cat");
      $this->load->model("Mdl_booking");
      $this->load->model("Mdl_faq");
      $this->load->model("Mdl_notice");



    }
    

    function index(){
        if(!$this->moderate):
            exit();
            endif;
        $tmp = "_SEP2019_TMP";
        $this->data["subview"] = "mod/mod_index";
        $this->load->view($tmp,$this->data);

    }
    //---
    
    
   
   



}//end of file
