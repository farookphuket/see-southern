<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {


  public $sysName = "Blog one";
  public $sysVersion = "1.0";
  public $sysDate = "21 Apr 2020";

  protected $_tb_cat = "tbl_cat";
  protected $_tb_tmp = "tbl_template";

  public $o_put;
  public $temp;
  public $subview;

  function __construct(){
    parent::__construct();
    $this->load->model("Mdl_tmp");
    $this->load->model("Mdl_cat");
    $this->load->model("Mdl_users");
    $this->load->model("Mdl_blog");

    $this->load->library("pagination");
    $this->data["sysName"] = $this->sysName;
    $this->data["sysVersion"] = $this->sysVersion;
    $this->data["sysDate"] = $this->sysDate;

    if($this->is_login):

        if($this->is_admin):
        

            $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
        elseif($this->moderate):
        
            $this->temp = "MOD/skin/SEP2019/_SEP2019_TMP";
        else:
        
            $this->temp = "MEMBER/skin/business/index";
        endif;

    else:
        $this->temp = "PUBLIC/skin/business/index";
        $this->subview = "PUBLIC/blog/_blog_view";
    endif;

        $this->data["subview"] = $this->subview;

    
  }

    public function index(){

        if($this->is_login):

            $url = site_url("blog/u");
            if($this->is_admin):
                $url = site_url("blog/admin");
            endif;
            if($this->moderate):
                $url = site_url("blog/mod");
            endif;
            
            redirect($url);

        endif;

        $this->data["meta_title"] = "{$this->sysName} | {$this->user_type_text}";
        $this->data["get_cat"] = $this->Mdl_cat->getCat(array("cat_uri" => "blog"))->result();
        $this->data["subview"] = "PUBLIC/blog/index";
        $this->load->view($this->temp,$this->data);
    }


  function blogGetTmp($cat_id){
      $g = $this->Mdl_tmp->getTmp(array("{$this->_tb_cat}.cat_id" => $cat_id))->result();
      $this->o_put["get_all"] = $g;
      $this->runOutput();
  }

  function blogSetTmp($tmp_id){
      $g = $this->Mdl_tmp->getTmp(array("{$this->_tb_tmp}.tmp_id" => $tmp_id))->result();
      $this->o_put["get"] = $g;
      $this->runOutput(); 
  }

  
  function blogGet($page=1){

      $where = array(
          "show_pub !=" => 0
      );
      $get1 = $this->Mdl_blog->blogGet($where)->result();
      $num = count($get1);

      $per_page = 10;
      $url = "blogGet";
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get_pub = $this->Mdl_blog->blogGet($where,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;

      $this->o_put["get_all"] = $get1;
      $this->o_put["get_pub"] = $get_pub;
      $this->runOutput();
  }

  function blogGetByCat($cat_id,$page=1){
      $where = array("{$this->_tb_cat}.cat_id" => $cat_id);
      $get = $this->Mdl_blog->blogGet($where)->result();
      $this->o_put["get"] = $get;
      $this->runOutput();
  }

  function view($bl_uniq_id){
      $where = array(
          "bl_uniq_id" => $bl_uniq_id,
            "show_pub !=" => 0 
      );
        $get = $this->Mdl_blog->blogGet($where)->result();
        foreach($get as $row):
            $this->data["keyword"] = $row->bl_title;
            $this->data["keydes"] = $row->bl_title;
            $this->data["meta_title"] = $row->bl_title;
        endforeach;
        $this->data["blog"] = $get;
        $this->load->view($this->temp,$this->data);
         
  }
  /*
   * member section 29-Apr-2020
   */ 

  function u(){
      if(!$this->is_login):
          redirect(site_url("users"));
            exit();
      endif;
    
      $this->data["get_cat"] = $this->Mdl_cat->getCat(array("cat_uri" => "blog"))->result();
      $this->data["meta_title"] = "{$this->sysName} | {$this->user_name} | {$this->user_type_text}";
      $this->data["subview"] = "MEMBER/blog/index";
      $this->load->view($this->temp,$this->data);
  }

  function blogMemberGet($page=1){
      $where = array(
          "bl_user_id" => $this->user_id
      );
      $get = $this->Mdl_blog->blogGet($where)->result();
      $num = count($get);
      $per_page = 4;
      $url = "blogMemberGet";
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get_my = $this->Mdl_blog->blogGet($where,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;
      $this->o_put["get_all"] = $get;
      $this->o_put["get_my"] = $get_my;
      $this->runOutput();

  }

  function blogMemberEdit($id){
    $s = $this->Mdl_blog->blogGet(array("bl_id" => $id))->result();
    $this->o_put["get"] = $s;
    $this->runOutput();
  }
  function blogMemberSave(){
      $s = $this->Mdl_blog->blogMemberSave();
      $this->o_put["bl_id"] = $s["bl_id"];
      $this->o_put["msg"] = $s["msg"];
      $this->runOutput();
  }
  function blogMemberDel($id){
      $s = $this->Mdl_blog->blogMemberDel(array("bl_id" => $id));
      $this->o_put["msg"] = "Success : item has been deleted!";
      $this->runOutput();
  }

  /*
   * mod section
   *
   */
  function mod(){
      $this->data["meta_title"] = "moderate";
      $this->data["subview"] = "MOD/blog/index";
      $this->load->view($this->temp,$this->data);
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
    $seg1 = $this->uri->segment(1);
    $get_cat = $this->Mdl_cat->getCat(array("cat_uri" => $seg1))->result();
    $this->data["get_cat"] = $get_cat;
    $this->data["subview"] = "ADMIN/blog/index";    
    $this->load->view($this->temp,$this->data);
  }

  function blogAdminGet($page=1){
      $get1 = $this->Mdl_blog->blogGet()->result();
      $num = count($get1);

      //-- pagination
      $url = "blogAdminGet";
      $per_page = 2;
      $conf = $this->getConfPagin($per_page,$num,$url);
      $this->pagination->initialize($conf);
      $start = ($page-1)*$per_page;
      $get2 = $this->Mdl_blog->blogGet(null,$per_page,$start)->result();
      if($num > $per_page):
          $this->o_put["pagination"] = $this->pagination->create_links();
      endif;
      $this->o_put["get_all"] = $get1;
      $this->o_put["get_bl"] = $get2;
      $this->runOutput();
  } 

  function blogAdminEdit($id){
      $s = $this->Mdl_blog->blogGet(array("bl_id" => $id))->result();
      $this->o_put["get"] = $s;
      $this->runOutput();
  }

  function blogAdminSave(){
      $s = $this->Mdl_blog->blogAdminSave();
      $this->o_put["msg"] = $s["msg"];
      $this->o_put["bl_id"] = $s["bl_id"];

      $this->runOutput();  
  }

  function blogAdminDel($id){
      $s = $this->Mdl_blog->blogAdminDel(array("bl_id" => $id));
      $this->o_put["msg"] = "Success : item has been deleted!";
      $this->runOutput();
  }



  //----- Global run
  function runOutput(){
      return $this->output->set_output(json_encode($this->o_put));
  }
}
