<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MY_Controller extends CI_Controller{
    /*
last change on Sun-23-Oct-2016
    */
    protected $is_login;
    protected $is_admin;
    protected $moderate;
    protected $user_id;
    protected $user_name;
    protected $user_email;
    protected $_tb_seo = "seo";


    //add this line on Mon-19-Jun-2017
    public $u_data;
    public $a_info;
    public $admin_email = "you-email";
    public $time;
    public $today;
    public $today_andTime;
    public $user_type;
    public $publisher;

function __construct() {
    parent::__construct();
    $this->output->set_header("Access-Control-Allow-Origin:*");
    $this->is_login = $this->user_is_login();
    $this->is_admin = $this->user_is_admin();
    $this->moderate = $this->user_is_mod();
    $this->user_id =  $this->session->userdata("user_id");
    $this->user_name =  $this->session->userdata("user_name");
    $this->user_email =  $this->session->userdata("user_email");
    $this->user_type = $this->user_type();
    //load the agent library
    $this->load->library("user_agent");


    //---public
    $this->data["is_login"] = $this->is_login;
    $this->data["is_admin"] = $this->is_admin;
    $this->data["moderate"] = $this->moderate;
    //get the basic information from the user
    $this->u_data = $this->get_user_info();
    $this->data["ip"] = $this->u_data["ip"];
    $this->data["browser"] = $this->u_data["browser"];
    
    //---browser_name add on 6-6-19
    $this->data["browser_name"] = $this->u_data["browser_name"];
    
    $this->data["version"] = $this->u_data["version"];
    $this->data["os"] = $this->u_data["os"];
    
    
    $this->data["admin_email"] = $this->admin_email;
    $this->data["publisher"] = "you-name";
    $this->data["page_description"] = "your description";
    $this->data["page_keyword"] = "your keyword";
    $this->data["og_url"] = site_url();
    $this->data["og_sitename"] = site_url();
    
    $this->data["user_name"] = "Anonymous";
    if($this->is_login):
        $this->data["user_name"] = $this->user_name;
        $this->data["user_id"] = $this->user_id;
    endif;

    $this->a_info = $this->get_app_info();
    $this->data["a_name"] = $this->a_info["a_name"];
    $this->data["a_version"] = $this->a_info["a_version"];
    $this->data["meta_title"] = "welcome friends";
    
    $this->today = date("Y-m-d",time());
    $this->time = date("H:i:s",time());
    $this->today_andTime = date("Y-m-d H:i:s",time()); 

    $this->data["today"] = $this->today;
    $this->data["time"] = $this->time;
    $this->data["today_andTime"] = $this->today_andTime;

    // $this->data["time"] = $this->today["time"];
    // $this->data["day"] = $this->today["day"];
    // $this->data["date_time"] = $this->today["date_time"];
    // $this->data["today"] = date("Y-m-d h:i:s",time());
}
function make_hash($pw){
  $hash_key = "./!223&&3$#***LVM*&";
  return hash("sha512",$pw.$hash_key);
}


//---------
//----randomChar
function randomChar($length=false){
    if(!$length):
        $length = 10;
    endif;
    $permitted_chars = '123456789ABCDEFGHJMNPQRSTUVWXYZ';
    // Output: 54esmdr0qf
    $random = substr(str_shuffle($permitted_chars), 0, $length);
    return $random;
}

//-------------
//---send mail 8/4/19
function sendMailTo($sendFrom=false,$sendTo=false,$title,$message){

    if(!$sendFrom):
        $sendFrom = $this->admin_email;
    endif;
    if(!$sendTo):
        $sendTo = $this->admin_email;
    endif;
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => 'you-gmail-account', // change it to yours
        'smtp_pass' => 'you-gmail-password', // change it to yours
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'wordwrap' => TRUE
    );

    //$message = 'This is the test from website https://stackoverflow.com/questions/18586801/send-email-by-using-codeigniter-library-via-localhost on 6/4/19<h2>This is the funny </h2><p>Ha ha </p>';
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from($sendFrom); // change it to yours
    $this->email->to($sendTo);// change it to yours
    $this->email->subject($title);
    $this->email->message($message);
    if($this->email->send())
    {
        return true;
    }
    else
    {
        show_error($this->email->print_debugger());
    }

}
//show app_name app_version
function get_app_info(){
    $a_name = "Ornnicha [อรณิชา]";
    $a_version = "4.0"; //--We love Thailand 4.0
    $app_data = array(
        "a_name" => $a_name." version ".$a_version,
        "a_version" => $a_version
    );

    return $app_data;
}

function is_valid_email($email){

    if(filter_var($email,FILTER_VALIDATE_EMAIL)):

        return true;
    else:
        return false;
    endif;
}

//Adding on Mon 19 June 2017
function get_user_info(){

    $u_data = array();

    $ip = $this->input->ip_address();
    $os = $this->agent->platform();
    $version = $this->agent->version();
    $browser = $this->agent->browser();

   $u_data["ip"] = $ip; 
   $u_data["browser_name"] = $browser;
   $u_data["browser"] = $browser." browser version ".$version; 
   $u_data["version"] = $version; 
   $u_data["os"] = $os; 



    return $u_data;
}

function get_browser(){
    $u = array();

    $browser = $this->agent->browser();
    $version = $this->agent->version();
    $os = $this->agent->platform();
    $u["show_full"] = $this->agent->agent_string();
    $u["browser"] = $browser;
    $u["version"] = $version;
    $u["os"] = $os; 
    return $u;
}



    /////this will return the day
    function get_today(){
        $day = date("D-M-Y",time());
        $time = date("h:i a.",time());

        $today = $day;
        $now = $time;

        $t = array();

        $t["day"] = $today;
        $t["time"] = $now;
        $t["date_time"] = "{$today} {$now}";

        return $t;
    
    }//end of today



    function user_is_login(){
        return $this->session->userdata("is_login");
    
    }
    function user_is_admin(){
        
      return $this->session->userdata("is_admin"); 

    }

    //----------Add this on Sat 1 Sep 2018 Start-------
    function user_is_mod(){
        return $this->session->userdata("moderate");
    }
    //----------------------------
    //-------user type
    function user_type(){
        $u_type = "Anonymous User";
        if($this->user_is_login()):
            
            if($this->user_is_admin()):
                $u_type = "Admin";

            elseif($this->moderate):
                $u_type = "Moderate";
            else:
                $u_type = "Member";
            endif;
        endif;
        return $u_type;
    }
    //-----------------
    
    //---------------Sat 1 Sep 2018 end-----------

    //---getConf for the pagination
    function getConfPagin($per_page=false,$num,$url=false,$ul_opt=false){

        if(!$url):
            $url = site_url();
        else:
            $url = site_url($url);
        endif;
        if(!$per_page || $per_page == 0): 
            $per_page = 10;
        endif;
        $ui_segment = 3;
        if($ul_opt):
            $ui_segment = $ul_opt;
        endif;
        $conf = array();
        $conf["base_url"] = $url;
        $conf["per_page"] = $per_page;
        $conf["total_rows"] = $num;
        $conf["uri_segment"] = $ui_segment;
        $conf['use_page_numbers'] = TRUE;
        $conf["full_tag_open"] = "<ul class='pagination'>";
        $conf["full_tag_close"] = "</ul>";
        $conf["first_tag_open"] = '<li class="page-item">';
        $conf["first_tag_close"] = '</li>';
        $conf["last_tag_open"] = "<li class='page-item'>";
        $conf["last_tag_close"] = "</li>";
        $conf["next_link"] = "&gt;";
        $conf["next_tag_open"] = "<li class='page-item'>";
        $conf["next_tag_close"] = "</li>";
        $conf["prev_link"] = "&lt;";
        $conf["prev_tag_open"] = "<li class='page-item'>";
        $conf["prev_tag_close"] = "</li>";
        $conf["cur_tag_open"] = "<li class='active'><a class='page-link' href='#'>";
        $conf["cur_tag_close"] = "</a></li>";
        $conf['num_tag_open'] = "<li class='page-item'>";
        $conf['num_tag_close'] = "</li>";
        $conf['num_links'] = 1;

        return $conf;

    }

    //-----------------
    


}//----end of file

