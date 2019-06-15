<?php 

class Faq extends MY_Controller{

    //------only work on none login user page

    protected $user_id;
    protected $user_name;
    protected $is_login;
    protected $is_admin;

    //table faq and table answer
    protected $_tb_faq = "tbl_faq";
    protected $_tb_ans = "tbl_faq_answer";

    protected $_tb_sub = "tbl_subscribe";

    public $today;
    public $time;
    public $o_put;
     
    //--user info
    public $ip;
    public $browser;
    public $os;

    public function __construct(){
        parent::__construct();
        $this->today = date("Y-m-d",time());
        $this->time = date("h:i:s",time());

        //modal
        $this->load->model("Mdl_faq");
        $this->load->model("Mdl_subscribe");
        $this->ip = $this->Mdl_faq->getIP();
        $this->browser = $this->Mdl_faq->getBrowser();
        $this->os = $this->Mdl_faq->getOS();
        
        $this->load->library("pagination");

    }

    function index(){
        if($this->is_login):
            $url = site_url("faq");
            if($this->is_admin):
                $url = site_url("faq/admin");
            endif;
            redirect($url);
        endif;
        
        //join table to get faq ans answer
        $j1 = "{$this->_tb_faq}.faq_id = {$this->_tb_ans}.faq_id";

        $where_faq = array("{$this->_tb_faq}.faq_is_show !="=>0);
        $get_faq = $this->db
                        ->join($this->_tb_faq,$j1)
                        ->where($where_faq)
                        ->get($this->_tb_ans)->result();
        $num_faq = count($get_faq);
        $this->data["get_faq"] = $get_faq;
        $this->data["num_faq"] = $num_faq;

        $this->data["ip"] = $this->ip;
        $this->data["browser"] = $this->browser;
        $this->data["os"] = $this->os;
        
        $this->data["subview"] = "faq/faq_index";
        $this->load->view("_layout_main",$this->data);

    }

    //---faq-anonymous is where the not login user will be landing on
    function faq_anonymous(){

        $cmd = $this->input->post("cmd");
        $faq_id = $this->input->post("faq_id");
        switch($cmd):

            case"getAllFaq":
                $where = array(
                    "faq_is_show != " => 0,
                    "faq_has_ans !=" => 0

                );
                $get = $this->Mdl_faq->getFaq($where)->result();
                $this->o_put["get"] = $get;

                $this->output->set_output(json_encode($this->o_put));
            break;
            case"readFaq":
                //echo"we will read {$faq_id}";
                $where = array(
                    "faq_id" => $faq_id
                );
                $get_ans = $this->Mdl_faq->getAns($where)->result();
                $get_faq = $this->Mdl_faq->getFaq($where)->result();
                $this->o_put["get_faq"] = $get_faq;
                $this->o_put["get_ans"] = $get_ans;
                $this->o_put["num_ans"] = count($get_ans);

                $this->output->set_output(json_encode($this->o_put));
            break;
            default:
                $this->data["meta_title"] = "Please feel free to ask any question";
                //$this->data["subview"]
            break;
        endswitch;
    }

    //------------
    function getFaq(){
        //--get the none login user faq
        //--the none login can do 1 post per day
        $where = array(
            "faq_ip" => $this->ip,
            "faq_date" => $this->today,
            "faq_user_id " => 0
        );
        $get = $this->Mdl_faq->getFaq($where)->result();
        $num_faq = count($get);
        $edit = 0;
        if($num_faq > 0):
            $edit = 1;
        endif;
        $this->o_put["edit"] = $edit;
        $this->o_put["get_faq"] = $get;
        $this->o_put["num_faq"] = $num_faq;

        $this->output->set_output(json_encode($this->o_put));
    }
    //---check method
    function faq_check(){
        $cmd = $this->input->post("cmd");
        $email = $this->input->post("faq_email");
        
        $err = 0;
        $msg = "";
        switch($cmd):
            case"check_email":

                if(!$this->is_valid_email($email)):
                    $err = 1;
                    $msg = "Error : the email {$email} is invalid";
                endif;
                $this->o_put["err"] = $err;
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
            
        endswitch;
    }
    //-----------save method 
    function saveFaq(){

        //the form submit
        $faq_id = $this->input->post("faq_id");
        $faq_name = $this->input->post("faq_name",true);
        $faq_title = $this->input->post("faq_title",true);
        $faq_email = $this->input->post("faq_email",true);
        $faq_body = $this->input->post("faq_body",true);

        $msg = "";
        $faq_data = array(
            "faq_ip" => $this->ip,
            "faq_name" => $faq_name,
            "faq_title" => $faq_title,
            "faq_body" => $faq_body,
            "faq_email" => $faq_email,
            "faq_date" => $this->today,
            "faq_time" => $this->time

        );

        if($faq_id):
            //edit faq mode
            $where = array("faq_id" => $faq_id);
            $save = $this->Mdl_faq->saveFaq($faq_data,$where);
            $msg = "your message is update";
        else:
            //insert faq mode
            $save = $this->Mdl_faq->saveFaq($faq_data);
            $msg = "your message is send";
        endif;

        $this->o_put["msg"] = $msg;
        $this->output->set_output(json_encode($this->o_put));

    }
    //-----

    //---sendEmail
    function sendEmail(){
        $u_email = $this->input->post("u_email");
        $our_web = site_url();
        $u_data = array(
            "sub_email" => $u_email,
            "sub_user_data" => "[os : {$this->Mdl_subscribe->os}][ ip : {$this->Mdl_subscribe->ip}][Browser : {$this->Mdl_subscribe->browser}]",
            "sub_by_ip" => $this->Mdl_subscribe->ip,
            "sub_by_date" => $this->today
        );

        $key = $this->Mdl_subscribe->save($u_data);
        
        $u_title = "Your email is subscribe to {$our_web}.";
        $u_body = "
        <h2 style='text-align:center;color:green;'>Your email has been subscibe to {$our_web}</h2>
        <p>Thank you for visiting us.</p>
        <p style='margin-top:25px;text-align:right;'>Best regard | {$this->admin_email}</p>
        
        ";
        $this->sendMailTo(null,$u_email,$u_title,$u_body);



        $msg = "<p>you have subscribe now,please check your e-mail.</p>
        <p> thank you.</p>";
        $this->o_put["msg"] = $msg;
        $this->output->set_output(json_encode($this->o_put));
    }

    //-------check repeat email
    function _checkRepeatEmail($email){
        $where = array("email");
    }
   

    

    /*
    //---Admin section
    //--last update wed 11 apr 2018
    */
    function admin(){
        if(!$this->is_admin):
            redirect(site_url("faq"));
        endif;
        $cmd = $this->input->post("cmd");

        $faq_id = $this->input->post("faq_id");
        $faq_pub = $this->input->post("faq_pub");

        //--ans data
        $ans_time = $this->today." ".$this->time;
        $ans_title = $this->input->post("ans_title");
        $ans_body = $this->input->post("ans_body");
        $ans_data = array(
            "faq_id" => $faq_id,
            "ans_title" => $ans_title,
            "ans_body" => $ans_body,
            "ans_date" => $ans_time,
            "ans_name" => $this->user_name
        );

        switch($cmd):

            case"getFaq":
                //--get the faq to answer
                //--will get and list the answer
                $where_faq = array("faq_id" => $faq_id);
                $get_faq = $this->Mdl_faq->getFaq($where_faq)->result();
                $this->o_put["get_faq"] = $get_faq;

                $get_ans = $this->Mdl_faq->getAns($where_faq)->result();
                $this->o_put["get_ans"] = $get_ans;

                $this->output->set_output(json_encode($this->o_put));
            break;
            case"setFaqPublic":
                $label = "Public";
                if($faq_pub == 0):
                    $label = "Private";
                endif;
                echo"You have set faq id {$faq_id} to {$label}";
                $f_data = array("faq_is_show" => $faq_pub);
                $this->Mdl_faq->saveFaq($f_data,array("faq_id" => $faq_id));
            break;
            case"delFaq":
                $this->Mdl_faq->delFaq($faq_id);
                echo"Data has been deleted!";
            break;
            case"answer":
                //echo"I will answer {$faq_id}";
                $save = $this->Mdl_faq->saveAns($ans_data);
                $this->Mdl_faq->numFaqAns($faq_id);
                echo"reply is success!";
            break;
            default:
                $get_faq = $this->Mdl_faq->getFaq()->result();
                $num_faq = count($get_faq);

                $page = $this->input->get("page");
                if(!$page):
                    $page = 1;
                else:
                    $page = $page;
                endif;
                $per_page = 4;
                $conf = array();
                $conf["base_url"] = site_url("faq/admin/{$page}");
                $conf["total_rows"] = $num_faq;
                $conf["per_page"] = $per_page;
                $this->pagination->initialize($conf);
                $get_all_faq = $this->Mdl_faq->getFaq(null,$conf["per_page"],$this->uri->segment(4))->result();

                $this->data["get_faq"] = $get_faq;

                //---show with the pagination
                $this->data["get_all_faq"] = $get_all_faq;
                $this->data["num_faq"] = $num_faq;
                $this->data["per_page"] = $per_page;

                $this->data["meta_title"] = "Managing faq";
                $this->data["subview"] = "admin/faq/faq_index";
                $this->load->view("_layout_admin",$this->data);
            break;
        endswitch;
    }

    //------------
    function viewFaq($faq_id){
       
        $where = array("faq_id" => $faq_id);
        $get_faq = $this->Mdl_faq->getFaq($where)->result();
        
        //--get the answer
        $get_ans = $this->Mdl_faq->getAns($where)->result();
        $num_ans = count($get_ans);

        //update the number of answer to this faq id
        $this->Mdl_faq->numFaqAns($faq_id);
        
        //---get the faq
        $this->data["get_faq"] = $get_faq;

        //--get the answer for this faq
        $this->data["get_ans"] = $get_ans;
        $this->data["num_ans"] = $num_ans;

        $this->data["subview"] = "admin/faq/view_faq";
        $this->load->view("_layout_main",$this->data);

    }

    //-------------
    function getAnswer(){
        //the id to get result
        $ans_id = $this->input->post("ans_id");
        $faq_id = $this->input->post("faq_id");
        $where_ans = array("ans_id" => $ans_id);
        if(!$ans_id):
            unset($where_ans["ans_id"]);
            $where_ans["faq_id"] = $faq_id;
        endif;

        $get_ans = $this->Mdl_faq->getAns($where_ans)->result();
        $num_ans = count($get_ans);
        $this->o_put["get_ans"] = $get_ans;
        $this->o_put["num_ans"] = $num_ans;
        $this->output->set_output(json_encode($this->o_put));
        
    }
    //------------
    function answerFaq(){
        
        //--save answer add or update
        $faq_show = $this->input->post("faq_show");
        $faq_id = $this->input->post("faq_id");
        $ans_id = $this->input->post("ans_id");

        $show = 0;
        if($faq_show):
            $show = 1;
        endif;

        //show or hide faq
        $faq_data = array("faq_is_show" => $show);
        $this->Mdl_faq->saveFaq($faq_data,array("faq_id" => $faq_id));

        $ans_title = $this->input->post("ans_title");
        $ans_body = $this->input->post("ans_body");

        $today = date("Y-m-d h:i:s",time());
        $ans_data = array(
            "faq_id" => $faq_id,
            "ans_date" => $today,
            "ans_name" => $this->user_name,
            "ans_title" => $ans_title,
            "ans_body" => $ans_body
        );
        
        $label = "";
        if($ans_id):
            $this->Mdl_faq->saveAns($ans_data,array("ans_id" => $ans_id));
            $label = "Answer has been update";
        else:
            $this->Mdl_faq->saveAns($ans_data);
            $label = "Answer has been save";
        endif;
        $this->Mdl_faq->numFaqAns($faq_id);
        $this->o_put["msg"] = $label;
        $this->output->set_output(json_encode($this->o_put));


    }

    /*
    //End of admin section

    */
    

}//end of file