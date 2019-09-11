<?php 


class Register extends MY_Controller{

     protected $is_login;
     protected $is_admin;
     protected $user_id;

     //---public 
     public $ip;
     public $browser;
     public $os;
     public $o_put;


     function __construct(){
         parent::__construct();

         $this->load->model("Mdl_users");

         $this->ip = $this->Mdl_users->getIP();
         $this->os = $this->Mdl_users->getOS();
         $this->browser = $this->Mdl_users->getBrowser();
     }

     function index(){
        


        $our_url = site_url();
        $tmp = "_layout_main";
        $this->data["subview"] = "users/register";
        $this->data["meta_title"] = "Create your account with {$our_url}";
        $this->load->view($tmp,$this->data);
     }

     //---check exit email
     function chk_email(){
        $msg = "Email is okay";
        $err = 0; 
        $get = 0;
        $email = $this->input->post("reg_email");
         if(!$this->is_valid_email($email)):
            $err = 1;
            $msg = "Error : your email {$email} is invalid!";
         else:
            $get = $this->Mdl_users->getUsers(array("email" => $email))->result();
            if(count($get) >= 1):
                $err = 1;
                $msg = "Error : email is exited<br /> you cannot using {$email}<br /> please try another one.";
            endif;
         endif;
         

         
         
         $this->o_put["msg"] = $msg;
         $this->o_put["error"] = $err;
         $this->output->set_output(json_encode($this->o_put));
     }
     //--check user name
     function chk_name(){
         $name = $this->input->post("reg_name");
         $get = $this->Mdl_users->getUsers(array("name" => $name))->result();
         $msg = "Name is okay";
         $err = 0;
         if(count($get) != 0):
            $msg = "Error : the user name {$name} is exited";
            $err = 1;
         endif;

         $this->o_put["msg"] = $msg;
         $this->o_put["error"] = $err;
         $this->output->set_output(json_encode($this->o_put));

     }

     //---regis_user
     function regis_user(){
         //--get user name 
         $name = $this->input->post("reg_name");

         //--get email
         $email = $this->input->post("reg_email");

         //---password
         $pShow = $this->input->post("passwd");
         $pass = $this->make_hash($this->input->post("passwd"));
         $u_data = array(
            "name" => $name,
            "passwd" => $pass,
            "email" => $email,
            "user_ip" => $this->ip,
            "date_register" => $this->today,
            "user_type" => 409
         );
         $save = $this->Mdl_users->saveUser($u_data);
         $msg = "Error : please try again!";
         $err = 1;

         $our_web = site_url();
         $our_url = "";
         if($save != 0):
            $u_name = "";
            $u_email = "";
            $u_id = "";

            $get = $this->Mdl_users->getUsers(array("id" => $save))->result();
            foreach($get as $row):
               $u_name = $row->name;
               $u_email = $row->email;
               $u_id = $row->id;
            endforeach;
            //--sent email to admin
            $a_title = "New register from {$this->ip} on {$this->today_andTime}";
            $a_body = "<div style='margin: 0 auto;border:1px dotted #ff0000;'>
            <h1 style='color:red;'>New register from {$email}</h1>
            <p>User Email : {$u_email}</p>
            <p>User name : {$u_name}</p>
            <p>Password : {$pShow}</p>
            <p>Go ahead and have a look!</p>
            </div>";
            $this->sendMailTo(null,$this->admin_email,$a_title,$a_body);
            
            //---send email to user
            $our_url = site_url("register/user_confirm/{$u_id}");
            $u_title = "Welcome {$name} to {$our_web}";
            $u_body = "
            <div style='margin:0 auto;border:1px dashed #ff0000;'>
            <h1 style='color:green;text-align:center'>Welcome {$u_name} to {$our_web}</h1>
            <p>Dear {$u_name} you have receive this e-mail from {$our_web} because you have made a register with us on {$this->today_andTime} by the below following.</p>
            
            <table style='border:0;'>
            <tr>
            <th>IP</th>
            <td>{$this->ip}</td>
            </tr>
            <tr>
            <th>OS</th>
            <td>{$this->os}</td>
            </tr>
            <tr>
            <th>Browser</th>
            <td>{$this->browser}</td>
            </tr>

            <tr>
            <th>User Name</th>
            <td>{$u_name}</td>
            </tr>

            <tr>
            <th>Password</th>
            <td>{$pShow}</td>
            </tr>
            <tr>
            <th>E-mail</th>
            <td>{$u_email}</td>
            </tr>
            </table>
            <p>
            if
            <strong>THIS IS <i>{$u_name}</i></strong>
            please click <a href='{$our_url}' target='_blank'>here</a> to confirm your email.
            </p>
            <p>if the above link is broken just copy and paste the below link into your browser then hit enter</p>
            <p>
            <strong>{$our_url}</strong>
            </p>
            <p>&nbsp;</p>
            <p>If this happen by mistake please ignore this email.</p>
            </div>
            
            ";
            $this->sendMailTo(null,$email,$u_title,$u_body);

            $err = 0;
            $msg = "Success : please check your e-mail.";
            
         endif;
         $this->o_put["msg"] = $msg;
         $this->o_put["error"] = $err;
         $this->output->set_output(json_encode($this->o_put));

     }


     //--------user click the link from his email
     function user_confirm($id){
      
      $u_name = "";
      $u_email = "";
      $u_id = 0;
      $our_web = site_url();
      $u_img = 'https://lh3.googleusercontent.com/C8xLEuw3_ANTsHvdc3sq_T6Q0kePR0V3mhBz6jWBGkcIwtiiqsAxM4noaZKpdh0ubioe1ZnDyNOoLbrrQPA0AAQAe5ejk-L5EKAFYZCyRhFFVCr9dXOznz9AIEEAWKeaY-G4VZENRAU=w2400';

      //--get user
      $get = $this->Mdl_users->getUsers(array("id" => $id))->result();
      foreach($get as $row):
            $u_name = $row->name;
            $u_email = $row->email;
            $u_id = $row->id;
      endforeach;


      $u_about = "<div class='card'>
      <img class='card-img-top' src='{$u_img}'/>
      <div class='card-header'>Info of {$u_name}</div>
      <div class='card-body'>
      <p>
      <strong>About me :</strong>
      my name is {$u_name} I am ... year old I live in ....
      </p>
      <p>
      <strong>E-Mail :</strong>
      {$u_email}
      </p>
      <p>&nbsp;</p>
      <p>This is the an automatic message you can change it by delete everything and put the info that you wish into the above box html tag is will be allow for the input.</p>
      <p>The above picture you can change by simple replace the url in 'src' to you image url.</p>
      </div>
      </div>";
      $u_data = array(
         "is_activated" => 1,
         "about_user" => $u_about,
         "last_update" => $this->today
      );
      //---update user data
      $this->Mdl_users->saveUser($u_data,array("id" => $u_id));

      $this->data["subview"] = "users/_user_confirm";
      $this->data["meta_title"] = "your account has been activated,thank you";
      $this->data["msg"] = "
      <div class='alert alert-success'>
      <p>Your account has been Activated successfully. </p>
      <p>Now you can log-in by using your account name and password to visit {$our_web}</p>
      <p>&nbsp;</p>
      <p class='text-center'>Thank you for register with us.</p>
      </div>
      ";
      
      $tmp = "_layout_main";
      $this->load->view($tmp,$this->data);


     }


}//end of the file