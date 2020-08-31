<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin extends MY_Controller{


    public $user_id;
    public $user_name;
    public $is_login;
    public $is_admin;

    public $o_put;
    public $tmp;

    
    protected $_tb_user = "users";

    function __construct() {
      parent::__construct();

      
      //Load the library..edit on Mon-31-July-2017
      $this->load->library("pagination");

      //Load the models
      $this->load->model("Mdl_users");
      $this->load->model("Mdl_admin");


      if(!$this->is_admin):
        //echo"No Admin..";
        redirect(site_url("users/logout"));
      endif;


      $this->tmp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
    }
    

    function index(){
        if($this->is_admin):
            redirect(site_url("admin/u"));
        endif;
        $this->data["meta_title"] = "admin page | {$this->user_name}";

        $this->data["subview"] = "ADMIN/index";
        $this->load->view($this->tmp,$this->data);
    }
    //---
    
    
    //-------- u
    function u(){
        
        
        $this->data["subview"] = "ADMIN/index";
        $this->data["meta_title"] = "{$this->user_type_text} | welcome {$this->user_name}";

        $this->load->view($this->tmp,$this->data);
    }

    
   



}//end of file
