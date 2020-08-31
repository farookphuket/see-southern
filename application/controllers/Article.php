<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {

  public $o_put;
  public $temp;
  public $sysName = "Article";
  public $sysVersion = "3.8";
  public $sysDate = "7 May 2020";



  protected $_tb_ar = "tbl_article";
  protected $_tb_tmp = "tbl_template";
  protected $_tb_cat = "tbl_cat";
  protected $_tb_seo = "seo";
  protected $_tb_user = "users";

  function __construct(){
    parent::__construct();
    
    $this->load->model("Mdl_article");
    $this->load->library("pagination");
    $this->load->model("Mdl_users");
    $this->load->model("Mdl_tmp");
    $this->load->model("Mdl_cat");
    
    //--basic info
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    if($this->is_login):
        if($this->is_admin):
            $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
        elseif($this->moderate):
            $this->temp = "MOD/skin/SEP2019/_SEP2019_TMP";
        else:
            
            $this->temp = "MEMBER/skin/business/products";
        endif;
    else:
        $this->temp = "PUBLIC/skin/business/index";
    endif;

  }
	public function index($page=1)
	{
            
            if($this->is_login):
                $url = "";
                if($this->is_admin):
                    $url = site_url("article/admin/");
                elseif($this->moderate):
                    $url = site_url("article/mod");
                else:
                    $url = site_url("article/u");
                endif;
                   redirect($url); 
            endif; 


            $this->data["meta_title"] = "Welcome {$this->sysName} version {$this->sysVersion}";

            $where = array(
                "ar_show_public !=" => 0,
                "ar_is_approve !=" => 0
            );
            $get_ar1 = $this->Mdl_article->articleGet($where)->result();


            $get_ar2 = $this->Mdl_article->articleGet($where)->result(); 
            $this->data["get_all"] = $get_ar1;
            $this->data["get_ar"] = $get_ar2;

            $this->data["subview"] = "PUBLIC/article/index";

            $this->load->view($this->temp,$this->data);

	}

  function articleGetTmp($cat_id){
      $get = $this->Mdl_tmp->getTmp(array("{$this->_tb_cat}.cat_id" => $cat_id))->result();
        $this->o_put["get"] = $get;
        $this->runOutput(); 
  }

  function articleSetTmp($id){
      $get = $this->Mdl_tmp->getTmp(array("{$this->_tb_tmp}.tmp_id" => $id))->result();
      $this->o_put["get"] = $get;
      $this->runOutput();
  }
  
  function view($uniq_id){

      $get  = $this->Mdl_article->articleGet(array("ar_uniq_id" => $uniq_id))->result();
      foreach($get as $row):
          $this->data["meta_title"] = "{$row->ar_title} | {$this->sysName}";
        $this->data["og_url"] = site_url("article/view/{$row->ar_uniq_id}");
        $this->data["keyword"] = "{$row->og_title}";
        $this->data["keydes"] = "{$row->og_des}";
      endforeach;

        $subview = "";
        if($this->is_login):
            if($this->is_admin):
                $subview = "ADMIN/article/view";
            elseif($this->moderate):
                $subview = "MOD/article/view";
            else:
                $subview = "MEMBER/article/view";
            endif;
        else:
            $subview = "PUBLIC/article/view";
        endif;

        $this->data["get"] = $get;
        $this->data["subview"] = $subview;

        $this->load->view($this->temp,$this->data);
      
  }


  /*
   *    MEMBER SECTION START
   */
  function u(){
      if(!$this->is_login):
          redirect(site_url("users/logout"));
        exit();
      endif;
      $this->data["meta_title"] = "{$this->user_type_text} | {$this->user_name} | {$this->sysName}";


      $this->data["subview"] = "MEMBER/article/index";

      $this->load->view($this->temp,$this->data);

  }



    /*
     *  MEMBER SECTION END
     */  

  /* moderate section START */

  
  /* moderate section End */

  /*
   * Admin Section 5-May-2020
   */
  function admin(){
      if(!$this->is_admin):
          redirect(site_url("users/logout"));
          exit();
      endif;

      $this->data["meta_title"] = "{$this->sysName} | {$this->user_name} | {$this->user_type_text}";
      $where = array(
          "cat_uri" => "article"
      );
      $this->data["get_cat"] = $this->Mdl_cat->getCat($where)->result();
      $this->data["subview"] = "ADMIN/article/index";
      $this->load->view($this->temp,$this->data);
  }

  function adminGet($page=1){
      $get_all = $this->Mdl_article->all()->result();
      $num = count($get_all);

      $url = "adminGet";
      $per_page = 15;
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get_ar = $this->Mdl_article->all(null,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;

      $this->o_put["get_ar"] = $get_ar;
      $this->o_put["get_all"] = $get_all;
      $this->runOutput();
  }

  function adminEdit($id){
      $s = $this->Mdl_article->articleGet(array("ar_id" => $id))->result();
      $this->o_put["get"] = $s;
      $this->runOutput();
  }

  function adminSave(){
      $s = $this->Mdl_article->adminSave();
      $this->o_put["msg"] = $s["msg"];
      $this->o_put["ar_id"] = $s["ar_id"];
      $this->runOutput();
  }

  function adminDel($id){
      $s = $this->Mdl_article->adminDel(array("ar_id" => $id));
      $this->o_put["msg"] = "Success data has been deleted!";
      $this->runOutput();
  }

  /* END OF ADMIN */
   
  function runOutput(){
      return $this->output->set_output(json_encode($this->o_put));
  }
}
