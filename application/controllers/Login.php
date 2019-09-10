<?php 

//---create on 20 Nov 2018 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{


    

    protected $is_login;
    protected $user_id;
    protected $user_name;
    protected $user_email;
    protected $is_admin;
    protected $user_pass;
    protected $moderate;
    

    //---protect string as google user
    protected $g_name;
    protected $g_email;

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

            //---load library
            $this->load->library("pagination");

            $this->load->model("Mdl_users");
           
            
            //check the user session
            $this->is_login = $this->session->userdata("is_login");
            $this->user_name = $this->session->userdata("user_name");
            $this->user_id = $this->session->userdata("user_id");
            $this->user_email = $this->session->userdata("user_email");
            $this->user_type = $this->session->userdata("user_type");
            $this->is_admin = $this->session->userdata("is_admin");
            $this->user_pass = $this->session->userdata("user_pass");
            $this->moderate = $this->session->userdata("moderate");
            $this->u_data = $this->get_user_info();
            $this->ip = $this->Mdl_users->getIP();

            //----Wed 3 Oct 2018
            $this->user_type = $this->user_type(); 

        }


        function getLoginName(){
            $u_name = $this->input->post("u_name");
            $get = $this->Mdl_users->getUsers(array("name" => $u_name))->result();
            $num = count($get);
            if($num == 0):
                $msg = "Error : no account match!";
                $err = 1;
            else:
                $err = 0;
                $msg = "Success : user name {$u_name} in field";
            endif;
            $this->o_put["msg"] = $msg;
            $this->o_put["error"] = $err;
            $this->output->set_output(json_encode($this->o_put));
        }

        //-----------------
        //----getLogin
        function getLogin(){
            $u = $this->input->post("user_name");
            $p = $this->make_hash($this->input->post("user_pass"));
            $msg = "";
            $err = 0;
            $url = site_url();
            $where = array(
                "name" => $u,
                "passwd" => $p
            );
            $get = $this->Mdl_users->getUsers($where)->result();
            $num = count($get);
            //---
            if($num == 0):
                $msg = "Error : Wrong user name or password!";
                $err = 1;
            else:
                $err = 0;
                
                $g_user = $this->getUserType($u);
                $url = $g_user["user_url"];
                $this->user_id = $g_user["user_id"];
                $this->user_name = $g_user["user_name"];
                $this->user_email = $g_user["user_email"];
                $this->user_type = $g_user["user_type"];
                $this->is_login= $g_user["is_login"];
                //$this->is_admin= $g_user["is_admin"];
                //$this->moderate= $g_user["moderate"];
                $mod = $g_user["moderate"];
                if(!$mod):
                    $mod = "NOT MOD";
                else:
                    $this->moderate = $g_user["moderate"];
                endif;

                $admin = $g_user["is_admin"];
                if(!$admin):
                    $admin = "NOT ADMIN";
                endif;
                $this->session->set_userdata($g_user);
                $msg = "Welcome to member zone {$u} ";
            endif;
            
            //---check ban user
            $where_ban = array(
                "name" => $u,
                "passwd" => $p,
                "is_ban !=" => 0
            );
            $get_ban = $this->Mdl_users->getUsers($where_ban)->result();
            $num_ban = count($get_ban);
            if($num_ban != 0):
                $msg = "Error : your account {$u} is BAN!";
                $err = 1;
            endif;
            
            //---check the active user status
            $not_active = array(
                "name" => $u,
                "passwd" => $p,
                "is_activated " => 0
            );
            $get_act = $this->Mdl_users->getUsers($not_active)->result();
            $no_ac = count($get_act);
            if($no_ac != 0):
                $msg = "Error : your account {$u} is NOT ACTIVATE!";
                $err = 1;
            endif;


            $this->o_put["msg"] = $msg;
            $this->o_put["error"] = $err;
            $this->o_put["url"] = $url;
            $this->output->set_output(json_encode($this->o_put));
        }

        //-------------------------
        //-----------getUserType----
        function getUserType($u){


            //---return the data array
            $type = "member";
            $name = "";
            $email = "";
            $u_id = "";
            $url = "";
            $mod = 0;
            $admin = 0;
            $data = array();
            $data["moderate"] = 0;
            $data["is_admin"] = 0;
            $get = $this->Mdl_users->getUsers(array("name" => $u))->result();
            foreach($get as $row):
                $name = $row->name;
                $u_id = $row->id;
                $email = $row->email;
                if($row->user_type == 642):
                    $admin = 1;
                    $type = "admin";
                endif;
                if($row->moderate != 0):
                    $mod = 1;
                    $type = "moderate";
                endif;
                $url = site_url("users/u/{$u_id}");
            endforeach;
            if($mod == 1):
                $url = site_url("users/mod/{$u_id}");
                $data["moderate"] = $mod;
            endif;
            if($admin == 1):
                $url = site_url("admin/u/{$u_id}");
                $data["is_admin"] = 1;
            endif;
            $data["user_id"] = $u_id;
            $data["user_name"] = $name;
            $data["user_type"] = $type;
            $data["user_email"] = $email;
            $data['user_url'] = $url;
            $data["is_login"] = 1;
            
            return $data;
        }
        //----------------------------
        //----googleLogin
        function googleLogin(){
            //---create on 11/5/19
            //---send by ajax
            $g_email = $this->input->post("g_email");
            $g_name = $this->input->post("g_name");

            //--protected var
            $this->g_name = $g_name;
            $this->g_email = $g_email;
            //---url to redirect
            $rd_url = "";
            //---user data
            $user_data = "";
            //---check if the user and email is exit
            $where = array("email" => $g_email,"name" => $g_name);
            $get = $this->Mdl_users->getUsers($where)->result();
            $num = count($get);
            if(!$num):
                 
                //--create new user
                $u = $this->_createUser();
                $u_email = $u["email"];
                $u_name = $u["name"];
                $u_pass = $u["passwd"];

                //---user data info                
                /*                
                $user_data = array(
                   "name" => $u_name,
                    "email" => $u_email,
                    "passwd" => $u_pass            
                );
                //--save user data
                $this->Mdl_users->saveUser($user_data);
                */

                $user_data = $this->getUserType($u_name);
                $rd_url = $user_data["user_url"];
                
                
                $msg = "Success | create new user ,Welcome {$u_name}";
            else:
                //---user login
                $user_data = $this->getUserType($g_name);
                $rd_url = $user_data["user_url"];
                $msg = "Welcome {$g_name} email {$g_email}";
            endif;
            
            $this->session->set_userdata($user_data);
            $this->o_put["url"] = $rd_url;
            $this->o_put["msg"] = $msg;
            $this->output->set_output(json_encode($this->o_put));
    
        }


    function _createUser(){
        $user_data = array(
            "name" => $this->g_name,
            "email" => $this->g_email,
            "passwd" => $this->make_hash(1234),
            "is_activated" => 1,
            "date_register" => $this->today,
            "user_type" => 409
        );
        $this->Mdl_users->saveUser($user_data);
        return $user_data;
    }
        

        
}
