<?php 

class Article extends MY_Controller{



    protected $user_id;
    protected $user_name;
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
        $this->is_login = $this->user_is_login();
        $this->moderate = $this->moderate;

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
                $url = site_url("article/moderate");
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
        $where_ar = array("{$this->_tb_ar}.ar_id" => $id);
        $get_ar = $this->Mdl_article->modGetArticle($where_ar)->result();

        //---count the number of view
        //$this->Mdl_article->num_ar_view($where_ar);

        $ar_title = "";
        $ar_id = "";
        $page_url = "";
        $page_keyword = "";
        $page_des = "";
        foreach($get_ar as $row):
            $ar_title = $row->ar_title;
            $ar_id = $row->ar_id;
            $page_url = $row->og_url;
            $page_keyword = $row->kw_page_keyword;
            $page_des = $row->kw_page_des;
        endforeach;
        //---seo key
        $this->data["page_description"] = $page_des;
        $this->data["page_keyword"] = $page_keyword;
        $this->data["og_url"] = $page_url;


        $this->data["get_ar"] = $get_ar;
        $this->data["meta_title"] = "{$ar_title}";
        $this->data["subview"] = "article/read_article";
        $tmp = "_article_default";
        if($this->is_login):
            $tmp = "tmp/article_tmp";
        endif;
        $this->load->view($tmp,$this->data);
    }


    
    
/// -- category
    function category($id=false){
        echo"This is the cat number {$id}";
        $msg = "";
        if(!$id):
                $msg = "Show every category";
        else:
            $msg = "Show only one category {$id}";
        endif;
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

    //---------------------------------------------------------------------//
    //-----------------Moderate section-------------------------------//


    function modGetPubPost($seg=1){
        $where = array(
            "ar_user_id !=" => $this->user_id,
            "ar_show_public !=" => 0
        );
        $get = $this->Mdl_article->getArticle($where)->result();
        $num = count($get);

        //---pagination
        $url = "article/modGetPubPost";
        $per_page = 4;

        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $page = $seg;
        $start = ($page-1)*$conf["per_page"];

        $get_ar = $this->Mdl_article->getArticle($where,$conf["per_page"],$start)->result();
        if($num >= $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["get_ar"] = $get_ar;
        $this->o_put["num_ar"] = $num;

        $this->output->set_output(json_encode($this->o_put));
    }
    //---------------------------
    //---------modGetOwnPost    
    function modGetOwnPost($seg=1){
        $where_ar = array("ar_user_id" => $this->user_id);
        $get = $this->Mdl_article->getArticle($where_ar)->result();
        $num = count($get);
        
        $this->o_put["get_ar"] = $get;
        $this->o_put["num_ar"] = $num;

        $this->output->set_output(json_encode($this->o_put));
    }

    //---------------------------------------
    function modGetCatList($seg=1){
        $where = array(
            "cat_show_public !=" => 0
        );

        $get_cat = $this->Mdl_article->getCat($where)->result();
        $num_cat = count($get_cat);

        $this->o_put["get_cat"] = $get_cat;
        
        $this->o_put["num_cat"] = $num_cat;

        $this->output->set_output(json_encode($this->o_put));
    }
    //--------------
    //-------modReadCat
    function modReadCat($seg=1){
        $cat_id = $this->input->post("cat_id");
        $where = array("cat_id" => $cat_id);
        $get_cat = $this->Mdl_article->getCat($where)->result();
        foreach($get_cat as $row):
            $cat_title = $row->cat_title;
            $cat_id = $row->cat_id;
        endforeach;

        $where_ar  = array(
            "cat_id" => $cat_id
        );
        $get_ar = $this->Mdl_article->getArticle($where_ar)->result();
        $num_ar = count($get_ar);


        $this->o_put["cat_title"] = $cat_title;
        $this->o_put["num_ar"] = $num_ar;
        $this->o_put["get_ar"] = $get_ar;

        $this->output->set_output(json_encode($this->o_put));
    }
    //--------------------------------------------
    //--------modEditCategory
    function modEditCategory($cat_id){
        $where = array("cat_id" => $cat_id);
        $get = $this->Mdl_article->getCat($where)->result();
        $this->o_put["get_cat"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
    //----------------------------------------------
    //--------modalSaveCategory
    function modSaveCategory(){
        $cat_id = $this->input->post("edit_cat_id");
        $cat_title = $this->input->post("cat_title");
        $cat_section = $this->input->post("cat_section");
        $cat_des = $this->input->post("cat_des");
        $cat_data = array(
            "cat_title" => $cat_title,
            "cat_section" => $cat_section,
            "cat_des" => $cat_des,
            "last_update" => $this->today_andTime,
            "cat_user_type" => "moderate",
            "cat_user_id" => $this->user_id
        );
        $this->Mdl_article->saveCat($cat_data,array("cat_id" => $cat_id));
        $this->o_put["msg"] = "Success : operation has complete";
        $this->output->set_output(json_encode($this->o_put));
    }
    //--------modEditAr----------------------
    function modEditAr($ar_id){
        //$ar_id = $this->input->post("ar_id");

        $where_ar = array("{$this->_tb_ar}.ar_id" => $ar_id);
        $get_ar = $this->Mdl_article->modGetArticle($where_ar)->result();
        $this->o_put["get_ar"] = $get_ar;
        $this->output->set_output(json_encode($this->o_put));
    }

    //-------------------------------------------
    //--------modSaveAr----------
    function modSaveAr(){

        $ar_id = ($ar_id = $this->input->post("ar_id"))?$ar_id:0;
        $cat_id = $this->input->post("cat_id");
        $ar_title = $this->input->post("ar_title");
        $ar_summary = $this->input->post("ar_summary");
        $ar_body = $this->input->post("ar_body");
        
        $ar_pub = ($ar_pub = $this->input->post("ar_pub"))?$ar_pub=2:$ar_pub = 0;

        $ar_approve = ($ar_approve = $this->input->post("ar_approve"))?$ar_approve=2:$ar_approve = 0;

        $ar_index = ($ar_index = $this->input->post("ar_index"))?$ar_index=2:$ar_index= 0;

        $ar_user_id = $this->user_id;//---get the default login session
        $ar_user_name = $this->user_name;

        $post_today = $this->today_andTime;
        $ar_data = array(
            "cat_id" => $cat_id,
            "ar_title" => $ar_title,
            "ar_summary" => $ar_summary,
            "ar_body" => $ar_body,
            "date_add" => $post_today,
            "date_edit" => $post_today,
            "ar_post_ip" => $this->Mdl_article->ip,
            "ar_user_id" => $ar_user_id,
            "ar_post_by" => $ar_user_name,
            "ar_show_public" => $ar_pub,
            "ar_is_approve" => $ar_approve,
            "ar_show_index" => $ar_index
        );

        $last_post_ip = "NONE";
        $where_ar = array("ar_id" => $ar_id);
        $get_ar = $this->Mdl_article->getArticle($where_ar)->result();
        foreach($get_ar as $row):
            $ar_user_id = $row->ar_user_id;
            $ar_user_name = $row->ar_post_by;
            $last_post_ip = $row->ar_post_ip;
        endforeach;

        $ms_label = "";
        $msg = "";
        if($ar_id):
        //---edit post
            $ms_label = "Updated";
            $msg = "Data has been updated";
            unset($ar_data["date_add"]);
            unset($ar_data["ar_post_by"]);
            unset($ar_data["ar_user_id"]);
            $where_ar = array("ar_id" => $ar_id);
            $save = $this->Mdl_article->saveArticle($ar_data,$where_ar);
        else:
            //---create post
            $ms_label = "Created";
            $msg = "Data has been Created";
            unset($ar_data["date_edit"]);
            $save = $this->Mdl_article->saveArticle($ar_data);
            $ar_id = $save;
        endif;
        
        //---sent admin notice
        $ln_read = site_url("article/read/{$ar_id}");
        $no_title = "new change from Moderate {$this->user_name} on {$post_today} using IP {$this->Mdl_article->ip}.";

        $no_body = "<p>Moderate {$this->user_name} has make change to {$ar_title} <a href='{$ln_read}' target='_blank' title='Click to read post'>Read Change of {$ar_title}</a></p><br style='clear:both' />";

        $this->Mdl_article->sendAdminNotice($no_title,$no_body);
        //--------------------
        
        $this->o_put["msg"] = $msg;
        $this->o_put["ar_id"] = $ar_id;

        $this->output->set_output(json_encode($this->o_put));
    }

    //------------------------------------------
    function modDelAr($id){
        
        $kw_id = "";
        $ar_id = "";
        $get = $this->Mdl_article->modGetArticle(array("{$this->_tb_ar}.ar_id" => $id))->result();
        foreach($get as $row):
            $kw_id = $row->kw_id;
            $ar_id = $row->ar_id;
            
            //--delete key
            $this->Mdl_seo->delTag(array("{$this->_tb_seo}.kw_id" => $kw_id));
            
            //--delete post
            $this->Mdl_article->delArticle(array("{$this->_tb_ar}.ar_id" => $ar_id));
        endforeach;
        
        
        //---display
        $this->o_put["msg"] = "Success : ID {$id} is deleted!";
        $this->output->set_output(json_encode($this->o_put));
    }

    //---------------------------------------
    function moderate(){
        
        $where_cat = array(
            "cat_show_public !=" => 0,
            "admin_allow_show !=" => 0
        );
        $get_cat = $this->Mdl_article->getCat($where_cat)->result();
        $this->data["get_cat"] = $get_cat;
        $this->data["meta_title"] = "Moderate page for {$this->user_name}.";
        $this->data["subview"] = "article/moderate";

        $this->load->view("_layout_moderate",$this->data);
    }



    //-----------End of moderate section-------------------------/////
    //------------------------------------------------------------------////
    
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
        $this->data["meta_title"] = "article Admin";
        $this->data["subview"] = "admin/article/index";

        $tmp = "tmp/article_tmp";
        $this->load->view($tmp,$this->data);
    }



    //---function firstSave
    //--this will save the title and create the tag
    function firstSave(){
        $key_id = $this->input->post("key_id");
        $ar_id = $this->input->post("ar_id");
        $ar_title = $this->input->post("ar_title");
        $kw_title = $this->input->post("og_title");
        $kw_des = $this->input->post("og_des");
        
        //---keyword data
        $kw_default = "";
        $kd_default = "";
        $seo_data = array();
        
        //--article datatitle
        $ar_data = array();

        $s_today = $this->today_andTime;
        if(!$ar_id):
            //---create new key
            $kw_default = "new article,change this";
            $kd_default = "new article create by {$this->user_name} just change this meta key description";
            $seo_data = array(
                "kw_page_keyword" => $kw_default,
                "kw_page_des" =>  $kd_default
            );
    
            $key_id = $this->Mdl_seo->saveTag($seo_data);

            //----create new post
            $ar_data = array(
                "kw_id" => $key_id,
                "ar_title" => $ar_title,
                "date_add" => $s_today,
                "ar_post_by" => $this->user_name,
                "ar_post_ip" => $this->Mdl_article->ip
            );
            $ar_id = $this->Mdl_article->saveArticle($ar_data);

            $rd_url = site_url("article/read/{$ar_id}");
            $this->Mdl_seo->saveTag(array(
                "kw_canonical " => $rd_url,
                "og_url" => $rd_url,
                "article_publisher" => $this->user_name,
                "og_site_name" => site_url()
            ),array("kw_id" => $key_id));

            //$this->adminEditAr($ar_id);
            $get_ar = $this->Mdl_article->modGetArticle(array("{$this->_tb_ar}.ar_id " => $ar_id))->result();
            $this->o_put["get_ar"] = $get_ar;
            $this->output->set_output(json_encode($this->o_put));

        else:
            /*
            User has change the title the keyword also need to change too.
            last update 11-6-19
            */
            //--save keyword
            $seo_data = array(
                "kw_page_keyword" => $kw_title,
                "kw_page_des" => $kw_des,
                "og_title" => $kw_title,
                "og_description" => $kw_des
            );
            $this->Mdl_seo->saveTag($seo_data,array("kw_id" => $key_id));

            //--update title
            $ar_data = array(
                "ar_title" => $ar_title
            );
            $this->Mdl_article->saveArticle($ar_data,array("ar_id" => $ar_id));
            //$this->adminEditAr($ar_id);
            $get_ar = $this->Mdl_article->modGetArticle(array("{$this->_tb_ar}.ar_id" => $ar_id))->result();
            $this->o_put["get_ar"] = $get_ar;
            $this->output->set_output(json_encode($this->o_put));
        endif;
    }
    //-----
    //-----getSeoData
    function getSeoData(){
        $key_id = $this->input->post("key_id");
        $ar_id = $this->input->post("ar_id");
        $keyword = $this->input->post("og_title");
        $keydes = $this->input->post("og_des");
        $data = array(
            "kw_page_keyword" => $keyword,
            "kw_page_des" => $keydes,
            "og_title" => $keyword,
            "og_description" => $keydes,
            "og_site_name "  => site_url(),
            "kw_date_add " => $this->today_andTime,
            "article_publisher " => $this->user_name
        );
        return $data;
    }
    //----
    //----getFormArData
    function getFormArData(){
        $title = $this->input->post("ar_title");
        $sum = $this->input->post("ar_sum");
        $body = $this->input->post("ar_body");
        $kw_id = $this->input->post("key_id");
        //--checkbox
        $pub = $this->input->post("ar_pub");
        $approve = $this->input->post("ar_approve");
        $show_index = $this->input->post("show_index");

        if(!$pub):
            $pub = 0;
        else:
            $pub = 1;
        endif;

        if(!$approve):
            $approve = 0;
        else:
            $approve = 1;
        endif;

        if(!$show_index):
            $show_index = 0;
        else:
            $show_index = 1;
        endif;

        //---data
        $data = array(
            "ar_title" => $title,
            "ar_summary" => $sum,
            "ar_body" => $body,
            "date_add" => $this->today_andTime,
            "ar_post_by" => $this->user_name,
            "ar_post_ip" => $this->Mdl_article->ip,
            "ar_user_id" => $this->user_id,
            "ar_is_approve" => $approve,
            "ar_show_public" => $pub,
            "ar_show_index" => $show_index
        );
        return $data;
    }

    //---adminSaveAr
    function adminSaveAr(){

        $ar_id = $this->input->post("ar_id");
        $ar_title = $this->input->post("ar_title");
        $rdUrl = site_url("article/read/{$ar_id}");
        
        $seo = $this->getSeoData();
        $seo["og_url"] = $rdUrl;
        $kw_id = $this->input->post("key_id");

        $this->Mdl_seo->saveTag($seo,array("kw_id" => $kw_id));

        $ar = $this->getFormArData();
        
        
        $get_ar = $this->Mdl_article->modGetArticle(array("{$this->_tb_ar}.ar_id" => $ar_id))->result();
        foreach($get_ar as $row):
            if($row->ar_user_id != $this->user_id):
                unset($ar["ar_post_by"]);
                unset($ar["ar_user_ip"]);
                unset($ar["ar_user_id"]);
            endif;
        endforeach;
        //---unset date_add
        unset($ar["date_add"]);
        $ar["date_edit"] = $this->today_andTime;
        $ar["ar_title"] = $ar_title;
        $this->Mdl_article->saveArticle($ar,array("ar_id" => $ar_id));

        $this->o_put["get_ar"] = $this->Mdl_article->modGetArticle(array("{$this->_tb_ar}.ar_id" => $ar_id))->result();
        $this->o_put["msg"] = "Success : data has been save";
        $this->output->set_output(json_encode($this->o_put));

    }

    //----adminEditAr
    function adminEditAr($id){
        $where = array("{$this->_tb_ar}.ar_id" => $id);
        $get = $this->Mdl_article->modGetArticle($where)->result();

        $this->o_put["get_ar"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
    //----list all of the post from user
    function adminGetAllPost($seg=1){
        $get = $this->Mdl_article->getArticle()->result();
        $num = count($get);
        if($num == 0):
            $get = 0;
        endif;

        //---pagination
        $per_page = 4;
        $page = $seg;
        $url = "adminGetAllPost";
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get_ar = $this->Mdl_article->getArticle(null,$per_page,$start)->result();

        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["get_ar"] = $get_ar;
        $this->o_put["num_ar"] = $num;
        $this->output->set_output(json_encode($this->o_put));
    }
    //--------------end of admin

}//--end of file