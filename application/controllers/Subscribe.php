<?php 


class Subscribe extends My_Controller{



    function __construct(){


        parent::__construct();
    }


    function index(){
        $this->data["subview"] = "subscribe/_frm_usersub";
        $tmp = "subscribe/sub_TMP";

        $this->load->view($tmp,$this->data);
    }




    function admin(){
        if(!$this->user_is_admin()):
            echo"Not admin ha ha --> ";
            exit();
        endif;
        echo"welcome {$this->user_name}";
    }



}//end of file