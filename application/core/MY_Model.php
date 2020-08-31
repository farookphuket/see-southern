<?php

class MY_Model extends CI_Model{

    protected $_table_name = '';
    protected $_order_by = '';


    //last edit on Tue 18 Feb 2020 11:42 p.m.
    
    // Add $_tb_name
    protected $_tb_name;


    //--add Fri 20 Apr 2018
    public $ip;
    public $os;
    public $browser;
    public $browser_name;
    public $browser_version;


    public $user_name;
    public $user_email;
    public $user_type;
    public $user_type_text;
    protected $user_id;

    //--- 20 Sep 2019
    public $today;
    public $today_andTime;

    //-----
    function __construct(){
        parent::__construct();

        $this->user_name = $this->getUserName();
        $this->user_email = $this->getUserEmail();
        $this->user_id = $this->getUserId();

        $this->user_type = $this->getUserType();
        $this->user_type_text = $this->getUserTypeText();
        $this->is_login = $this->user_is_login();
        $this->is_admin = $this->user_is_admin();
        $this->moderate = $this->user_is_mod();

        $this->today = date("Y-m-d",time());
        $this->today_andTime = date("Y-m-d H:i:s",time());


        $this->ip = $this->getIP();
        $this->os = $this->getOS();
        $this->browser = $this->getBrowser();

    }//end of construct

    /*edit this part on the Tue-13-June-2017
        Add getTB saveTB delTB method

        */
        //---this method has create on Fri 20 Apr.2018
    //--getIP
    function getIP(){
        $this->ip = $this->input->ip_address();
        return $this->ip;
    }

    //--getOS
    function getOS(){
        $this->os = $this->agent->platform();
        return $this->os;
    }

    //--getBrowser
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

    function getUserName(){
        return $this->session->userdata("user_name");
    }
    //-------------
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

    //---getUserEmail
    function getUserEmail(){
      return $this->session->userdata("user_email");
    }
    //----------
    
    
    
    //--getUserType
    function getUserType(){
      $type = $this->session->userdata("user_type");
      $user_type = "anonymous";
      if($type):
        $user_type = $type;
      endif;
      return $user_type;

    }

    //-----------

     
    //--getUserTypeText
    function getUserTypeText(){
            return $this->session->userdata("user_type_text");

    }

    //-----------



    function getUserId(){
        return $this->session->userdata("user_id");
    }

    //-----------
    //--------- 2-Aug-2019
    function make_hash($pw){
      $hash_key = "./!223&&3$#***LVM*&";
      return hash("sha512",$pw.$hash_key);
    }
    //------------------



//----randomChar 12-july-2019
    function randomChar($length=false){
        if(!$length):
            $length = 10;
        endif;
        $permitted_chars = '123456789111222333444555666777888999000ABCAAAYYIIITTTJHDYGFBEKJMCJJDJJD9987746539494005987645322HHIYEBJKDSPOLATDRSDEFGHJMNPQRSTUVWXYZAAABBBCCCDDDEEERRRTTTYYYUUUOOOPPPVVVFFF';
        // Output: 54DBBFGTE7
        $random = substr(str_shuffle($permitted_chars), 0, $length);
        return $random;
    }

  //--------------------------------


  /* Start Global method  20-Sep-2019 */
    function SAVE($data,$tb,$where=false){
      $save = "";

      $save_id = 0;
      if($where):
        $save = $this->db
                    ->where($where)
                    ->set($data)
                    ->update($tb);
      else:
       $save = $this->db
                    ->set($data)
                    ->insert($tb);
      $save_id = $this->db->insert_id();

      endif;
      return $save_id;
    }

function DEL($where,$tb=false){
    if(!$tb):
        $this->db
            ->where($where)
            ->delete($this->_table_name);
    else:
        $this->db
            ->where($where)
            ->delete($tb);

    endif;
    return true;

}
    /**
        * getEl 21-Sep-2019
        * will return the input post
     */
function getEl($el,$option=false){
    return $this->input->post($el,$option);
}

/* getTable will return the table name in it method */

function getTable(){
    return $this->_table_name;
}


/*
 * for farookphuket.com
 * on 18 Dec 2019
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
        'smtp_host' => 'see-southern.com',
        'smtp_port' => 25,
        'smtp_user' => 'info@see-southern.com', // change it to yours
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

    function timeisup($time,$time_limit=300){
        //-- 5 minute by default
        $time_now = strtotime($this->today_andTime);
        $time_left = ($time-$time_now)/$time_limit;
        return $time_left;

    }


  /* End of global method */

}//end of MY_Model class
