<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public $o_put;
  public $sysName = "see-southern";
  public $sysVersion = "3.2";
  public $sysDate = "8 Sep 2019";


  protected $_tb_tmp = "";
  protected $_tb_ustd = "tbl_user_status";

  function __construct(){
    parent::__construct();
    
    $this->load->model("Mdl_home");
    $this->load->model("Mdl_ustd");
    $this->load->library("pagination");

    //--basic info
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;


  }
	public function index()
	{
            $this->_seoIndex();
          
            $this->data["subview"] = "PUBLIC/home";
            $tmp = "PUBLIC/skin/business/index";
            $this->load->view($tmp,$this->data);

	}


  function _seoIndex(){
      $get_last_post = $this->Mdl_ustd->ustdGet(null,1,null)->result();
      foreach($get_last_post as $row):
          $this->data["meta_title"] = $row->st_title." - ".$row->article_publisher;
            $this->data["keyword"] = $row->og_title;
            $this->data["keydes"] = $row->og_des;
            $this->data["publisher"] = $row->article_publisher;
      endforeach;
  }
  function ustdGet($page=1){
      $where = array(
          "show_public !=" => 0
      );
      $get1 = $this->Mdl_ustd->ustdGet($where)->result();
      $num = count($get1);

      //---pagination
      $url = "ustdGet";
      $per_page  = 10;
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get2 = $this->Mdl_ustd->ustdGet($where,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;
      $this->o_put["get_all"] = $get1;
      $this->o_put["get_st"] = $get2;
      $this->runOutput();
  }



  



  function runOutput(){
      return $this->output->set_output(json_encode($this->o_put));
  }

}
