<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    
    public $user_name;

    protected $is_login;
    protected $user_id;
    protected $user_email;
    protected $is_admin;
    protected $user_pass;
    protected $moderate;
    



    //the table name
    //edit on Thu 8 Jun 2017
    protected $_tb_user = "users";
    protected $_tb_notice = "tbl_notification";

    public $o_put;
    public $msg;
    public $today;
    public $user_type;
    public $ip;

  function __construct() {
    parent::__construct();

    //----test login with google
    //require_once APPPATH.'third_party/src/Google_Client.php';
	//require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

    //---load library
    $this->load->library("pagination");

    $this->load->model("Mdl_users");
    $this->load->model("Mdl_article");
    $this->load->model("Mdl_contact");
    $this->load->model("Mdl_booking");
    $this->load->model("Mdl_ustd"); //--18-Sep-2019
    
    //check the user session
    $this->is_login = $this->Mdl_users->user_is_login();
    $this->data["is_login"] = $this->is_login;
    $this->user_name = $this->Mdl_users->getUserName();
    $this->user_id = $this->Mdl_users->getUserId();
    $this->is_admin = $this->Mdl_users->user_is_admin();
    $this->user_pass = $this->session->userdata("user_pass");
    $this->user_email = $this->session->userdata("user_email");
    $this->moderate = $this->Mdl_users->user_is_mod();
    $this->user_type = $this->session->userdata("user_type");

    
    $this->u_data = $this->get_user_info();
    $this->ip = $this->Mdl_users->getIP();

    //----Wed 3 Oct 2018
    //$this->user_type = $this->user_type(); 

    }

    function index(){

        //if the user enter this page
        //the script will check the session

        //$command = $this->input->post("command");
        //-----------end of google test
        $url = site_url("users/logout");
        if($this->is_login):
            $url = site_url("users/u/{$this->user_id}");
            if($this->is_admin):
                $url = site_url("admin");
            endif;
            if($this->moderate):
              $url = site_url("users/mod");
            endif;
            redirect($url);
        endif;
        $this->data["meta_title"] = "login test";
        $this->data["subview"] = "users/frm_login";
        $tmp = "_layout_main";
        $this->load->view($tmp,$this->data);

    }//end of index

    

    function ajaxGetUser(){
        $name = $this->input->post("fb_name");
        $email = $this->input->post("fb_email");

        $today = date("Y-m-d",time());
        $where = array("name" => $name,"email" => $email);
        $get = $this->Mdl_users->getUsers($where)->result();
        $num_u = count($get);
        $u_info = array();
        $u_id = 0;

        if($num_u == 0){
            $pass = $this->make_hash(1234);
            
            $user_data = array(
                "name" => $name,
                "email" => $email,
                "passwd" => $pass,
                "user_ip" => $this->ip,
                "date_register" => $today,
                "is_activated" => 1,
                "user_type" => 409
            );
            $s = $this->Mdl_users->saveUser($user_data);
            $u_id = $s;
            
        }else{
            foreach($get as $row){
                $u_id = $row->id;
            }
        }
        $t = $this->_user_type($u_id);
        $url = $t["url"];
        $this->_user_set_info($u_id);

        $this->o_put["msg"] = "logging in welcome {$name}";
        $this->o_put["url"] = $url;
        $this->output->set_output(json_encode($this->o_put));
        
        //redirect(site_url("users/summary"));
        
    }

    /*
    This is the private method section
    Create on Sun 17 Dec 2017

    */
    function _chk_name($name){
        //call by method signup
        //--last edit on 20/4/2018 auto save
        $err = 0;
        $msg = "";
        $get = $this->Mdl_users->getUsers(array("name" => $name))->result();
        $num = count($get);
        if($num >= 1):
            $msg = "Error : The user name {$name} is already taken!";
            $err = 1;
        endif;

        $data = array(
            "msg" => $msg,
            "err" => $err
        );
        return $data;

    }
    //------------
    function _repeat_name($name){
        $get = $this->Mdl_users->getUsers(array("name" => $name))->result();
        $num = count($get);
        if($num != 0):
            return true;
        endif;
        return false;
    }
    //-------------------


    //-------------------
    function _repeat_email($email){
        //$em = $this->input->post("reg_email");
        $where = array("email" => $email);
        $get = $this->Mdl_users->getUsers($where)->result();
        if(count($get) != 0):
            return true;
        endif;
        return false;
    }
    //----
    function _user_status($name,$pass){

        $data = array();
        $get = $this->Mdl_users->getUsers(array("name" => $name,"passwd" => $pass))->result();
        $msg = "Welcome {$name}";
        $err = 0;
        $num = count($get);
        $id = 0;
        if($num == 0):
            $msg = "Error : wrong user name or pass";
            $err = 1;
        endif;
        foreach($get as $row):
            if($row->is_activated == 0):
                $msg = "Error : your account is NOT active by admin";
                $err = 1;
            endif;
            if($row->is_ban != 0):
                $msg = "Error : your account is BAN";
                $err = 1;
            endif;
            $id = $row->id;
            $name = $row->name;
            $email = $row->email;

        endforeach;
        $data["msg"] = $msg;
        $data["err"] = $err;
        $data["u_id"] = $id;

        return $data;
    }
    //---get user status sat/14/apr/2018
    function _user_type($u_id){
        $get = $this->Mdl_users->getUsers(array("id" => $u_id))->result();
        $url = site_url("users/login");//default will be member
        $data = array();
        $type = "anonymous";
        $mod = 0;
        foreach($get as $row):
            if($row->user_type == 642):
                $url = site_url("admin");
                $type = "admin";
            elseif($row->user_type == 409):
                $url = site_url("users/summary");
                $type = "member";
            endif;
        endforeach;
        $data["url"] = $url;
        $data["type"] = $type;
        return $data;
    }
    //--set user info tue 17 apr 2018
    function _user_set_info($u_id){
        $is_login = 0;
        $id = 0;
        $u_name = 0;
        $u_email = 0;
        $type = 0;
        $u = array();
        $get = $this->Mdl_users->getUsers(array("id" => $u_id))->result();
        foreach($get as $row):
            $u["user_name"] = $row->name;
            $u["user_email"] = $row->email;
            $u["user_type"] = $row->user_type;
            $u["is_login"] = 1;
            $u["user_id"] = $row->id;
            $u["moderate"] = $row->moderate;
            if($row->user_type == 642):
                $u["is_admin"] = 1;
            endif;
        endforeach;

        $this->session->set_userdata($u);
        return $u;
    }



    /*
        End of private method

    */
    /*
        confirm the password before process
    */
    function conf_pass(){
        $pass = $this->make_hash($this->input->post("passwd"));
        $where = array("passwd" => $pass);
        $get = $this->Mdl_users->getUsers($where)->result();
        $num = count($get);
        $err = 1;
        $msg = "Error : wrong password! please re-check your confirm password!";
        if($num != 0):
            $err = 0;
            $msg = "PASS";
        endif;
        $this->o_put["err"] = $err;
        $this->o_put["msg"] = $msg;
        $this->output->set_output(json_encode($this->o_put));

    }
    //-----------
    function forgotpass(){
        //only get by the ajax
        //--last edit on 18 Apr 2018
        $cmd = $this->input->post("cmd");
        $tel = $this->input->post("tel",true);
        $email = $this->input->post("email",true);
        $reP = $this->make_hash($this->input->post("newP",true));
        $u_id = $this->input->post("u_id");



        $err = 0;
        $msg = "";
        switch($cmd):
            case"chk_email":
                if(!$this->is_valid_email($email)):
                    $err = 1;
                    $msg = "Error : email is invalid!";
                else:
                    $where = array("email" => $email);
                    $get = $this->Mdl_users->getUsers($where)->result();
                    $num = count($get);
                    if($num != 1):
                        $err = 1;
                        $msg = "Error : there is none of account match found!";

                    endif;

                endif;
                
                $this->o_put["err"] = $err;
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
            case"chk_tel":
                $where = array(
                    "email" => $email,
                    "tel" => $tel
                );
                $get = $this->Mdl_users->getUsers($where)->result();
                $num = count($get);
                if($num == 0):
                    $err = 1;
                    $msg = "Error : the user is not found";
                endif;
                if($err != 1):
                    $msg = "PASS";
                endif;
                $this->o_put["err"] = $err;
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
            case"set_user":

                $where = array(
                    "email" => $email,
                    "tel" => $tel
                );
                $get = $this->Mdl_users->getUsers($where)->result();
                $num = count($get);
                if($num == 0):
                    $err = 1;
                    $msg = "Error : wrong information!";
                endif;
                $this->o_put["get"] = $get;
                $this->o_put['msg'] = $msg;
                $this->o_put["err"] = $err;
                $this->output->set_output(json_encode($this->o_put));

            break;
            case"resetMyPass":
            /*
            //|--when the user request to reset the password
            //|--and the reset was success will sent the message to the admin too
            //|--the user will not be able to use the new pass-code unless the admin
            //|--give it a permission to this user
            */
                $u_data = array(
                    "passwd" => $reP,
                    "is_activated" => 0
                );
                $save = $this->Mdl_users->saveUser($u_data,array("id" => $u_id));
                $msg = "Success : your password has been reset ,please come back and try to login again in 48 hours.";
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
        endswitch;
    }


    

    //----
    function u($id){

        if(!$this->is_login):
            redirect(site_url("users/logout"));
        endif;
        
        $this->data["subview"] = "users/member_summary";
        $this->data["user_id"] = $this->user_id;
        $this->data["meta_title"] = "{$this->user_type}&nbsp;|&nbsp;welcome {$this->user_name}";
        $this->load->view("_MEMBER_TMP",$this->data);

    }
    //----------
    //----------uGetUserInfo
    function uGetUserInfo($id){
        //---Create Thu 4 Oct 2018
        $user_email = "";
        $user_id = "";
        $user_name = "";
        $data = "";
        $get = $this->Mdl_users->getUsers(array("id" => $id))->result();
        foreach($get as $row):
            $user_email = $row->email;
            $user_id = $row->id;
            $user_name = $row->name;
        endforeach;

        //---set output ajax
        
        $this->o_put["user_info"] = $get;
        $this->output->set_output(json_encode($this->o_put));

        //----test return data
        //----Sat 6 Oct 2018
        $data = array(
            "user_email" => $user_email,
            "user_id" => $user_id,
            "user_name" => $user_name
        );
        return $data;
    }
    //-----------------------
   /* User 
    * member that has login to his landing page
    *  create Wed 18 Sep 2019 
    *
    */
     

    function userListStatus($page=1){
      $where = array("{$this->_tb_user}.id" => $this->user_id);
      $get = $this->Mdl_ustd->userGetStatus($where)->result();
      $this->o_put["get"] = $get;
      $this->output->set_output(json_encode($this->o_put));
    }

    function userStatusSave(){
      $save = $this->Mdl_ustd->userStatusSave();
      $user_id = $save["user_id"];
      $this->o_put["msg"] = "Success  @{$user_id}";
      $this->output->set_output(json_encode($this->o_put));
    }






    /*  End of user section */
    //no need to edit
    function logout(){

        $user_data = array("user_name","user_id","is_login","is_admin");
        $this->session->unset_userdata($user_data);
        $this->session->sess_destroy();
        //redirect(site_url());
        $this->data["subview"] = "users/logout";
        $this->data["meta_title"] = "loging out...";
        $tmp = "_layout_main";
        $this->load->view($tmp,$this->data);
    }
////End of mon-12-Sep-2016



//----------------------------
//-------adminListUser
function adminListUser($seg=1){

    $where = array(
        "user_type !=" => 642,
        "id !=" => $this->user_id 
    );
    $get = $this->Mdl_users->getUsers($where)->result();
    $num = count($get);

    //----pagination
    $per_page = 4;
    $url = "users/adminListUser";
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $seg;
    $start = ($page-1)*$conf["per_page"];
    $get_user = $this->Mdl_users->getUsers($where,$conf["per_page"],$start)->result();

    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;

    $this->o_put["get_users"] = $get_user;
    $this->o_put["num_user"] = $num;

    $this->output->set_output(json_encode($this->o_put));
}


  /* Moderate Section create on 15-Sep-2019 */
  function mod(){
    echo"welcome {$this->user_name}";
  }


  /* End of Moderate section */
//---------------------------------
//--------modViewUser
function modViewUser($id){
    $where = array(
        "{$this->_tb_user}.id" => $id
    );
    $get_user = $this->Mdl_users->getUsers($where)->result();
    $name = "";
    foreach($get_user as $row):
        $name = $row->name;
        $this->data["name"] = $name;
        $this->data["u_id"] = $row->id;
    endforeach;
    $this->data["meta_title"] = "Show info of {$name}.";
    $this->data["subview"] = "admin/user/user_detail";
    $this->load->view("_DETAIL_TMP",$this->data);
}


//---------adminEditUser---------
function adminEditUser($id){
    $where = array("id" => $id);
    $get = $this->Mdl_users->getUsers($where)->result();
    $this->o_put["get_user"] = $get;
    $this->output->set_output(json_encode($this->o_put));
}
//---------adminEditUser
function adminSaveUser(){
    
    $user_name = $this->input->post("user_name");
    $user_id = $this->input->post("user_id");
    $user_email = $this->input->post("user_email");
    $user_tel = $this->input->post("user_tel");
    $user_pass = $this->make_hash("1234");

    $user_ban = ($user_ban = $this->input->post("user_ban"))?$user_ban = 2: $user_ban = 0;

    $user_active = ($user_active = $this->input->post("user_active"))?$user_active = 2: $user_active = 0;

    $user_mod = ($user_mod = $this->input->post("user_mod"))?$user_mod = 2: $user_mod = 0;

    $about_user = "
        <div class='row'>
            <div class='col-sm-8'>
                <h2>Warning!</h2>
                <p>
                    Your account is create by admin using a simple password 1234 this is insecure.
                </p>
                <p>
                    Please change your password and delete all of this message from the textbox below.
                </p>
            </div>
        </div>
    ";

    $user_data = array(
        "name" => $user_name,
        "passwd" => $user_pass,
        "email " => $user_email,
        "tel" => $user_tel,
        "user_type" => 409,
        "moderate" => $user_mod,
        "is_activated" => $user_active,
        "is_ban" => $user_ban,
        "date_register" => $this->today,
        "about_user" => $about_user
    );

    
   if(!$user_id):
        if($this->getExitUserName($user_name)):
            //---make sure that this user name is not exit then create new user
            $msg = "Error : This user name {$user_name} is exit! ";
        else:
            $save = $this->Mdl_users->saveUser($user_data);
            $user_id = $save;
            $msg = "Success : The user name {$user_name } is created!";

        endif;
        
    else:
        //---update this user 
        unset($user_data["date_register"]);
        unset($user_data["about_user"]);
        unset($user_data["passwd"]);
        $user_id = $user_id;
        $save = $this->Mdl_users->saveUser($user_data,array("id" => $user_id));
        $msg = "Success : data of {$user_name} has been updated";
   endif;
   
   
    $this->o_put["msg"] = $msg;
    $this->o_put["user_id"] = $user_id;
    $this->output->set_output(json_encode($this->o_put));
}
//---------------
//-------adminDelUser
function adminDelUser($id){
    $where = array("id" => $id);
    $get = $this->Mdl_users->getUsers($where)->result();

    $name = "";
    $email = "";
    $u_id = "";
    foreach($get as $row):
        //---for the future improve 
        $name = $row->name;
        $email = $row->email;
        $u_id = $row->id;
    endforeach;
    $this->Mdl_users->delUser(array("id" => $u_id));
    $this->o_put["msg"] = "Success : user name {$name} has been deleted!";
    $this->o_put["user_id"] = $u_id;

    $this->output->set_output(json_encode($this->o_put));
}

function getExitUserName($name){
    $where = array(
        "name" => $name
    );
    $get = $this->Mdl_users->getUsers($where)->result();
    $num = count($get);
    $repeat = 0;
    if($num):
        $repeat = 1;
    
    endif;
    return $repeat;
}

//-----------end of admin section

}//end of the class users
