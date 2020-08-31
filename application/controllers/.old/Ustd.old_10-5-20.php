<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustd extends MY_Controller {


  public $sysName = "Share status";
  public $sysVersion = "1.0";
  public $sysDate = "18 Apr 2020";

  protected $_tb_cat = "tbl_cat";
  protected $_tb_tmp = "tbl_template";


  public $o_put;
  public $temp;

  function __construct(){
    parent::__construct();
    $this->load->model("Mdl_tmp");
    $this->load->model("Mdl_cat");
    $this->load->model("Mdl_users");
    $this->load->model("Mdl_ustd");

    $this->load->library("pagination");
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    if($this->is_admin):
        
        $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
    elseif($this->moderate):
        
        $this->temp = "MOD/skin/SEP2019/_SEP2019_TMP";
    else:
        
        $this->temp = "PUBLIC/skin/business/index";
    endif;
  }

    public function index(){

        $url = site_url("ustd/u");
        if($this->is_login):
            if($this->is_admin):
                $url = site_url("ustd/admin");
            endif;
        endif;
        redirect($url);

  	
    }



  /*
   * member section
   */

  function userGetTemplate(){
      $where = array(
          "{$this->_tb_cat}.cat_uri" => "ustd",
          "{$this->_tb_cat}.cat_show_public !=" => 0
      );
      $this->o_put["get_tmp"] = $this->Mdl_ustd->ustdUserGetTemplate($where)->result();
      $this->runOutput();
  }

  function userSetTemplate($tmp_id){
      $where = array(
          "{$this->_tb_tmp}.tmp_id" => $tmp_id
      );
      $get = $this->Mdl_ustd->ustdUserGetTemplate($where)->result();
      $this->o_put["get"] = $get;
      $this->runOutput();
  }

  /*
   * User Section
   */

  function u(){
      if(!$this->is_login):
          redirect(site_url("users/logout"));
        exit();
      endif;
      $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text} | {$this->user_name}";
      $this->data["subview"] = "MEMBER/ustd/index";
    
     $this->load->view($this->temp,$this->data); 
  }

  function ustdUserGet($page=1){
      $where_pub = array(
          "show_public !=" => 0
      );
      $get_pub1 = $this->Mdl_ustd->ustdGet($where_pub)->result();
      $num = count($get_pub1);

      $url = "ustdUserGet";
      $per_page = 4;
    
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get_pub2 = $this->Mdl_ustd->ustdGet($where_pub,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;

      $this->o_put["ustd_pub"] = $get_pub2;
      $this->o_put["ustdPub_all"] = $get_pub1;
      $this->runOutput();
  }

  function ustdUserEdit($id){
      $s = $this->Mdl_ustd->ustdGet(array("st_id" => $id))->result();
      $this->o_put["get"] = $s;
      $this->runOutput();
  }

  function ustdUserDel($id){
      $s = $this->Mdl_ustd->ustdUserDel(array("st_id"=>$id));
      $this->o_put["msg"] = "Item has been deleted!";
      $this->runOutput();
  }

  function ustdUserSave(){
      $s = $this->Mdl_ustd->ustdUserSave();
      $this->o_put["msg"] = $s["msg"];
      $this->runOutput();
  }

  /*
   * admin section
   *
   */
  function admin(){
    if(!$this->is_admin):
        redirect(site_url("users/logout"));
        exit();
    endif;
    $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text}";
    $this->data["get_tmp"] = $this->Mdl_tmp->getTmp()->result();
    $this->data["subview"] = "ADMIN/ustd/index";    
    $this->load->view($this->temp,$this->data);
  }

  function ustdAdminGet($page=1){
      $get1 = $this->Mdl_ustd->ustdGet()->result();
      $num = count($get1);

      //-- pagination
      $url = "ustdAdminGet";
      $per_page = 10;
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get2 = $this->Mdl_ustd->ustdGet(null,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;
      $this->o_put["get_all"] = $get1;
      $this->o_put["get_st"] = $get2;
      $this->output->set_output(json_encode($this->o_put));
  } 

  function ustdAdminEdit($id){
      $s = $this->Mdl_ustd->ustdGet(array("st_id" => $id))->result();
      $this->o_put["get"] = $s;
      $this->runOutput();
  }

  function ustdAdminSave(){
      $s = $this->Mdl_ustd->ustdAdminSave();
      $this->o_put["msg"] = $s["msg"];
      $this->o_put["st_id"] = $s["st_id"];

      $this->runOutput();  
  }

  function ustdAdminDel($id){
      $s = $this->Mdl_ustd->ustdAdminDel(array("st_id" => $id));
      $this->o_put["msg"] = "Success : item has been deleted!";
      $this->runOutput();
  }



  //----- Global run
  function runOutput(){
      return $this->output->set_output(json_encode($this->o_put));
  }
}
