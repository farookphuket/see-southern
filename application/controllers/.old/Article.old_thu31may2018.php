<?php

class Article extends MY_Controller{

    protected $_tb_ar = "tbl_article";
    protected $_tb_cat = "tbl_cat";
    protected $_tb_notice = "tbl_notification";
    protected $_tb_his = "TBL_ARTICLE_HISTORY";


    protected $is_login;
    protected $user_id;
    protected $user_name;
    protected $is_admin;
    protected $moderate;

    public $o_put = array();
    public $today;

    //--user some info
    public $ip;
    public $browser;
    public $os;
    

    
    
    function __construct(){
        parent::__construct();
        $this->load->model("Mdl_article");
        $this->load->model("Mdl_cat");
        $this->load->library("pagination");

        $this->today = date("Y-m-d h:i:s",time());

        $this->ip = $this->Mdl_article->getIP();
        $this->os = $this->Mdl_article->getOS();
        $this->browser = $this->Mdl_article->getBrowser();
        $this->user_id = $this->Mdl_article->getUserId();
        $this->user_name = $this->Mdl_article->getUserName();

        //--
        $this->moderate = $this->session->userdata("moderate");
    }

    function index(){

        //if the user is login will redirect to owner page
        //get who come to this page

        $who = $this->getWho();
        $url = $who["url"];
        $rd = $who["redirect"];
        if($rd == true):
            //redirect to the url
            redirect($url);
        endif;
        $this->data["get_url"] = $url;
        $this->data["redirect"] = $rd;
       //get the public article
        $where_ar = array(
            "ar_show_public !=" => 0,
            "ar_is_approve !=" => 0
        );
        $get_all_ar = $this->Mdl_article->getArticle($where_ar)->result();
        $num_all_ar = count($get_all_ar);
        
        //pagination config 
        $per_page = 10;
        $conf = array();
        $conf["base_url"] = site_url("article/index");
        $conf["total_rows"] = $num_all_ar;
        $conf["per_page"] = $per_page;
        $this->pagination->initialize($conf);

        $get_ar = $this->Mdl_article->getArticle($where_ar,$conf["per_page"],$this->uri->segment(3))->result();
        $this->data["per_page"] = $per_page;
        $this->data["num_ar"] = $num_all_ar;
        $this->data["get_ar"] = $get_ar;
        $this->data["subview"] = "article/ar_index";

       $this->load->view("_layout_main",$this->data); 
    }


    //--summary
    function summary(){
        //--create on Fri 11 May 2018
        //--this method will return the summary
        //--to both call by ajax and other method
        $data = array();

        //--all article
        $all_ar = $this->Mdl_article->getArticle()->result();
        $data["all"] = count($all_ar);

        $approve = $this->Mdl_article->getArticle(array("ar_is_approve !="=>0))->result();
        $data["approve"] = count($approve);

        $not_approve = $this->Mdl_article->getArticle(array("ar_is_approve "=>0))->result();
        $data["not_approve"] = count($not_approve);

        $public = $this->Mdl_article->getArticle(array("ar_show_public !="=>0))->result();
        $data["public"] = count($public);

        $private = $this->Mdl_article->getArticle(array("ar_show_public "=>0))->result();
        $data["private"] = count($private);

        $show_index = $this->Mdl_article->getArticle(array("ar_show_index !="=>0))->result();
        $data["show_index"] = count($show_index);

        $this->output->set_output(json_encode($data));

        return $data;
    }
    //--------------------
    //this method will get the user and redirect to his own page
    function getWho(){

        //default url is set to index
        $url = site_url("article");
        $data = array();
        $data["redirect"] = false;
        if($this->is_login):
            $url = site_url("article/own");
            if($this->is_admin):
                $url = site_url("article/admin");
            endif;
            $data["redirect"] = true;
        endif;
        $data["url"] = $url;
        return $data;
    }

    //-----------
    function getCatList($c_id=false){
        //this method is call by ajax. so no need the view file.
        $where_cat = array();
        $get_all_cat = "";

        //the pagination conf need
        $conf = array();

        //user and visiter can see only the category that has content at least 1 item

        if($this->is_login):
            //the member will see thing
            

            if($this->is_admin):
                $get_all_cat = $this->Mdl_article->getCat()->result();
                $num_cat = count($get_all_cat);
            endif;
        else:
            //anonymous user view the category

        endif;

        $this->o_put["get_cat"] = $get_all_cat;
        $this->o_put["num_cat"] = $num_cat;
        $this->output->set_output(json_encode($this->o_put));
    }

    //-----------viewCat
    function viewCat($cat_id){

        $where_cat = array(
            "cat_id" => $cat_id,
            "cat_show_public!=" => 0,
            "has_content !=" => 0
        );
        $get_cat = $this->Mdl_article->getCat($where_cat)->result();
        $this->o_put["get_cat"] = $get_cat;

        $where_ar = array(
            "cat_id" => $cat_id,
            "ar_show_public !=" => 0,
            "ar_is_approve !=" => 0
        );
        $get_all_ar = $this->Mdl_article->getArticle($where_ar)->result();
        $num_all_ar = count($get_all_ar);
        $c_data = array(
            "has_content" => $num_all_ar
        );
        $this->Mdl_article->saveCat($c_data,array("cat_id" => $cat_id));
        
        $first_page = site_url("article/viewCat/{$cat_id}");
        $per_page = 4;
        $conf = array();
        $conf["base_url"] = site_url("article/viewCat/{$cat_id}");
        $conf["total_rows"] = $num_all_ar;
        $conf["per_page"] = $per_page;
        $conf["full_tag_open"] = "<a class='back_at_me' href='$first_page'>";
        $conf["full_tag_close"] = "</a>";

        $this->pagination->initialize($conf);
        $get_ar = $this->Mdl_article->getArticle($where_ar,$conf['per_page'],$this->uri->segment(4))->result();
        $this->o_put["get_ar"] = $get_ar;
        if($num_all_ar > $per_page):
            $this->o_put["pagin_ar"] = $this->pagination->create_links();
        endif;

        $this->output->set_output(json_encode($this->o_put));
    }

    //----save category
    function saveCat(){
        $cat_id = $this->input->post("cat_id");
        $cat_title = $this->input->post("cat_title");
        $cat_section = $this->input->post("cat_section");
        $cat_pub = $this->input->post("cat_public");
        $cat_allow_user = $this->input->post("allow_change");
        $label = "";

        if(!$cat_pub):
            $cat_pub = 0;
        endif;
        if(!$cat_allow_user):
            $cat_allow_user = 0;
        endif;
        $cat_data = array(
            "cat_title" => $cat_title,
            "cat_section" => $cat_section,
            "cat_show_public" => $cat_pub,
            "allow_user_change" => $cat_allow_user,
            "cat_user_id" => $this->user_id
        );
        if(!$cat_id):
            //create new category
            $save = $this->Mdl_cat->saveCat($cat_data);
            $label = "Create";
        else:
            //update the category
            $save = $this->Mdl_cat->saveCat($cat_data,array("cat_id" => $cat_id));
            $label = "Update";
        endif;
        $this->o_put["msg"] = "The Category has been {$label} successfully!";

        $this->output->set_output(json_encode($this->o_put));
       
    }
    //----------getArList
    function getArList(){

        //Load the pagination class
        //$this->load->library("pagination");
        //call this method by ajax

        $cat_id = $this->input->post("cat_id");
        $page = $this->input->post("page");
        if(!$page):
            $page = 1;
        endif;
        $per_page = 4;

        $where_ar = array();
        if(!$cat_id):
            $where_ar["ar_show_public !="] = 0;
            $where_ar["ar_is_approve !="] = 0;
        else:
            $where_ar["ar_show_public !="] = 0;
            $where_ar["ar_is_approve !="] = 0;
            $where_ar["cat_id"] = $cat_id;
        endif;
        
        $get_all_ar = $this->Mdl_article->getArticle($where_ar);
        $num_all_ar = count($get_all_ar->result());

        
        //Link back to first page
        $first_page = site_url("article/getArList");
        //conf pagin
        $conf = array();
        $conf["per_page"] = $per_page;
        $conf["base_url"] = site_url("article/getArList/{$page}");
        $conf["total_rows"] = $num_all_ar;
        $conf["full_tag_open"] = "<a class='back-at-one' href='$first_page'>";
        $conf["full_tag_close"] = "</a>";
        $this->pagination->initialize($conf);

        //set output to page
        $get_ar = $this->Mdl_article->getArticle($where_ar,$conf['per_page'],$this->uri->segment(4));
        $this->o_put["get_ar"] = $get_ar->result();
        $this->o_put["num_ar"] = $num_all_ar;

        if($num_all_ar > $per_page):
            $this->o_put["pagin_ar"] = $this->pagination->create_links();
        endif;
        //show the output
        $this->output->set_output(json_encode($this->o_put));
    }
  //--------------
  function readAr(){
        //--call by ajax
        
        $ar_id = $this->input->post("ar_id");
        $ip = $this->ip;
        
        //--make count
        $this->Mdl_article->num_ar_view(array("ar_id" => $ar_id));
        
        //--get the item to show
        $get_ar = $this->Mdl_article->getArticle(array("ar_id" => $ar_id))->result();
        $this->o_put["get"] = $get_ar;
        $this->output->set_output(json_encode($this->o_put));


  }
  //---------------

  function read($id){
    //--call by get
    $get = $this->Mdl_article->getArticle(array("ar_id" => $id))->result();
    
    $this->data["get_ar"] = $get;
    $this->data["meta_title"] = "Read more";
    $this->data["subview"] = "article/read_article";


    $this->load->view("_layout_main",$this->data);

  }
  

  //------------
  function own(){
    //--last check on fri-13-Apr-2018
    //--work great
    if(!$this->is_login):
        redirect(site_url("article"));
    endif;
    $this->data["is_login"] = $this->is_login;
    $cmd = $this->input->post("cmd");
    $ar_id = $this->input->post("ar_id");
    $page = $this->input->post("page");

    //---get the form element
    $cat_id = $this->input->post("sel_cat");
    $ar_title = $this->input->post("ar_title",true);
    $ar_summary = $this->input->post("ar_summary",true);
    $ar_body = $this->input->post("ar_body",true);

    //--filter
    //$ar_body = htmlspecialchars($ar_body);
    $ar_summary = htmlspecialchars($ar_summary);
    $ar_title = htmlspecialchars($ar_title);

    $ar_pub = $this->input->post("ar_pub");
    //----Tue 24/apr/2018

    $msg = "";
    $err = 0;
    if(!$ar_pub):
        $ar_pub = 0;
    endif;
    $ar_data = array(
        "ar_title" => $ar_title,
        "ar_summary" => $ar_summary,
        "ar_body" => $ar_body,
        "ar_show_public" => $ar_pub,
        "ar_user_id" => $this->user_id,
        "ar_post_by" => $this->user_name,
        "date_add" => $this->today,
        "date_edit" => $this->today,
        "cat_id" => $cat_id
    );

    $today = $this->today;
    switch($cmd):
        case"listPublicAr":
                $page = $this->input->get("page");
                if(!$page):
                    $page = 1;
                else:
                    $page = $page;
                endif;
                $per_page = 4;
                
                //--get the public article but not this user id
                $where_pub_ar = array(
                    "ar_show_public !=" => 0,
                    "ar_is_approve !=" => 0,
                    "ar_user_id !=" => $this->user_id
                );
                $get_pub_ar = $this->Mdl_article->getArticle($where_pub_ar)->result();
                $num_pub_ar = count($get_pub_ar);
                
                $pageone = site_url("article/own");
                $pub_conf = array(
                    "base_url" => site_url("article/own/{$page}"),
                    "total_rows" => $num_pub_ar,
                    "per_page" => $per_page,
                    "full_tag_open" => "<div id='paginator'><a class='backone' href='{$pageone}'>",
                    "full_tag_close" => "</a></div>"
                );
                $this->pagination->initialize($pub_conf);

                
                    //$this->o_put["firstPage"] = "<a href='{$pub_first_page}' class='showPagin'></a>";
                $this->o_put["showPagination"] = $this->pagination->create_links();
                
                $ar_pub = $this->Mdl_article
                            ->getArticle(
                                $where_pub_ar,
                                $pub_conf["per_page"],
                                $this->uri->segment(4))->result();
                $this->o_put["num_pub_ar"] = $num_pub_ar;
                $this->o_put["ar_pub"] = $ar_pub;
                

                $this->output->set_output(json_encode($this->o_put));
                //--end of public ar 23/4/2018
        break;
        case"readAr":
            $where_ar = array(
                "ar_id" => $ar_id,
                "ar_is_approve !=" => 0
            );
            $get = $this->Mdl_article->getArticle($where_ar)->result();
            $this->o_put["get"] = $get;

            //---sent admin notification
            $note_title = "new read Article by user {$this->user_name} on {$today}";
            $note_body = "The user name {$this->user_name} has read aticle id {$ar_id}
            on {$today} this operation has done by os {$this->os} browser{$this->browser} IP {$this->ip} 
            
            ";
            $note_data = array(
                "note_title" => $note_title,
                "note_body" => $note_body
            );
            $this->notice_sent($note_data);

            //---end of notification

            //---count this article view time.
            $this->Mdl_article->num_ar_view(array("ar_id" => $ar_id));

            //--display to screen
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"editAr":
            $where_ar = array("ar_id" => $ar_id);
            $get_ar = $this->Mdl_article->getArticle($where_ar)->result();
            $this->o_put["get_ar"] = $get_ar;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"saveAr":
            $label = "Create";
            unset($ar_data["date_edit"]);

            if($ar_id):
                $label = "Update";
                unset($ar_data["date_add"]);
                $this->Mdl_article->saveArticle($ar_data,array("ar_id" => $ar_id));
            else:
                $this->Mdl_article->saveArticle($ar_data);
            endif;
            $msg = "your post has been {$label}";
            //---sent admin notification
            $note_title = "new {$label} in article table from {$this->user_name}";
            $note_body = "The user name {$this->user_name} 
            has made {$label} in article table on {$this->today}
            the action from user name {$this->user_name} using IP {$this->ip} os {$this->os} {$this->browser}
            ";
            $note_data = array(
                "notice_title" => $note_title,
                "notice_body" => $note_body,
                "notice_ip" => $this->ip,
                "by_user_name" => $this->user_name

            );
            $this->Mdl_article->saveTB($this->_tb_notice,$note_data);
            //--end admin notification
            
            $this->o_put["msg"] = $msg;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"delAr":
            $where_ar = array("ar_id" => $ar_id);
            $this->Mdl_article->delArticle($where_ar);
            $this->o_put["show_msg"] = "item has been DELETED";
            $this->output->set_output(json_encode($this->o_put));

            //sent report to admin
            $n_title = "The user {$this->user_name} has delete the id {$ar_id} item FROM  Article table";
            $n_body = "The operation has done on {$today} browser : {$this->u_data['browser']} ip : {$this->u_data['ip']}";
            $note_data = array(
                "note_title" => $n_title,
                "note_body" => $n_body
            );
            $this->notice_sent($note_data);
        break;
        default:
            if($this->moderate):
                redirect(site_url("article/moderate"));
            endif;
            $this->data["meta_title"] = "{$this->user_name}'s blog ";
            
            //the category to show in the form
            $where_cat = array(
                "cat_show_public !=" => 0
            );
            $get_cat = $this->Mdl_article->getCat($where_cat)->result();
            $this->data["num_cat"] = count($get_cat);
            $this->data["get_cat"] = $get_cat;
            //get only this user id
            $where_ar = array("ar_user_id" => $this->user_id);
            $get_all_ar = $this->Mdl_article->getArticle($where_ar)->result();
            $num_all_ar = count($get_all_ar);

            $page = $this->input->get("page");
            if(!$page):
                $page = 1;
            else:
                $page = $page;
            endif;
            $per_page = 10;
            //conf for the pagination
            
            $conf = array();
            $conf["base_url"] = site_url("article/own/{$page}");
            $conf["per_page"] = $per_page;
            $conf["total_rows"] = $num_all_ar;

            $this->pagination->initialize($conf);


            $this->data["per_page"] = $per_page;
            $this->data["num_all_ar"] = $num_all_ar;
            $get_ar = $this->Mdl_article->getArticle($where_ar,$conf["per_page"],$this->uri->segment(4))->result();
            $this->data["get_ar"] = $get_ar;
            //$this->o_put["get_ar"] = $get_ar;
            $this->data["subview"] = "article/user_ar";
            $this->load->view("_layout_main",$this->data);
        break;
    endswitch;
  } 
  //------------- 
  function notice_sent($note_data){
    //--this method will report if the user add or edit the article
    
    $today = date("Y-m-d h:i:s",time());
    
    $n_title = $note_data["note_title"];
    $n_body = $note_data["note_body"];
    $n_ip = $this->ip;
    $n_date = $today;
    $n_name = $this->user_name;

    $save_data = array(
        "notice_title" => $n_title,
        "notice_body" => $n_body,
        "notice_ip" => $n_ip,
        "by_user_name" => $n_name,
        "notice_date" => $n_date
    );
   
    $this->Mdl_article->saveTB($this->_tb_notice,$save_data);
  }
  //---------------

  /*
|--------Admin section
|--------Only the admin session can access to this script
  */
// function testSave(){
//     $cmd = $this->input->post("cmd");
//     echo"form submit!! the cmd is = '{$cmd}'";
// }

function _saveAr(){

    $title = $this->input->post("ar_title",true);
    $body = $this->input->post("ar_body");
    $summary = $this->input->post("ar_summary",true);
    $ar_pub = $this->input->post("ar_pub");
    $approve = $this->input->post("approve");
    $cat_id = $this->input->post("sel_cat");
   // $ar_user_id = $this->input->post("ar_user_id");
   // $ar_user_name = $this->input->post("ar_user_name");
    if(!$approve):
        $approve = 0;
    endif;

    if(!$ar_pub):
        $ar_pub = 0;
    endif;
    $show_index = ($ar_pub = $this->input->post("ar_pub"))?$show_index = 1:$show_index = 0;

    $ar_id = $this->input->post("ar_id");

    $today = date("Y-m-d h:i:s",time());
    //prepare the data to be save in the database
    $ar_data = array();
    $ar_data["date_add"] = $today;
    $ar_data["date_edit"] = $today;
     
    $ar_user_id = $this->user_id; //the id is the user session
    $ar_user_name = $this->user_name; //the name is the user session name

    if($ar_id):
        unset($ar_data["date_add"]);
        $where_ar = array("ar_id" => $ar_id);
        $get = $this->Mdl_article->getArticle($where_ar)->result();
        foreach($get as $row):
            if($row->ar_user_id != $this->user_id):
                //if the owner id session is not this session id
                //then the writer name and id should not be change
                
               $ar_user_id = $row->ar_user_id;
               $ar_user_name = $row->ar_post_by;
            endif;
        endforeach;
    endif;
    
    $ar_data["cat_id"] = $cat_id;
    $ar_data["ar_title"] = $title;
    $ar_data["ar_body"] = $body;
    $ar_data["ar_summary"] = $summary;
    $ar_data["ar_post_by"] = $ar_user_name;
    $ar_data["ar_user_id"] = $ar_user_id;
    $ar_data["ar_is_approve"] = $approve;
    $ar_data["ar_show_public"] = $ar_pub;
    $ar_data["ar_show_index"] = $show_index;
    $msg = array();
    if($ar_id):
        
        $save = $this->Mdl_article->saveArticle($ar_data,array("ar_id" => $ar_id));
        $out = "Update";
    else:
        $save = $this->Mdl_article->saveArticle($ar_data);
        $out = "Create";
    endif;
    $msg["status"] = "success! item is {$out}";
    return $msg;
}
//-------------------End of _saveAr
//-----Delete Ar function
function _delAr(){
    $url = site_url("users/logout");
    if(!$this->is_login || !$this->is_admin){
            redirect($url);
    }   

    $ar_id = $this->input->post("ar_id");
    $this->Mdl_article->delArticle(array("ar_id" => $ar_id));
    
}

//---------------
//---last test work great on Fri-13-Apr-2018
function admin(){
    //redirect if not admin session
    
    if(!$this->is_login || !$this->is_admin):
        redirect(site_url());
    endif;
    
    
    $cmd = $this->input->post("cmd");
    $ar_id = $this->input->post("ar_id");
    $cat_id = $this->input->post("cat_id");
    $where_ar = array();
    switch($cmd):
        case"editCat":
            $get_cat = $this->Mdl_cat->getCat(array("cat_id" => $cat_id))->result();
            $this->o_put["get_cat"] = $get_cat;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"delCat":
            $where = array("cat_id" => $cat_id);
            $del = $this->Mdl_article->delCat($where);
            $this->o_put["msg"] = "item has been deleted";
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"editAr":
            $where_ar["ar_id"] = $ar_id;
            $get_ar = $this->Mdl_article->getArticle($where_ar)->result();

            $this->o_put["get_ar"] = $get_ar;
            $this->output->set_output(json_encode($this->o_put));
            
        break;
        case"saveAr":
            $a = $this->_saveAr();
            $this->o_put["msg_status"] = $a["status"];
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"delAr":
            $del = $this->_delAr();
            $this->o_put["msg"] = "item has been deleted";
            $this->output->set_output(json_encode($this->o_put));
        break;
        default:
            
            //get the category to form
            $get_cat = $this->Mdl_article->getCat()->result();
            $num_all_cat = count($get_cat);
            $this->data["get_cat"] = $get_cat;
            $this->data["num_cat"] = $num_all_cat;

            $get_all_ar = $this->Mdl_article->getArticle()->result();
            $num_all_ar = count($get_all_ar);

            //pagination
            $per_page = 10;

            $page = $this->input->get("page");
            if(!$page):
                $page = 1;
            else:
                $page = $page;
            endif;
            $conf = array();
            $conf["base_url"] = site_url("article/admin/{$page}");
            $conf["total_rows"] = $num_all_ar;
            $conf["per_page"] = $per_page;
            $conf["full_tag_open"] = "<ul class='pagination'><li>";
            $conf["full_tag_close"] = "</li></ul>";

            $this->pagination->initialize($conf);
            $get_ar = $this->Mdl_article->getArticle("",$conf["per_page"],$this->uri->segment(4))->result();
            $this->data["get_all_ar"] = $get_ar;
            $this->data["per_page"] = $per_page;
            $this->data["num_all_ar"] = $num_all_ar;

        
            $this->data["subview"] = "admin/article/article_admin";


            $this->load->view("_layout_admin",$this->data);
    break;
    endswitch;
}

//------
function moderate(){
    //--this method will help admin
    if(!$this->is_login):
        redirect(site_url("article"));
    endif;
    $cmd = $this->input->post("cmd");
    $ar_id = $this->input->post("ar_id");
    $cat_id = $this->input->post("sel_cat");

    $ar_title = $this->input->post("ar_title",true);
    
    $ar_summary = $this->input->post("ar_summary",true);
    $ar_summary = nl2br($ar_summary);

    $ar_body = $this->input->post("ar_body");

    $pub = ($pub = $this->input->post("pub"))?$pub=$pub:false;
    $approve = ($approve = $this->input->post("approve"))?true:false;
    $s_index = ($s_index= $this->input->post("s_index"))?true:false;

    // $user_edit_id = $this->user_id;
    // $user_edit_name = $this->user_name;


    $today = date("Y-m-d h:i:s",time());
    $ar_data = array(
        "cat_id" => $cat_id,
        "ar_title" => $ar_title,
        "ar_summary" => $ar_summary,
        "ar_body" => $ar_body,
        "ar_show_public" => $pub,
        "ar_is_approve" => $approve,
        "ar_show_index" => $s_index,
        "date_add" => $today,
        "date_edit" => $today,
        "ar_user_id" => $this->user_id,
        "ar_post_by" => $this->user_name

    );
    //--can create ,edit ,delete article 
    switch($cmd):
        case"edit":
            $get = $this->Mdl_article->getArticle(array("ar_id" => $ar_id))->result();
            $this->o_put["get"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"save":
            $get = $this->Mdl_article->getArticle(array("ar_id" => $ar_id))->result();
            foreach($get as $row):
                if($this->user_id != $row->ar_user_id):
                    unset($ar_data["ar_user_id"]);
                    unset($ar_data["ar_post_by"]);
                endif;
            endforeach;
            
            $msg = "";
            $a_label = "";//notice
            if($ar_id):
                //update data
                unset($ar_data["date_add"]);
                $this->Mdl_article->saveArticle($ar_data,array("ar_id" => $ar_id));
                $a_label = "Has modifiles item {$ar_id} ";//notice
                $msg = "บันทึกการเปลี่ยนแปลงแล้ว";
            else:
                //add new
                $this->Mdl_article->saveArticle($ar_data);
                $a_label = "Has create new  item on Article table ";//notice
                $msg = "สร้างบทความใหม่แล้ว";
            endif;

            //--notice admin

            $note_data = array(
                "note_title" => "New cahnge from moderate {$this->user_name} on Article",
                "note_body" => "moderate {$this->user_name} {$a_label} to Article by ip {$this->ip} on {$today}"
            );
            $this->notice_sent($note_data);
            //--endnotice

            echo"<h4>
            Status : <span class='label label-success'>{$msg}</span>
            </h4>";
        break;
        case"delete":
            $this->Mdl_article->delArticle(array("ar_id" => $ar_id));
            echo"ลบข้อมูลแล้ว";
        break;
        default:
            $get_ar = $this->Mdl_article->getArticle()->result();
            $num = count($get_ar);

            $per_page = 10;
            $page = ($page = $this->input->get("page"))?$page=$per_page:$page = $page;
            $conf = array();
            $conf["base_url"] = site_url("article/moderate");
            $conf["per_page"] = $per_page;
            $conf["total_rows"] = $num;
            $conf["full_tag_open"] = "<ul class='pagination'><li>";
            $conf["full_tag_close"] = "</li></ul>";
            $this->pagination->initialize($conf);

            $get_all_ar = $this->Mdl_article->getArticle(null,$conf["per_page"],$this->uri->segment(3))->result();
            $this->data['get_all_ar'] = $get_all_ar;
            $this->data["num_ar"] = $num;
            $this->data["per_page"] = $per_page;
            
            
            //--category
            $cat = $this->Mdl_article->getCat(array("cat_show_public !=" => 0))->result();
            $this->data["get_cat"] = $cat;
            $this->data['num_cat'] = count($cat);

            


            $this->data["subview"] = "article/moderate";
            $this->load->view("_layout_moderate",$this->data);
        break;
    endswitch;

}

//---Wed 17 Jan 2018
//---End of category section

  /*
|----------End of admin section
  */
  
  //-----------------
}//end of file
