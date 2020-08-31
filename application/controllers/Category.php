<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Category extends MY_Controller{


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
      $this->load->model("Mdl_cat");

        if($this->is_login):
            if($this->is_admin):
                $this->tmp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
            elseif($this->moderate):
                $this->tmp = "MOD/skin/SEP2019/_SEP2019_TMP";
            else:
                $this->tmp = "MEMBER/skin/business/products";
            endif;
        else:
                 
            $this->tmp = "PUBLIC/skin/business/index";
        endif;
        
    }
    

    function index(){

        if($this->is_login):
            $url = "";

            if($this->is_admin):
                $url = site_url("category/admin/");
            elseif($this->moderate):
                $url = site_url("category/mod");
            else:
                $url = site_url("category/u");
            endif;
            redirect($url);    
       endif; 
        $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text}";
        $this->data["subview"] = "PUBLIC/category/index";
        $this->load->view($this->tmp,$this->data);

    }
    //---
    
    
    //-------- u
    function u(){
        
        
        $this->data["subview"] = "ADMIN/index";
        $this->data["meta_title"] = "{$this->user_type_text} | welcome {$this->user_name}";

        $this->load->view($this->tmp,$this->data);
    }

    
   
    /*
     * ADMIN SECTION 14-Apr-2020 START
     */

    function admin(){
        if(!$this->is_admin):
            redirect(site_url("users/logout"));
            exit();
        endif;
        $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text} | {$this->user_name}";
        $this->data["subview"] = "ADMIN/category/index";
        $this->load->view($this->tmp,$this->data);
    }

    function adminGetCat($page=1){
        $g = $this->Mdl_cat->getCat()->result();
        $num = count($g);

        //-- pagination
        $url = "adminGetCat";
        $per_page = 15;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get_cat = $this->Mdl_cat->getCat(null,$per_page,$start)->result();
        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;




        $this->o_put["get_all"] = $g;
        $this->o_put["get_cat"] = $get_cat;
        $this->output->set_output(json_encode($this->o_put));
    }


    function catAdminEdit($id){
        $g = $this->Mdl_cat->find(array("cat_id" => $id))->result();
        $this->o_put["get"] = $g;
        $this->output->set_output(json_encode($this->o_put));
    }

    function catAdminSave(){
        $s = $this->Mdl_cat->catAdminSave();
        $this->o_put["cat_id"] = $s["cat_id"];
        $this->o_put["msg"] = $s["msg"];
        $this->output->set_output(json_encode($this->o_put));
    }

    function catAdminDel($id){
        $this->Mdl_cat->catAdminDel(array("cat_id" => $id));
        $this->o_put["msg"] = "item has been deleted";
        $this->output->set_output(json_encode($this->o_put));
    }

     /*
     * ADMIN SECTION 14-Apr-2020 END
     */


}//end of file
