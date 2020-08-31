<?php
/*
* class Users last edit on Sat-3-Sep-2016 
*
*/
class Mdl_login extends MY_Model{


    protected $_tb_user = "users";
    protected $_order_by;

    //add $_tb_user on Thu 15 June 2017

    public $ip;

    function __construct() {
        parent::__construct();
 
        $this->ip = $this->getIP();
   }


    function find($where){
        $get = $this->db
                    ->where($where)
                    ->get($this->_tb_user);
        return $get;
    }


    function useWebLogin(){
        $action_id = $this->getEl("action_id");
        $email = $this->getEl("email");
        $passwd = $this->make_hash($this->getEl("passwd"));

        $msg = "";
        $err = 0;
        $url = ""; 

        $user = "";
        $user_name = "";
        $user_id = 0;

        if(!$action_id):
            $err = 1;
            $msg = "Error : something went wrong CODE : form ERROR";
        else:
        $get = $this->find(array(
            "email" => $email,
            "passwd" => $passwd
        ))->result();
            if(count($get) == 0):
                $msg = "Error : we cannot find your user account {$email}";
                $err = 1;
            else:
                foreach($get as $row):
                    $email = $row->email;
                    $user_name = $row->name;
                    $user_id = $row->id;
                    
                endforeach;
                $user = $this->_login_SET_USER($email);
                $url = $user["url"];
                $msg = "welcome {$user_name} redirect to {$url}";
            endif; 
        endif;

        
        $r_data = array(
            "msg" => $msg,
            "url" => $url
        );        
        return $r_data;
    }

    function _login_SET_USER($email){
        $get = $this->find(array("email" => $email))->result();
        $url = "";
        $is_admin = "";
        $user_type_text = "Member";
        $moderate = "";

        $user_name = "";
        $user_id = "";
        $user_email = "";

        $url = "";
        foreach($get as $row):
            if($row->user_type == 642):
                $is_admin = true;
                $user_type_text = "Admin";
            endif;
            if($row->moderate != 0):
                $moderate = true;
                $user_type_text = "Moderate";
            endif;
            
            $user_name = $row->name;
            $user_id = $row->id;
            $user_email = $row->email;
        endforeach;

        //-- update user login
            $up_data = array(
                "last_login" => $this->today_andTime,
                "user_ip" => $this->ip
            );
            $this->SAVE($up_data,$this->_tb_user,array("id" => $user_id));
        /*
         * set SESSION
         */
        $u_data = array(
                "is_login" => true,
                "is_admin" => $is_admin,
                "moderate" => $moderate,
                "user_type_text" => $user_type_text,
                "user_name" => $user_name,
                "user_email" => $user_email,
                "user_id" => $user_id
            );
        $this->session->set_userdata($u_data);
        //---
        if($is_admin == true):
            $url = site_url("admin/u");
        elseif($moderate == true):
            $url = site_url("mod/u");
        else:
            $url = site_url("users/u");
        endif;

        $r_data = array(
            "url" => $url
        );
        return $r_data;
        
    }

    /*
     * google login
     *
     */
    function useGoogleService(){
        $email = $this->getEl("gmail");
        $name = $this->getEl("google_name");
        $url = "";
        $msg = "";
        $this->_google_save();
        $u_data = $this->_login_SET_USER($email);
        $url = $u_data["url"];
        $msg = "Welcome {$name}";

        $r_data = array(
            "url" => $url,
            "msg" => $msg
        );
        return $r_data;

    }


    function _google_save(){
        $email = $this->getEl("gmail");
        $name = $this->getEl("google_name");
        //-- check if exited user
        $chk = $this->find(array("name" => $name,"email" => $email))->result();

        $user_name = "";
        $user_id = "";
        $user_email = "";

        if(count($chk) == 0):
            //--- create new
            $user_name = $name;
            $nP = $this->make_hash($name);

            $about_user = "<div class='card'>
    <div class='card-header'>
        <h1 class='text-center'>Dear {$name}</h1>
    </div>
    <div class='card-body'>
        <p>your account has created by your google account while you are using your google account to sign-in on {$this->today_andTime} as the detail below</p>
        <div class='table-responsive'>
            <table class='table table-striped'>
                <tr>
                    <th>Name</th>
                    <td>{$name}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>{$name}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{$email}</td>
                </tr>
            </table>
        </div>
        <p>please feel free to change your info as you need.</p>
    </div>
</div>";
            $u_new_data = array(
                "name" => $name,
                "email" => $email,
                "passwd" => $nP,
                "about_user" => $about_user,
                "user_ip" => $this->ip,
                "user_type" => 409,
                "is_activated" => true
            );
            $this->SAVE($u_new_data,$this->_tb_user);
        else:
            //-- update
            foreach($chk as $row):
                $user_name = $row->name;
                $user_email = $row->email;
                $user_id = $row->id;
            endforeach; 
                $update_user = array(
                    "user_ip" => $this->ip,
                    "last_login" => $this->today_andTime
                );
                $this->SAVE($update_user,$this->_tb_user,array("id" => $user_id));
        endif;
    }
    /*
     * End of google login service
     *
     */


    /*
     * facebook login for see-southern
     *
     */ 
    function useFacebookLogin(){
                
        $fb_email = $this->getEl("fb_email");
        $fb_name = $this->getEl("fb_name");
        $action_id = $this->getEl("action_id");
        if(!$fb_email):
            $fb_email = $action_id;
        endif;
        $msg = "";
        $url = "";
        $this->_facebook_save();

        $u_data = $this->_login_SET_USER($fb_email);
        $url = $u_data["url"];
        $msg = "Welcome {$fb_name}";

        $r_data = array(
            "url" => $url,
            "msg" => $msg
        );
        return $r_data;

    }


    function _facebook_save(){
        $action_id = $this->getEl("action_id");
        $fb_name = $this->getEl("fb_name"); 
        $fb_email = $this->getEl("fb_email"); 

        $our_web = site_url();
        $about_user = "<div class='card'>
    <div class='card-header'>
       <h2>
         dear {$fb_name}      
      </h2> 
    </div>
     <div class='card-body'>
        <p>your account has created while you were login with your facebook account to {$our_web} on {$this->today_andTime} by the following detail</p>
        <p class='pt-2'>&nbsp;</p>

        <div class='table-responsive'>
            <table class='table table-bordered'>
                <tr>
                    <th>User name</th>
                    <td>{$fb_name}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>{$fb_name}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{$fb_email}</td>
                </tr>
            </table>
        </div>
        <p class='pt-3'>&nbsp;</p>
        <p>you can edit your profile if you want to</p>
    </div>
</div>";

        if(!$fb_email):
            $fb_email = $action_id;
        endif;


        $nP = $this->make_hash($fb_name);
        $u_data = array(
            "name" => $fb_name,
            "passwd" => $nP,
            "email" => $fb_email,
            "about_user" => $about_user,
            "user_ip" => $this->ip,
            "is_activated" => true,
            "user_type" => 409
        );

        $get = $this->find(array(
            "email" => $fb_email,
            "name" => $fb_name)
        )->result();

        $u_id = "";
        if(count($get) == 0):
            $this->SAVE($u_data,$this->_tb_user);
        else:
        foreach($get as $row):
            $u_id = $row->id;
        endforeach; 
        $up_data = array(
            "user_ip" => $this->ip,
            "last_login" => $this->today_andTime
        );
        $this->SAVE($up_data,$this->_tb_user,array("id" => $u_id));
        endif;



    }

    /*
     * END of facebook login 12-Apr-2020
     *
     */


}//end class

