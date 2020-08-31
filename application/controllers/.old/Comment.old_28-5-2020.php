<?php 

class Comment extends MY_Controller{

    
    
    public $o_put;
    public $user_id;

    public $subview;
    public $temp; 

    public $sysName = "Comment3";
    public $sysVersion = "3.45";
    public $sysDate = "22 May 2020";
    
    function __construct(){
        parent::__construct();

        $this->load->model("Mdl_comment");
        $this->load->model("Mdl_users");
        $this->load->model("Mdl_article");
        $this->load->library("pagination");

       $this->data["sysName"] = $this->sysName; 
       $this->data["sysVersion"] = $this->sysVersion; 
       $this->data["sysDate"] = $this->sysDate; 

        
        if($this->is_login):
            if($this->is_admin):
                $this->subview = "ADMIN/comment/index"; 
                $this->temp = "ADMIN/skin/SEP2019/_SEP2019_TMP";
            elseif($this->moderate):
                $this->subview = "MOD/comment/index"; 
                $this->temp = "MOD/skin/SEP2019/_SEP2019_TMP";
            else:
                $this->temp = "MEMBER/skin/business/index";
                $this->subview = "MEMBER/comment/index";
            endif;
        else:
            $this->temp = "PUBLIC/skin/business/index";
        endif;

    }

    function index(){
       $this->subview = "PUBLIC/comment/index"; 

        if($this->is_login):
            $url = "";
            if($this->is_admin):
                $url = site_url("comment/admin");
            elseif($this->moderate):
                $url = site_url("comment/mod");
            else:
                $url = site_url("comment/u");
            endif;
            redirect($url);
        else:
            $this->subview = "PUBLIC/comment/index";
       endif;

    }

    function cmtGet($page=1){
        $seg1 = $this->Mdl_comment->getEl("c_section_name");
        $seg3 = $this->Mdl_comment->getEl("c_item_id"); 
        $where = array(
            "c_section_name" => $seg1,
            "c_item_id" => $seg3,
            "c_set_show !=" => 0,
            "c_set_del " => 0 
        );
        
        $get1 = $this->Mdl_comment->getComment($where)->result();
        $num = count($get1);

        $url = "cmtGet";
        $per_page = 15;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get2 = $this->Mdl_comment->getComment($where,$per_page,$start)->result();

        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;
        $this->o_put["get_comment_all"] = $get1;
        $this->o_put["get_comment"] = $get2;
        $this->runOutput();
    }

    /*
     *  User section  Thu 21 May 2020 START
     *
     */

    function u(){
        if(!$this->is_login):
            redirect(site_url("users/logout"));
            exit();
        endif;

    
    
        $this->data["user_id"] = $this->user_id;               

        $this->data["subview"] = $this->subview;
        $this->load->view($this->temp,$this->data);
    }

    function commentMemberGet($page=1){
        //-- this function call from the member section comment  index page
        $where = array(
            "c_user_id" => $this->user_id
        );
        $get1 = $this->Mdl_comment->getComment($where)->result();
        $num = count($get1);
        $url = "commentMemberGet";
        $per_page = 2;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get2 = $this->Mdl_comment->getComment($where,$per_page,$start)->result();
        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;
        $this->o_put["get_comment_all"] = $get1;
        $this->o_put["get_comment"] = $get2;
        $this->runOutput();
        //--- DO NOT DELETE
    }
    function cmtUserGet($page=1){
        //-- in the comment list page will use this function
        $seg1 = $this->Mdl_comment->getEl("c_section_name");
        $seg3 = $this->Mdl_comment->getEl("c_item_id"); 
        $where = array(
            "c_section_name" => $seg1,
            "c_item_id" => $seg3 
        ); 
        $get1 = $this->Mdl_comment->getComment($where)->result();
        $num = count($get1);

        $url = "cmtUserGet";
        $per_page = 15;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get2 = $this->Mdl_comment->getComment($where,$per_page,$start)->result();
        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        
        $this->o_put["get_comment_all"] = $get1;
        $this->o_put["get_comment"] = $get2;
        $this->runOutput();
         
        //--- DO NOT DELETE

    }

    
    function cmtMemberEdit($id){
        $get = $this->Mdl_comment->getComment(array("c_id" => $id))->result();
        $this->o_put["get"] = $get;
        $this->runOutput();
    }

    function cmtMemberSave(){
        $s = $this->Mdl_comment->cmtMemberSave();
        $this->o_put["c_id"] = $s['c_id'];
        $this->o_put["msg"] = $s['msg'];
        $this->runOutput();
    }

    function cmtMemberDel($id){
        $s = $this->Mdl_comment->cmtMemberDel(array("c_id" =>$id));
        $this->o_put["msg"] = "Success : comment has been deleted";
        $this->runOutput();

    }

    /*
     *  User section Thu 21 May 2020 END
     *
     */

    

    /*
     * ADMIN SECTION START 22 May 2020 START
     *
     */
    function admin(){
        if(!$this->is_admin):
            redirect(site_url("users/logout"));
            exit();
        endif;
        $this->data["subview"] = $this->subview;
        $this->load->view($this->temp,$this->data); 

    }

    function commentAdminList($page=1){
        $get1 = $this->Mdl_comment->getComment()->result();
        $num = count($get1);
        
        $url = "commentAdminList";
        $per_page = 15;
        $conf = $this->getConfPagin($per_page,$num,$url);
        $this->pagination->initialize($conf);
        $start = ($page-1)*$per_page;
        $get2 = $this->Mdl_comment->getComment(null,$per_page,$start)->result();
        if($num > $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;
        $this->o_put["get_comment_all"] = $get1;
        $this->o_put["get_comment"] = $get2;
        $this->runOutput();
    }


    function commentAdminEdit($c_id){
        $get = $this->Mdl_comment->getComment(array("c_id" => $c_id))->result();
        $this->o_put["get"] = $get;
        $this->runOutput();
    }
    

    function cmtAdminSave(){
        $s = $this->Mdl_comment->cmtAdminSave();
        $this->o_put["c_id"] = $s["c_id"];
        $this->o_put["msg"] = $s["msg"];
        $this->runOutput();
    }

    function commentAdminDel($c_id){
        $this->Mdl_comment->commentAdminDel(array("c_id" => $c_id));
        $this->o_put["msg"] = "Success : item has been deleted!";
        $this->runOutput();
    }


    /*
     * ADMIN SECTION START 22 May 2020 END
     *
     */
    
    function runOutput(){
        return $this->output->set_output(json_encode($this->o_put));
    }

}//end of file
