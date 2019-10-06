<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Template extends MY_Controller{

    //-- Last edit 29-Sep-2019
    //-- @Roi-Et 
    protected $user_id;
    protected $user_name;
    protected $is_login;
    protected $is_admin;
    protected $moderate;
    protected $_tb_tmp;

    public $o_put;
    public $tmp;

    public $sysName = "Template Gen";
    public $sysVersion = "1.0";
    public $sysDate = "29 sep 2019";

    
    protected $_tb_user;

    function __construct() {
      parent::__construct();
      $this->is_admin = $this->user_is_admin();
      $this->moderate = $this->user_is_mod();
      $this->is_login = $this->user_is_login();
      $this->user_id = $this->session->userdata("user_id");
      //$this->user_is_admin();

      //Load the library..edit on Mon-31-July-2017
      $this->load->library("pagination");

      //Load the models
      $this->load->model("Mdl_users");
      $this->load->model("Mdl_template");
      $this->_tb_tmp = $this->Mdl_template->getTable();

      $this->user_name = $this->Mdl_template->getUserName();
      $this->load->model("Mdl_article");
      $this->load->model("Mdl_admin");
      $this->load->model("Mdl_cat");
      $this->load->model("Mdl_booking");
      $this->load->model("Mdl_faq");
      $this->load->model("Mdl_notice");

      $this->data["sysName"] = $this->sysName;
      $this->data["sysVersion"] = $this->sysVersion;
      $this->data["sysDate"] = $this->sysDate;

      $this->tmp = "_SEP2019_TMP";

    }
    

    function index(){
        if($this->is_admin):
            redirect(site_url("admin/u"));
        endif;
        if($this->moderate):
            redirect(site_url("template/mod"));
        endif;
        
        echo"template";
    }
    //---
    
    function tmpList($page=1){

    }

    function tmpGet($id){
        $where = array("tmp_id" => $id);
        $get = $this->Mdl_template->tmpList($where)->result();
        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
  

    /* Moderate section Start */

    function modList($page=1){
        $get = $this->Mdl_template->tmpList()->result();
        $this->o_put["get"] = $get;

        $this->output->set_output(json_encode($this->o_put));
    }
    function mod(){
        $this->data["subview"] = "mod/template/tmp_list";
        $tmp = "_SEP2019_TMP";
        $this->load->view($tmp,$this->data);
    }

    function modEdit($id){
        $where = array("tmp_id" => $id);
        $get = $this->Mdl_template->tmpList($where)->result();
        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));

    }

    function modSave(){
        $s = $this->Mdl_template->modSave();
        $this->o_put["msg"] = $s["msg"];
        $this->o_put["tmp_id"] = $s["tmp_id"];
        $this->output->set_output(json_encode($this->o_put));
    }

    function modDel($id){
        $where = array("tmp_id" => $id);
        $del = $this->Mdl_template->modDel($where);
        $this->o_put["msg"] = $del["msg"];
        $this->output->set_output(json_encode($this->o_put));
                
    }

    /* Moderate section End */

    /* admin section create on 5 Oct 2019 */
    function admin(){
        $this->data["meta_title"] = "{$this->sysName} | {$this->user_type}";
        $this->data["subview"] = "admin/template/list_tmp";


        $this->load->view($this->tmp,$this->data);
    }

    function adminList($page=1){
        $get = $this->Mdl_template->tmpList()->result();

        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }

    function adminEdit($id){
        $where = array("tmp_id" => $id);
        $get = $this->Mdl_template->tmpList($where)->result();
        $this->o_put["get"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }

    function adminSave(){
        $s = $this->Mdl_template->modSave();
        $this->o_put["msg"] = $s["msg"];
        $this->o_put["tmp_id"] = $s["tmp_id"];
        $this->output->set_output(json_encode($this->o_put));
    }

    function adminDel($id){
        $where = array("tmp_id" => $id);
        $d = $this->Mdl_template->modDel($where);
        $this->o_put["msg"] = $d["msg"];
        $this->output->set_output(json_encode($this->o_put));
    }

    /* End of admin section */


}//end of file
