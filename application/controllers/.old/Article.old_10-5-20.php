<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {

  public $o_put;
  public $sysName = "Article";
  public $sysVersion = "3.2";
  public $sysDate = "13 Oct 2019";



  protected $_tb_ar = "tbl_article";
  protected $_tb_seo = "seo";
  protected $_tb_user = "users";

  function __construct(){
    parent::__construct();
    
    $this->load->model("Mdl_article");
    $this->load->library("pagination");
    $this->load->model("Mdl_user");
    $this->load->model("Mdl_tmp");
    
    //--basic info
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    //$this->_tb_tmp = $this->Mdl_tmp->getTable();

  }
	public function index()
	{
            $this->data["meta_title"] = "Welcome {$this->sysName} version {$this->sysVersion}";


            $this->data["subview"] = "article/index";
            $tmp = "tmp1";
            $this->load->view($tmp,$this->data);

	}

  function arGetList($page=1){
    $where = array(
      "ar_show_public !=" => 0,
      "ar_is_approve !=" => 0
    );
    $get = $this->Mdl_article->arGetList($where)->result();
    $num = count($get);

    //---pagination
    $url = "arGetList";
    $per_page = 10;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $start = ($page-1)*$per_page;
    $get_ar = $this->Mdl_article->arGetList($where,$per_page,$start)->result();

    if($num > $per_page):
      $this->o_put["pagination"] = $this->pagination->create_links();
      endif;



    //---display
    $this->o_put["get"] = $get_ar;
    $this->output->set_output(json_encode($this->o_put));
  }

  function read($uniq_id){
    $where = array(
      "uniq_id" => $uniq_id
    );
    $ar_id = 0;
    //--- read will return join table seo,user,article
    $get = $this->Mdl_article->arGetBy($where)->result();
    foreach($get as $row):
      $this->data["og_url"] = $row->og_url;
      $this->data["keyword"] = $row->kw_page_keyword;
      $this->data["keydes"] = $row->kw_page_des;
      $this->data["meta_title"] = $row->ar_title;
      $ar_id = $row->ar_id;
    endforeach;
  
    $rg = $this->Mdl_article->arNumReadCount(array("ar_id" => $ar_id));
    $msg = $rg["msg"];
    $this->data["test_msg"] = $msg;
    $this->data["get"] = $get;        
    $this->data["subview"] = "article/read";
    $tmp = "tmp1";
    $this->load->View($tmp,$this->data);
  }


  /* moderate section START */
  function mod(){
    if(!$this->moderate):
      //echo"you are not Moderate!";
      redirect(site_url("user/logout"));
      exit();
      endif;
    $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text}";


    $this->data["get_tmp"] = $this->Mdl_tmp->getList()->result();
    $this->data["subview"] = "mod/article/index";
    $tmp = "skin/mod_skin";
    $this->load->view($tmp,$this->data);
  }
    


  function modGetList($page=1){
        $get = $this->Mdl_article->arGetList()->result();
    $num = count($get);

    //---pagination
    $url = "modGetList";
    $per_page = 5;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $start = ($page-1)*$per_page;
    $get_ar = $this->Mdl_article->arGetList(null,$per_page,$start)->result();

    if($num > $per_page):
      $this->o_put["pagination"] = $this->pagination->create_links();
      endif;



    //---display
    $this->o_put["get"] = $get_ar;
    $this->output->set_output(json_encode($this->o_put));

  }

  function modEdit($id){
    $where = array("ar_id" => $id);
    $get = $this->Mdl_article->arGetBy($where)->result();
    $this->o_put["get"] = $get;
    $this->output->set_output(json_encode($this->o_put));
  }

  function modSave(){
    $get = $this->Mdl_article->modSave();
    $this->o_put["ar_id"] = $get["ar_id"];
    $this->o_put["msg"] = $get["msg"];
    $this->output->set_output(json_encode($this->o_put));
  }

  function modDel($id){
    $where = array("ar_id" => $id);
    $d = $this->Mdl_article->modDel($where);
    $this->o_put["msg"] = $d["msg"];
    $this->output->set_output(json_encode($this->o_put));
  }

  /* moderate section End */
   
}
