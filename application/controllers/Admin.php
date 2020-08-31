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
      $this->load->model("Mdl_ustd");
      $this->load->model("Mdl_blog");
      $this->load->model("Mdl_admin");
      $this->load->model("Mdl_cat");
      $this->load->model("Mdl_comment");
      $this->load->model("Mdl_visitor");
      $this->load->model("Mdl_tmp");


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

    
    function getServiceNumber(){
        $num_ustd = count($this->Mdl_ustd->ustdCount()->result());
        $num_blog = count($this->Mdl_blog->blogCount()->result());
        $num_user = count($this->Mdl_users->usersCount()->result());
        $num_visit = count($this->Mdl_visitor->visitorCount()->result());
        $num_cat = count($this->Mdl_cat->all()->result());
        $num_tmp = count($this->Mdl_tmp->all()->result());
        $num_comment = count($this->Mdl_comment->all()->result());


        $this->o_put["num_ustd"] = $num_ustd;
        $this->o_put["num_blog"] = $num_blog;
        $this->o_put["num_user"] = $num_user;
        $this->o_put["num_visit"] = $num_visit;
        $this->o_put["num_cat"] = $num_cat;
        $this->o_put["num_tmp"] = $num_tmp;

        $this->runOutput();
    }
   


    function runOutput(){
        return $this->output->set_output(json_encode($this->o_put));
    }


}//end of file
