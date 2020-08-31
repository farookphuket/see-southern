<?php 

class Article extends MY_Controller{



    public $user_id;
    public $user_name;
    protected $is_login;
    protected $moderate;//---moderate
    protected $admin;

    //---table
    protected $_tb_ar = "tbl_article";
    protected $_tb_seo = "seo";
    protected $_tb_cat = "tbl_cat";
    protected $tb_his;
    protected $_tb_user = "users";

    

    function __construct(){
        parent::__construct();

        $this->load->model("Mdl_users");
        $this->load->model("Mdl_article");
        $this->load->model("Mdl_seo");

        $this->load->library("pagination");

        $this->user_id = $this->Mdl_article->getUserId();
        $this->user_name = $this->Mdl_article->getUserName();
        $this->data["user_name"] = $this->user_name;
        $this->data["user_id"] = $this->user_id;
        $this->is_login = $this->user_is_login();
        $this->moderate = $this->user_is_mod();

        //$this->data["user_id"] = $this->user_id;
    }

    function index($seg=1){
        
        //--redirect to specific url if user has login
        $url = site_url("article");
        $rd_url = 0;
        if($this->is_login):
            $rd_url = 1;
            $url = site_url("article/own");
            if($this->is_admin):
                $url = site_url("article/admin");
                $rd_url = 1;
            endif;
            if($this->moderate):
                $url = site_url("article/mod");
                $rd_url = 1;
            endif;
           
        endif;

        if($rd_url == 1):
            redirect($url);
        endif;

        

        $this->data["subview"] = "article/ar_index";
        $this->data["meta_title"] = "Article System 2.0";

        $tmp = "tmp/article_tmp";
        $this->load->view($tmp,$this->data);
       
    }

   
    


    //--------start not login user

    function getPubAr($seg=1){
        $where = array(
            "{$this->_tb_ar}.ar_show_public != " => 0,
            "{$this->_tb_ar}.ar_is_approve != " => 0,
        );
        $get = $this->Mdl_article->modGetArticle($where)->result();
        $num = count($get);

        //---pagination
        $page = $seg;
        $per_page = 4;
        $url = "getPubAr";
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get_ar = $this->Mdl_article->modGetArticle($where,$per_page,$start)->result();

        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;
        $this->o_put["get_ar"] = $get_ar;
        $this->o_put["num_ar"] = $num;
        $this->output->set_output(json_encode($this->o_put));
    }

    function read($id){
        //---read article as public
        $where_ar = array("{$this->_tb_ar}.uniq_id" => $id);
        $get_ar = $this->Mdl_article->readArticle($where_ar)->result();

        //---count the number of view
        //$this->Mdl_article->num_ar_view($where_ar);

        $ar_title = "";
        $ar_id = "";
        $page_url = "";
        $page_keyword = "";
        $page_des = "";
        $pub_name = "";
        foreach($get_ar as $row):
            $ar_title = $row->ar_title;
            $ar_id = $row->ar_id;
            $page_url = $row->og_url;
            $page_keyword = $row->kw_page_keyword;
            $page_des = $row->kw_page_des;
            $pub_name = $row->article_publisher; 
            
        endforeach;
        //---seo key
        $this->data["page_description"] = $page_des;
        $this->data["page_keyword"] = $page_keyword;
        $this->data["og_url"] = $page_url;

          
        $this->data["publisher"] = $pub_name;
        $this->data["get_ar"] = $get_ar;
        $this->data["meta_title"] = "{$ar_title}";
        $this->data["subview"] = "article/read_article";
        $tmp = "_MAIN_TMP";
        if($this->is_login):
            $tmp = "tmp/article_tmp";
        endif;
        $this->load->view($tmp,$this->data);
    }


    
    





    //---End not login user
    
    //---member section 
    //----last update 12/5/19

    function uGetOwnPost($seg=1){
        $where = array(
            "{$this->_tb_ar}.ar_user_id" => $this->user_id);
        $get = $this->Mdl_article->modGetArticle($where)->result();
        $num = count($get);

        //---pagination
        $url = "uGetOwnPost";
        $page = $seg;
        $per_page = 4;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get_ar = $this->Mdl_article->modGetArticle($where,$per_page,$start)->result();

        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["get_ar"] = $get_ar;
        $this->o_put["num_ar"] = $num;
        $this->output->set_output(json_encode($this->o_put));
    }
    //------------------
    //---uEditPost
    function uEditPost($id){
        $where = array(
            "{$this->_tb_ar}.ar_user_id" => $this->user_id,
            "{$this->_tb_ar}.ar_id" => $id
        );
        $get = $this->Mdl_article->modGetArticle($where)->result();
        $this->o_put["get_ar"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
    //---uFirstSave
    function uFirstSave(){
        $title = $this->input->post("ar_title");
        $ar_id = $this->input->post("ar_id");

        $kw_id = 0;
        $keyword = "Edit this for {$title} keyword";
        $keydes = "Edit this for {$title} description";
        $key_data1 = array(
            "kw_page_keyword" => $keyword,
            "og_title" => $keyword,
            "article_publisher" => $this->user_name,
            "kw_date_add" => $this->today_andTime,
            "og_site_name" => site_url()
        );
        $kw_id = $this->Mdl_seo->saveTag($key_data1);
        //-----
        $ar_data = array(
            "kw_id" => $kw_id,
            "ar_title" => $title,
            "ar_user_id" => $this->user_id,
            "ar_post_by" => $this->user_name,
            "ar_post_ip" => $this->Mdl_article->ip,
            "date_add" => $this->today_andTime
        );
        $ar_id = $this->Mdl_article->saveArticle($ar_data);
        
        //--set key for seo
        $read_url = site_url("article/read/{$ar_id}");

        $key_data2 = array(
            "og_url" => $read_url,
            "kw_page_des" => $keydes,
            "kw_canonical" => $read_url,
            "og_description" => $keydes
        );
        $this->Mdl_seo->saveTag($key_data2,array("kw_id" => $kw_id));
        //--update seo tag

        $get = $this->Mdl_article->getArticle(array("ar_id" => $ar_id))->result();
        $this->o_put["get_ar"] = $get;
        $this->o_put["msg"] = "
        <p>
            <span class='badge badge-success'>
                your post will be save as Private and only you can see this post.
            </span>
        </p>
        <p>
            <span class='badge badge-info'>
            to public your post just change the select option below to Public.
            </span>
        </p>
        ";
        $this->output->set_output(json_encode($this->o_put));
    }
    //-----uSavePost
    function uSavePost(){
        $show_pub = $this->input->post("show_pub");
        //---seo
        $keyword = $this->input->post("meta_keyword");
        $keydes = $this->input->post("meta_keydes");
        
        $kw_id = $this->input->post("kw_id");
        $ar_id = $this->input->post("ar_id");
        $seo_data = array(
            "kw_page_keyword" => $keyword,
            "kw_page_des" => $keydes,
            "og_title" => $keyword,
            "og_description" => $keydes,
            "kw_id" => $kw_id
        );
        if($kw_id):
            $this->Mdl_seo->saveTag($seo_data,array("kw_id" => $kw_id));
        endif;

        //----article content
        $ar_title = $this->input->post("ar_title");
        $ar_sum = $this->input->post("ar_sum");
        $ar_body = $this->input->post("ar_body");

        $ar_data = array(
            "ar_summary" => $ar_sum,
            "ar_title" => $ar_title,
            "ar_body" => $ar_body,
            "ar_show_public" => $show_pub,
            "ar_post_by" => $this->user_name,
            "ar_post_ip" => $this->Mdl_article->ip,
            "date_edit" => $this->today_andTime
        );
        if($ar_id):
            $this->Mdl_article->saveArticle($ar_data,array("ar_id" => $ar_id));
        endif;

        $this->o_put["msg"] = "<p>
        <span class='badge badge-success'>Your Post has been save.</span>
        </p>
        <p>
        click close button to hide this form.
        </p>
        ";
        $this->o_put["ar_id"] = $ar_id;
        $this->output->set_output(json_encode($this->o_put));
    }

    

    


    

    
    
    


    //------------End of member area

    //--------------------------------------//
    //---------Moderate section-------------------//
    /* Delete old moderate operation on 15-Sep-2019 */
    function mod(){
      if(!$this->moderate):
          echo"you are not Moderate!!";
          exit();
      endif;
      echo"Welcome {$this->user_name} your id is {$this->user_id}";
    }

    //---------------------------------------------/////
    //-----------End of moderate section-----------/////
    //---------------------------------------------////
    //---------------------------------------------///





    //---------------------------------------------------------- 
    /*
    //--Admin manage article last edit create
    //---1-may-2019 

    */

    function admin(){
        if(!$this->user_is_admin()):
            echo"Not admin";
            redirect(site_url("users/logout"));
            exit();
        endif;
        $this->data["meta_title"] = "article Admin| {$this->user_name} | {$this->user_id}";
        $this->data["subview"] = "admin/article/index";

        $tmp = "tmp/article_tmp";
        $this->load->view($tmp,$this->data);
    }

    //---adminSaveAr
    function adminSaveAr(){
        $save = $this->Mdl_article->adminSave();  
        $kw_id = $save["kw_id"];
        $ar_id = $save["ar_id"];


        $uniq_id = $save["uniq_id"];

        $this->o_put["uniq_id"] = $uniq_id;
        $this->o_putp["kw_id"] = $save["kw_id"];
        $this->o_put["ar_id"] = $save["ar_id"];
        $this->o_put["msg"] = "Success : data has been save {$ar_id} key id {$kw_id}";
        $this->output->set_output(json_encode($this->o_put));

    }

    //----adminEditAr
    function adminEditAr($id){
        $where = array("{$this->_tb_ar}.ar_id" => $id);
        $get = $this->Mdl_article->adminGet($where)->result();
        
         
        $this->o_put["get_ar"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
    //----list all of the post from user
    function adminGetAllPost($seg=1){
        $get = $this->Mdl_article->adminGet()->result();
        $num = count($get);
        if($num == 0):
            $get = 0;
        endif;

        //---pagination
        $per_page = 15;
        $page = $seg;
        $url = "adminGetAllPost";
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get_ar = $this->Mdl_article->adminGet(null,$per_page,$start)->result();

        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["get_ar"] = $get_ar;
        $this->o_put["num_ar"] = $num;
        $this->output->set_output(json_encode($this->o_put));
    }
    //--------------end of admin

}//--end of file
