<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Moderate extends MY_Controller{
    protected $user_id;
    protected $user_name;
    protected $is_login;
    protected $is_admin;

    public $o_put;

    
    protected $_tb_user = "users";

    function __construct() {
      parent::__construct();
      $this->is_admin = $this->user_is_admin();
      $this->is_login = $this->user_is_login();
      $this->user_id = $this->getUserId();
      $this->user_name = $this->getUserName();

      //Load the library..edit on Mon-31-July-2017
      $this->load->library("pagination");

      //Load the models
      $this->load->model("Mdl_users");
      $this->load->model("Mdl_article");
      $this->load->model("Mdl_admin");
      $this->load->model("Mdl_cat");
      $this->load->model("Mdl_booking");
      $this->load->model("Mdl_faq");
      $this->load->model("Mdl_notice");
      
      if($this->is_login):
          $url = site_url("users/u");
          if($this->is_admin):
            $url = site_url("users/admin");
          endif;
          if($this->moderate):
            $url = site_url("moderate/u");
          endif;
        redirect($url);
      else:
          redirect(site_url("users/logout"));
          exit(); 
      endif; 

    }
    

    function index(){

        if($this->is_admin):
            redirect(site_url("admin/u"));
        endif;
        $this->data["meta_title"] = "admin page | {$this->user_name}";
        $this->data["subview"] = "admin/admin_index";
        $this->load->view("_layout_admin",$this->data);
    }
    //---
    
    
    //---------------adminGetNotice
   //----Fri 21 sep 2017
   function adminGetNotice($seg=1){
        $where = array(
            "notice_read " => 0
        );
        $get = $this->Mdl_notice->getNotice($where)->result();
        $num_notice = count($get);

        //---pagination
        $per_page = 10;
        $url = "admin/adminGetNotice";
        $conf = $this->getConfPagin($per_page,$num_notice,$url);
        $this->pagination->initialize($conf);
        $page = $seg;
        $start = ($page-1)*$conf["per_page"];
        $get_all = $this->Mdl_notice->getNotice($where,$conf["per_page"],$start)->result();
        if($num_notice >= $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        $this->o_put["num_notice"] = $num_notice;
        $this->o_put["get_notice"] = $get_all;

        $this->output->set_output(json_encode($this->o_put));
   }

    //-----------------------------------

    function profile(){

        $command = $this->input->post("command");
        $admin_id = $this->input->post("admin_id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $tel = $this->input->post("tel");
        $passwd = $this->make_hash($this->input->post("passwd"));

        $a_data = array(
            "name" => $name,
            "email" => $email,
            "tel" => $tel,
            "last_update" => time(),
        );

        $error = 0;
        $msg = array();
        switch($command):
            case"check_admin":

                $where = array("passwd" => $passwd);
                $get = $this->Mdl_admin->getTB($this->_tb_user,$where);
                $num = count($get->result());

                if($num == 0):
                    $error = 1;
                    $msg["msg"] = "Error : Wrong password!";
                endif;
                $msg["error"] = $error;
                echo json_encode($msg);

            break;
            case"update":
                $where = array("id" => $this->user_id);
                $save = $this->Mdl_admin
                        ->saveTB($this->_tb_user,$a_data,$where);
                if(!$save):
                    echo"Error : code=1";
                else:
                    echo"Success : Data has been save!";
                endif;
            break;
            default:

                $where = array("user_type" => 642,"id" => $this->user_id);
                $get = $this->Mdl_users->getTB($this->_tb_user,$where);
                foreach($get->result() as $row):
                    $name = $row->name;
                    $email = $row->email;
                    $tel = $row->tel;
                    $about = $row->about_user;
                    $u_id = $row->id;
                endforeach;

                    $this->data["subview"] = "admin/user/admin_profile";
                    $this->data["meta_title"] = "{$this->user_name}'s profile";
                    $this->data["admin_id"] = $this->user_id;
                    $this->data["name"] = $name;
                    $this->data["email"] = $email;
                    $this->data["tel"] = $tel;
                    $this->data["about"] = $about;
                    $this->load->view("_layout_admin",$this->data);


            break;
        endswitch;


    }//end of profile

    //--------------------
    //-------- u
    function u(){
        
        
        $this->data["subview"] = "mod/mod_index";
        $this->data["meta_title"] = "{$this->user_type} | welcome {$this->user_name}";

        $this->load->view("_ADMIN_TMP",$this->data);
    }

    
   



}//end of file
