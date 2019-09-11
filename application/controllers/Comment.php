<?php 

class Comment extends MY_Controller{

    
    protected $is_login;
    protected $moderate;
    protected $is_admin;


    public $o_put;
    public $user_id;

    public $user_name;
    public $ip;
    public $os;
    public $browser;
    public $post_day;
    
    
    function __construct(){
        parent::__construct();

        $this->load->model("Mdl_comment");
        $this->load->model("Mdl_users");
        $this->load->model("Mdl_article");
        $this->load->library("pagination");

        $this->user_id = $this->Mdl_comment->getUserId();
        $this->user_name = $this->Mdl_comment->getUserName();

        $this->is_login = $this->user_is_login();
        $this->is_admin = $this->user_is_admin();
        $this->moderate = $this->user_is_mod();

        $this->ip = $this->Mdl_comment->getIP();
        $this->os = $this->Mdl_comment->getOS();
        $this->browser = $this->Mdl_comment->getBrowser();

        $this->post_day = date("Y-m-d",time());
        

    }

    function index(){
        $r_url = site_url();

        if($this->is_login):
            
            if($this->is_admin):
                $r_url = site_url("comment/admin");
            endif;
        endif;

        //---redirect to url
        redirect($r_url);
    }


    function getCommentCount($seg=1){
        /*--
        //--will recieve POST section_name item_id
        //--This method will get all of the comment base on the section name and item id recieve by ajax call at the first form load
        */
        $section_name = $this->input->post("section_name");
        $item_id = $this->input->post("item_id");

        
        
        $where = array(
            "c_section_name" => $section_name,
            "c_item_id" => $item_id,
            "c_show !=" => 0
        );
        $get = $this->Mdl_comment->getComment($where)->result();
        $num_comment = count($get);

        //---pagination
        $url = "getCommentCount";
        $per_page = 4;
        $conf = $this->getConfPagin($per_page,$num_comment,$url);
        $this->pagination->initialize($conf);
        $page = $seg;
        $start = ($page-1)*$conf["per_page"];

        $get_all_comment = $this->Mdl_comment->getComment($where,$conf["per_page"],$start)->result();
        if($num_comment >= $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;
        
        $this->o_put["get_comment"] = $get_all_comment;
        $this->o_put["num_comment"] = $num_comment;

        $this->output->set_output(json_encode($this->o_put));
    }

    //-------------------------
    //-------getMyInfo------------
    function getMyInfo(){
        $where = array(
            "id" => $this->user_id
        );
        $get = $this->Mdl_users->getUsers($where)->result();
        $this->o_put["get_user"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }

    //----------------------------------
    //--getMyComment
    function getMyComment(){
        //--will fetch only one row
        $section_name = $this->input->post("section_name");
        $item_id = $this->input->post("item_id");

        
        
        $where = array(
            "c_section_name" => $section_name,
            "c_item_id" => $item_id,
            "c_user_ip" => $this->ip,
            "c_date_create" => $this->post_day
        );
        $get = $this->Mdl_comment->getComment($where)->result();

        $this->o_put["get_my_comment"] = $get;

        $this->output->set_output(json_encode($this->o_put));
    }


    function saveComment(){

        //--only submit by ajax to save data
        $c_id = $this->input->post("c_id");
        $c_title = $this->input->post("c_title",true);
        $c_body = $this->input->post("c_body",true);
        $section_name = $this->input->post("section_name",true);
        $item_id = $this->input->post("item_id",true);

        //--user name and email
        $c_user_name = $this->input->post("c_user_name",true);
        $c_user_email = $this->input->post("c_user_email",true);
        $c_user_id = $this->user_id;

        //---comment url add Fri 31 Aug 2018
        $c_comment_url = $this->input->post("comment_url");

        //--post day time
        $post_day = date("Y-m-d",time());
        $post_time = date("h:i:s",time());
        $comment_data = array(
            "c_section_name" => $section_name,
            "c_comment_url" => $c_comment_url,
            "c_item_id" => $item_id,
            "c_user_ip" => $this->ip,
            "c_user_id" => $c_user_id,
            "c_user_name" => $c_user_name,
            "c_user_email" => $c_user_email,
            "c_comment_title" => $c_title,
            "c_comment_body" => $c_body,
            "c_date_create" => $post_day,
            "c_date_update" => $post_day,
            "c_comment_time" => $post_time,
        );

        if($c_id):
            unset($comment_data["c_date_create"]);
            $save = $this->Mdl_comment->saveComment($comment_data,array("c_id" => $c_id));
            
        else:
            unset($comment_data["c_date_update"]);
            $save = $this->Mdl_comment->saveComment($comment_data);
        endif;

        //--sent mail to user
        $url = site_url();
        $our_url = $c_comment_url;
        $u_mailTitle = "we are thank you for your comment";
        $u_mailBody = "<h1 style='text-align:center;color:blue'>Hi dear {$c_user_name}</h1>
        <p><strong>You</strong>
        have receive this e-mail from {$url} because you have made a comment!
        </p>
        <p>This email is just to inform you as you have made a comment at {$our_url} on {$this->today_andTime} as the content below</p>
        <p>&nbsp;</p>
        <h2 style='color:green'>{$c_title}</h2>
        <p>{$c_body}</p>
        <p>&nbsp;</p>
        <h3 style='color:red;text-align:center'>Warning</h3>
        <p>Your comment will not be show as public by our policy unless the admin has approve it.</p>
        <p><b>So,it is mean that you will not see your comment on the list by far.</b></p>
        <p>we're so sorry for this inconvenience.<br />but we will inform you once your comment has approve by admin as soon as we can do.</p>
        <p>best regard&nbsp;
        <strong>{$this->admin_email}</strong>
        </p>
        ";
        $this->sendMailTo($this->admin_email,$c_user_email,$u_mailTitle,$u_mailBody);
        //---sent notice to his email

        //---sent notice to admin
        $a_mailTitle = "New comment from IP {$this->ip} on {$this->today_andTime}.";
        $a_mailBody = "<h1 style='text-align:center;color:red'>New comment at {$our_url}.</h1>
        <p>it is seem like the user name {$c_user_name} has made a comment on <a href='{$our_url}' target='_blank'>{$url}</a> on date {$this->today_andTime} 
        
        </p>
        <p>Using IP {$this->ip}</p>
        <p>Email {$c_user_email}</p>
        <p>Go and have a look at</p>
        <p><i>{$our_url}</i></p>
        ";
        $this->sendMailTo(null,$this->admin_email,$a_mailTitle,$a_mailBody);
        
        echo"Comment {$save} has been save";
    }



    //------------------------------------------------------------------------
    //---------------Admin section Create Sat 1 Sep 2018-----------
    function adminGetAllComment($seg=1){
        $get_c = $this->Mdl_comment->getComment()->result();
        $num_c = count($get_c);
        

        //--pagination
        $url = "adminGetAllComment";
        $per_page = 10;

        $conf = $this->getConfPagin($per_page,$num_c,$url);
        $this->pagination->initialize($conf);
        $page = $seg;
        $start = ($page-1)*$conf["per_page"];
        $get_all_c = $this->Mdl_comment->getComment(null,$conf["per_page"],$start)->result();
        if($num_c >= $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["get_comment"] = $get_all_c;
        $this->o_put["num_comment"] = $num_c;

        $this->output->set_output(json_encode($this->o_put));
    }

    //--------------------------------------
    //---------------Admin edit  Comment
    function adminEditComment($c_id){
        //$c_id = $this->input->post("c_id");
        $where = array("c_id" => $c_id);
        $get_c = $this->Mdl_comment->getComment($where)->result();
        $this->o_put["get_comment"] = $get_c;

        $this->output->set_output(json_encode($this->o_put));
    }

    //----------------------------------
    //-----------adinSaveComment
    function adminSaveComment(){
        $c_id = $this->input->post("c_id");
        $c_title =$this->input->post("c_title");
        $c_body = $this->input->post("c_body");

        $c_show = ($c_show = $this->input->post("c_show"))?$c_show=1:$c_show=0;

        $c_approve = ($c_approve = $this->input->post("c_approve"))?$c_approve=2:$c_approve = 0;

        $c_status_text = "Wait";
        if($c_approve != 0):
            $c_status_text = "Approve";
        endif;
        
        $re_date = $this->today_andTime;

        $comment_data = array(
            "c_comment_title" => $c_title,
            "c_comment_body" => $c_body,
            "c_show" => $c_show,
            "c_status" => $c_approve,
            "c_status_txt" => $c_status_text,
            "c_last_access" => $re_date
        );

        $where = array("c_id" => $c_id);
        $save = $this->Mdl_comment->saveComment($comment_data,$where);

        //---get the user email to sent the notice
        $our_url = "";
        $u_email = "";
        $u_name = "";
        $approve = 0;
        $get_mail = $this->Mdl_comment->getComment(
            $where
        )->result();
        foreach($get_mail as $row):
            $u_email = $row->c_user_email;
            $approve = $row->c_status;
            $u_name = $row->c_user_name;
            $our_url = $row->c_comment_url;
        endforeach;

        if($approve != 0):
            //---sent email to let them know
            $mail_title = "Dear {$u_name} your comment at {$our_url} has approved!";
            $mail_body = "<h1>Hi dear {$u_name}</h1>
            <p>We just want to inform you that your comment '<strong>{$c_title}</strong>' on <a href='{$our_url}' target='_blank'>{$our_url}</a> has approved by admin on {$this->today_andTime}</p>
            <p>to go to visit just click 
            <a href='{$our_url}' target='_blank'>Here</a>.
            </p>
            <p>If the above link is not working by some reason please copy the below link to your address bar then press enter key to go to visit the page</p>
            <p>
            <b><i><strong>{$our_url}</strong></i></b>
            </p>
            <p style='text-align:center;'>Best regard 
            <strong>{$this->admin_email}</strong>
            </p>
            ";
            $this->sendMailTo($this->admin_email,$u_email,$mail_title,$mail_body);
        endif;



        $this->o_put["c_id"] = $c_id;
        $this->o_put["msg"] = "Success : data has been save";
        $this->output->set_output(json_encode($this->o_put));
    }


    //------------------------------------------

    function admin(){

        $this->data["meta_title"] = "Comment Admin 1.3 | {$this->user_name} | {$this->user_type}";
        $this->data["subview"] = "comment/c_Admin";

        $tmp = "_ADMIN_TMP";
        $this->load->view($tmp,$this->data);
    }


    //----------------End of admin section-----------------------------
}//end of file