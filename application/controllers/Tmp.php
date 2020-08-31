<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tmp extends MY_Controller {


  public $sysName = "Template Generator";
  public $sysVersion = "1.0";
  public $sysDate = "25 Sep 2019";


  public $o_put;
  public $temp;

  function __construct(){
    parent::__construct();
    $this->load->model("Mdl_tmp");
    $this->load->model("Mdl_cat");
    $this->load->model("Mdl_users");

    $this->load->library("pagination");
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    if($this->is_admin):
        
        $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
    endif;
  }

    public function index(){

        $url = site_url("users");
        if($this->is_login):
            if($this->is_admin):
                $url = site_url("tmp/admin");
            endif;
        endif;
        redirect($url);

  	
    }


  function tmpGet($page=1){
      $get1 = $this->Mdl_tmp->tmpGet()->result();
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
    $this->data["get_cat"] = $this->Mdl_cat->getCat()->result();
    $this->data["subview"] = "ADMIN/temp/index";    
    $this->load->view($this->temp,$this->data);
  }

  function adminGetList($page=1){
      $get = $this->Mdl_tmp->getTmp()->result();
      $num = count($get);

      $url = "adminGetList";
        $per_page = 15;
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get_tmp = $this->Mdl_tmp->getTmp(null,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;


      $this->o_put["get_all"] = $get;
      $this->o_put["get_tmp"] = $get_tmp;
      $this->output->set_output(json_encode($this->o_put));


  }

  function tmpAdminEdit($id){
      $s = $this->Mdl_tmp->getTmp(array("tmp_id" => $id))->result();
      $this->o_put["get"] = $s;
      $this->output->set_output(json_encode($this->o_put));
  }

  function tmpAdminSave(){
    $s = $this->Mdl_tmp->tmpAdminSave();
    $this->o_put["msg"] = $s["msg"];
    $this->o_put['tmp_id'] = $s['tmp_id'];
    $this->output->set_output(json_encode($this->o_put));
  }

  function tmpAdminDel($id){
      $s = $this->Mdl_tmp->tmpAdminDel(array("tmp_id" => $id));
      $this->o_put["msg"] = $s["msg"];
      $this->output->set_output(json_encode($this->o_put));

  }


}
