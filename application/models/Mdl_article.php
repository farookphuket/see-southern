<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mdl_article extends MY_Model{
    protected $_tb_ar = "tbl_article";
    protected $_tb_seo = "seo";
    protected $_tb_cat = "tbl_cat";
    protected $_tb_user = "users";
    protected $_tb_his = "TBL_ARTICLE_HISTORY";
    protected $_tb_notice = "tbl_notification";

    protected $_filed_prefix = "ar";
    protected $_order_by; 


    public $today;

    public $ip;
    public $os;
    public $browser;

    public $user_name;
    public $user_id;

    function __construct() {
        parent::__construct();
        //$this->today = date("Y-m-d",time());

        $this->ip = $this->getIP();
        $this->os = $this->getOS();
        $this->browser = $this->getBrowser();


        $this->user_name = $this->getUserName();
        $this->user_id = $this->getUserId();


    }


    function getCat($where=false,$limit=false,$offset=false){

        $get = 0;
        if($where):
            $get = $this->getTB($this->_tb_cat,$where,$limit,$offset);
        else:
            $get = $this->getTB($this->_tb_cat,"",$limit,$offset);
        endif;
        return $get;
    }

    function categoryList($where=false,$limit=false,$offset=false){
        //---this method will list the content in this category
        //--by join the table
        $j1 = "{$this->_tb_cat}.cat_id={$this->_tb_ar}.cat_id";
        $j2 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";

        $get = $this->db
                                ->where($where)
                                ->order_by("{$this->_tb_ar}.date_add","DESC")
                                ->join($this->_tb_cat,$j1)
                                ->join($this->_tb_user,$j2)
                                ->get($this->_tb_ar,$limit,$offset);

        return $get;

    }
    //-----------------------------------------------
    //---num_cat_content
    function num_cat_content($where){
        //this method will get the article that has the cat_id
        //then update the tb_cat.has_content to the last count
        $cat_id = $where["cat_id"];

        //count the article that has the category id then update the category table
        $where_cat = array("cat_id" => $cat_id);

        $last_count = "";

        $get_cat = $this->getTB($this->_tb_cat,$where_cat)->result();
        foreach($get_cat as $row):
            $last_count = $row->has_content;
        endforeach;
        $get_ar = $this->getTB($this->_tb_ar,$where_cat)->result();
        $num_ar = count($get_ar);
        
        $cat_data = array(
            "has_content" => $num_ar
        );
        if($last_count != $num_ar):
            $this->saveTB($this->_tb_cat,$cat_data,$where_cat);
        endif;
        return $last_count;
    }
    //-----------------------------------------

    //------------saveCat
    function saveCat($data,$where=false){

        $cat_id = 0;
        if(!$where):
            $save = $this->saveTB($this->_tb_cat,$data);
            $cat_id = $save;
        else:
            $save = $this->saveTB($this->_tb_cat,$data,$where);
            $cat_id = $where["cat_id"];
        endif;
        return $cat_id;

    }
    //------------
    function delCat($where){

        //--find the article in this category then delete them
        $cat_id = $where["cat_id"];
        $where = array("cat_id" => $cat_id);
        $get_ar = $this->getTB($this->_tb_ar,$where)->result();
        if(count($get_ar) != 0):
            $this->delTB($this->_tb_ar,$where);
        endif;
        $this->delTB($this->_tb_cat,$where);

        
    }
    //--------------------
    function getArticle($where=false,$limit=false,$offset=false){

        if($where):
            $get = $this->db 
                    ->where($where)
                    ->limit($limit,$offset)
                    ->order_by("date_add","DESC")
                    ->get($this->_tb_ar);

        else:
           $get = $this->db
                    ->order_by("date_add","DESC")
                    ->get($this->_tb_ar,$limit,$offset);
        endif;
        return $get;
    }
    //------------
    //----modGetArticle
    function modGetArticle($where=false,$limit=false,$offset=false){

        $j1 = "{$this->_tb_seo}.kw_id = {$this->_tb_ar}.kw_id";
        $get = 0;
        //$order_by = array("date_add","DESC");
        if($where):
            $get = $this->db 
                        ->join($this->_tb_seo,$j1)
                        ->where($where)
                        ->order_by("{$this->_tb_ar}.date_add","DESC")
                        ->get($this->_tb_ar,$limit,$offset);
        else:
            $get = $this->db 
                        ->join($this->_tb_seo,$j1)
                        ->order_by("{$this->_tb_ar}.date_add","DESC")
                        ->get($this->_tb_ar,$limit,$offset);
        endif;

        return $get;

    }
    //------
    function saveArticle($data,$where=false){
        
        
        $ar_id = "";
        if($where):
           
            $ar_id = $where["ar_id"];
            $save = $this->saveTB($this->_tb_ar,$data,$where);
        else:
            $save = $this->saveTB($this->_tb_ar,$data);
            $ar_id = $save;
        endif;
        
        return $ar_id;

    }
    //----------
    function delArticle($where){
        $this->db 
            ->where($where)
            ->delete($this->_tb_ar);
        return true;
    }
    
    
    
    
    
    //---
    function num_ar_view($where){
        //this method will update the count
        //--working good on fri 11 may 2018
        //only if the user is uniq session or null session
        $ar_id = $where["ar_id"];
        $cur_ip = $this->ip;
        $cur_day = date("Y-m-d",time());

        $last_ip = "";
        $last_view_day = "";
        $last_count = 0;


        $data = array();

        $where = array("ar_id" => $ar_id);
        $get_ar = $this->db
                        ->where($where)
                        ->get($this->_tb_ar)->result();
        foreach($get_ar as $row):
            $last_ip = $row->last_view_ip;
            $last_view_day = $row->last_view_date;
            $last_count = $row->ar_read_count;

        endforeach;

        $update = 0;
        if($last_ip != $cur_ip || $last_view_day != $cur_day):
            $update = 1;
            //--set update and history will add here
            $last_count = $last_count+1;
            
            //--record history
            $his_data = array(
                "his_title" => "New view count for {$ar_id}! on {$cur_day} by IP {$cur_ip}",
                "his_body" => "The IP {$cur_ip} has view article id {$ar_id} on {$cur_day} using os {$this->os} browser {$this->browser} by user {$this->user_name}",
                "ar_id" => $ar_id,
                "view_ip" => $cur_ip,
                "date_of_view" => $cur_day
            );
            $this->saveTB($this->_tb_his,$his_data);
            //--End record history
            //-----Fri 11 May 2018
            //--set new count for this article item
            $a_data = array(
                "last_view_ip" => $cur_ip,
                "last_view_date" => $cur_day,
                "ar_read_count" => $last_count
            );
            $this->saveTB($this->_tb_ar,$a_data,array("ar_id" => $ar_id));
            //--end set count

        
        endif;
        
        
        $data["update"] = $update;
        return $data;
        
        
        
    }
    //----------------------------------------
    //--save history
    function save_history($data,$where=false){
        $save = 0;
        if(!$where):
            $save = $this->saveTB($this->_tb_his,$data);
        else:
            $save = $this->saveTB($this->_tb_his,$data,$where);
        endif;
    }
    //-------------------------------------------------------------
    //---get history
    function get_history($where){
        
        $ip = $where["ip"];
        $ar_id = $where["ar_id"];
        $where_his = array(
            "last_view_ip" => $ip,
            "date_of_view" => $this->today,
            "ar_id" => $ar_id
        );
        $get_his = $this->getTB($this->_tb_his,$where_his)->result();
        $num_his = count($get_his);
        return $num_his;
    }




    /* NO LOGIN SECTION START */
    /* Section create on 15 Sep 2019 */
    /* No login can read the public article */
    function readArticle($where){
      
      $j1 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";
      $j2 = "{$this->_tb_seo}.kw_id={$this->_tb_ar}.kw_id";
      $get = $this->db
                  ->where($where)
                  ->join($this->_tb_user,$j1)
                  ->join($this->_tb_seo,$j2)
                  ->get($this->_tb_ar);

      return $get;
    }



    /*   End of np login section */
    //---------------------------------------------//








    /* Admin Start 
     * Sun 15 Sep 2019 while change the new theme
     *
     * */
    
    
    function adminGet($where=false,$limit=false,$offset=false){
        $get = 0;
        $j1 = "{$this->_tb_user}.id={$this->_tb_ar}.ar_user_id";
        $j2 = "{$this->_tb_seo}.kw_id = {$this->_tb_ar}.kw_id";
      
        if($where):
          $get = $this->db
                      ->where($where)
                      ->join($this->_tb_user,$j1)
                      ->join($this->_tb_seo,$j2)
                      ->order_by("{$this->_tb_ar}.date_add","DESC")
                      ->get($this->_tb_ar,$limit,$offset);
        else:
          $get = $this->db
                      ->join($this->_tb_user,$j1)
                      ->join($this->_tb_seo,$j2)
                      ->order_by("{$this->_tb_ar}.date_add","DESC")
                      ->get($this->_tb_ar,$limit,$offset);

        endif;
        return $get;
    }


    //--- adminSave
    function adminSave(){
        $ar_id = $this->getEl("ar_id");
        $kw_id = $this->getEl("key_id");
        $ar_user_id = $this->getEl("ar_user_id");

        $uniq_id = $this->getEl("uniq_id");

        if(!$uniq_id):
          $uniq_id = $this->randomChar(255);
        endif;

        /* form article section */
        $ar_title = $this->getEl("ar_title");
        $ar_body = $this->getEl("ar_body");
        $ar_sum = $this->getEl("ar_sum");

        $approve = ($this->getEl("ar_approve"))?$approve=1:$approve=0;
        $a_index = ($this->getEl("show_index"))?$a_index=1:$a_index=0;
        $pub = ($this->getEl("ar_pub"))?$pub=1:$pub=0;
        /* End of Article filed */
        /* form seo section */
        $keyword = $this->getEl("og_title");
        $keydes = $this->getEl("og_des");
        $se_data = array(
          "kw_page_keyword" => $keyword,
          "kw_page_des"  => $keydes,
          "article_publisher" => $this->user_name,
          "og_site_name " => site_url() 
        );
        if(!$kw_id):
          $save = $this->SAVE($se_data,$this->_tb_seo);
          $kw_id = $save;
        else:
          $kw_id = $kw_id;
          $save = $this->SAVE($se_data,$this->_tb_seo,array("{$this->_tb_seo}.kw_id" => $kw_id));
            
        endif;
       $kw_id = $kw_id; 

      /* Ar data to save   */
        $ar_data = array(
          "kw_id" => $kw_id,
          "uniq_id" => $uniq_id,
          "ar_title" => $ar_title,
          "ar_summary" => $ar_sum,
          "ar_body" => $ar_body,
          "ar_show_index" => $a_index,
          "ar_show_public" => $pub,
          "ar_is_approve" => $approve,
          "ar_user_id" => $this->user_id,
          "ar_post_by" => $this->user_name,
          "date_add" => $this->today_andTime,
          "date_edit" => $this->today_andTime,
        );
      
        if($this->user_id != $ar_user_id):
          unset($ar_data["ar_post_by"]);
          unset($ar_data["ar_user_id"]);
        endif;
        if(!$ar_id):
           $save  = $this->SAVE($ar_data,$this->_tb_ar);
           $ar_id = $save;
        else:
          unset($ar_data["date_add"]);
          $ar_id = $ar_id;
          $save = $this->Save($ar_data,$this->_tb_ar,array("{$this->_tb_ar}.ar_id" => $ar_id));
        endif;
      /*  End of ar_data */
         
      /* Update the seo table add the url */
      $url = site_url("article/read/{$uniq_id}");
      $up_se = array(
                      "kw_page_keyword" => $keyword,
                      "kw_page_des" => $keydes,
                      "kw_canonical " => $url,
                      "og_url" => $url,
                      "og_title" => $keyword,
                      "og_description" => $keydes
                    );
        $this->SAVE($up_se,$this->_tb_seo,array("{$this->_tb_seo}.kw_id" => $kw_id));

      /* return the id back to controller */
      $data = array(
        "ar_id" => $ar_id,
        "kw_id" => $kw_id,
        "uniq_id" => $uniq_id
      );
      return $data;
    }
    //------- End of adminSave ---


    /* End of Admin */



}//end of Mdl_article

