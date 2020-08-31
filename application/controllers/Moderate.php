<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moderate extends MY_Controller {

  public $o_put;
  public $sysName = "Moderate";
  public $sysVersion = "1.20";
  public $sysDate = "13 Oct 2019";

  //---user
  public $user_id;
  public $user_name;
  public $user_email;
  public $is_login;
  public $moderate;
  public $user_type_text;


  protected $_tb_tmp = "";
  


  function __construct(){
    parent::__construct();
    
    $this->load->model("Mdl_mod");
    $this->load->library("pagination");
    
    //--basic info
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    //$this->_tb_tmp = $this->Mdl_tmp->getTable();
    if(!$this->is_login):
      redirect(site_url("user/logout"));
      exit();
      endif;
    
  }
	public function index()
	{
            $this->data["meta_title"] = "Welcome {$this->sysName} version {$this->sysVersion} | {$this->user_name}";

            $this->data["subview"] = "mod/index";
            $tmp = "skin/mod_skin";
            $this->load->view($tmp,$this->data);

	}


  /* mod section START */
  function ustdGetList($page=1){
    $get = $this->Mdl_mod->ustdGetList()->result();
    $num = count($get);

    //--pagination
    $per_page = 4;
    $url = "ustdGetList";
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $start = ($page-1)*$per_page;
    $get_st = $this->Mdl_mod->ustdGetList(null,$per_page,$start)->result();
    if($num > $per_page):
      $this->o_put["pagination"] = $this->pagination->create_links();
      endif;
    $this->o_put["get"] = $get_st;
    $this->output->set_output(json_encode($this->o_put));
  }

  function ustdModSave(){
    $save = $this->Mdl_mod->ustdModSave();
    $this->o_put["share_id"] = $save["share_id"];
    $this->o_put["msg"] = $save["msg"];
    $this->output->set_output(json_encode($this->o_put));
  }
  function ustdModEdit($id){
    $where = array("st_id" => $id);
    $get = $this->Mdl_mod->ustdGetBy($where)->result();
    $this->o_put["get"] = $get;
    $this->output->set_output(json_encode($this->o_put));
  }

  function ustdModDel($id){
    $where = array("st_id" => $id);
    $g = $this->Mdl_mod->ustdModDel($where);
    $this->o_put["msg"] = $g["msg"];
    $this->output->set_output(json_encode($this->o_put));
  }

  /* mod section End  */
    
}
