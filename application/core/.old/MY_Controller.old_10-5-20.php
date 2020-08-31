<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MY_Controller extends CI_Controller{
    /*
last change on Sun 29-Dec-2019 5:45 a.m. using Laptopn @Phuket
    */
    protected $is_login;
    protected $is_admin;
    protected $moderate;
    protected $user_id;
    protected $user_name;
    protected $user_type;
    protected $user_email;
    public $user_type_text;


    public $admin_email = "info@farookphuket.com";
    public $time;
    public $today;
    public $today_andTime;
    public $publisher;

    //--- sysInfo
    public $sysName = "EverGreen";
    public $sysVersion = 1.20;
    public $sysDate = "6-Feb-2020";

    //--- userInfo
    public $ip;
    public $browser;
    public $browser_name;
    public $browser_version;
    public $os;

function __construct() {
    parent::__construct();
    $this->output->set_header("Access-Control-Allow-Origin:*");

    //---from the session
    $this->is_login = $this->user_is_login();
    $this->is_admin = $this->user_is_admin();
    $this->moderate = $this->user_is_mod();
    $this->user_id =  $this->getUserId();
    $this->user_name =  $this->getUserName();
    $this->user_email =  $this->getUserEmail();
    $this->user_type = $this->getUserType();
    $this->user_type_text = $this->getUserTypeText();



    //load the agent library
    $this->load->library("user_agent");



    //get the basic information from the user
    $this->ip = $this->getIP();
    $this->browser = $this->getBrowser();
    $this->browser_name = $this->getBrowserName();
    $this->browser_version = $this->getBrowserVersion();
    $this->os = $this->getOS();
    $this->data["ip"] = $this->ip;
    $this->data["browser"] = $this->browser;
    $this->data["browser_name"] = $this->browser_name;
    $this->data["browser_version"] = $this->browser_version;
    $this->data["os"] = $this->os;

    $this->data["sysName"] = $this->sysName;
    $this->data["sysDate"] = $this->sysDate;
    $this->data["sysVersion"] = $this->sysVersion;

    $this->data["user_type"] = $this->user_type;
    $this->data["user_type_text"] = $this->user_type_text;

    $this->data["admin_email"] = $this->admin_email;
    $this->data["publisher"] = "farook";
    $this->data["page_description"] = "the big power in the world is the power of sharing so give one to gain more";
    $this->data["page_keyword"] = "Mr.F,farook phuket,farookphuket,";
    $this->data["og_url"] = site_url();
    $this->data["og_sitename"] = site_url();

    $this->data["user_name"] = "Anonymous";
    $this->data["is_login"] = false;
    if($this->is_login):
        $this->data["user_name"] = $this->user_name;
        $this->data["user_id"] = $this->user_id;
        $this->data["is_login"] = true;
        $this->data["user_email"] = $this->user_email;
        if($this->is_admin):
            $this->data["is_admin"] = $this->is_admin;
        endif;
    else:
        $this->user_type_text = "Anonymous";

    endif;
    $this->data["user_id"] = 0;

    $this->data["moderate"] = $this->moderate;

    $this->data["meta_title"] = "Welcome to using {$this->sysName} {$this->sysVersion} | {$this->browser_name}";

    $this->today = date("Y-m-d",time());
    $this->time = date("h:i:s",time());
    $this->today_andTime = date("Y-m-d H:i:s",time());

    $this->data["today"] = $this->today;
    $this->data["time"] = $this->time;
    $this->data["today_andTime"] = $this->today_andTime;


  }
  function make_hash($pw){
    $hash_key = "./!223&&3$#***LVM*&";
    return hash("sha512",$pw.$hash_key);
  }


  //--- basic user machine
  function getIP(){
      $this->ip = $this->input->ip_address();
      return $this->ip;
  }

  //--getOS
  function getOS(){
      $this->os = $this->agent->platform();
      return $this->os;
  }

  function getBrowser(){
    $agent = "Unidentified User Agent";
    if($this->agent->is_browser()):
      $agent = $this->agent->browser()." version ".$this->agent->version();
      elseif($this->agent->is_robot):
        $agent = $this->agent->robot();
        elseif($this->agent->is_mobile()):
          $agent = $this->agent->mobile();
    endif;
    return $agent;
  }

  function getBrowserName(){
    $b_name = "Unidentified";
    if($this->agent->is_browser()):
      $b_name = $this->agent->browser();
    endif;
    return $b_name;
  }

  function getBrowserVersion(){
    $b_ver = 0;
    if($this->agent->is_browser()):
      $b_ver = $this->agent->version();
    endif;
    return $b_ver;
  }

  //---user_type
  function getUserType(){
    return $this->session->userdata("user_type");
  }

  //---user type text
  function getUserTypeText(){
      return $this->session->userdata("user_type_text");
  }

  //---getUserEmail
  function getUserEmail(){
    return $this->session->userdata("user_email");
  }

  //-- getUserId
  function getUserId(){
    return $this->session->userdata("user_id");
  }

    //-- getUserName
    function getUserName(){
        return $this->session->userdata("user_name");
    }


    function is_valid_email($email){

        if(filter_var($email,FILTER_VALIDATE_EMAIL)):

            return true;
        else:
            return false;
        endif;
    }



    //---- 29-july-2019
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
    ///
    //----randomChar 12-july-2019
    function randomChar($length=false){
        if(!$length):
            $length = 10;
        endif;
        $permitted_chars = '111122223333444455556666777788889999AAAABBBBCCCCDDDDEEEEFFFFGGGGHHHJJJMMMNNNPPPPQQQQRRRRSSSSTTTTUUUUVVVWWWWXXXXYYYYZZZZ';
        // Output: 54DBBFGTE7
        $random = substr(str_shuffle($permitted_chars), 0, $length);
        return $random;
    }


    function timeisup($time,$time_limit=300){
        $time_now = strtotime($this->today_andTime);
        $time_left = ($time-$time_now)/$time_limit;
        return $time_left;

    }


/*
 * for farookphuket.com
 * on 18 Dec 2019 has test on the local server and it is work just fine!
 */
function sendMailTo($sendFrom=false,$sendTo=false,$title,$message){

    if(!$sendFrom):
        $sendFrom = $this->admin_email;
    endif;
    if(!$sendTo):
        $sendTo = $this->admin_email;
    endif;
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'farookphuket.com',
        'smtp_port' => 25,
        'smtp_user' => 'info@farookphuket.com', // change it to yours
        'smtp_pass' => 'love2523', // change it to yours
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'wordwrap' => TRUE
    );

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

/*
 * End of send mail
 */


}//----end of file
