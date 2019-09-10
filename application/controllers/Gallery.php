<?php


class Gallery extends MY_Controller{

    protected $user_id;
    protected $user_name;
    protected $_is_login;
    protected $is_admin;

    //---
    protected $moderate;
    public $img_path;
    public $thumb_path;

    public $today;

    public $o_put;
function __construct(){
    parent::__construct();
    $this->load->model("Mdl_gallery");
    

    //--pagination
    $this->load->library("pagination");

    $this->today = date("Y-m-d h:i:s",time());
    $this->user_id = $this->Mdl_gallery->getUserId();
    $this->user_name = $this->Mdl_gallery->getUserName();
    $this->_is_login = $this->session->userdata("is_login");
    $this->moderate = $this->session->userdata("moderate");
    $this->img_path = realpath(APPPATH."../public/image/");
    $this->thumb_path = $this->img_path."/thumb/";

    
    $this->is_admin = $this->session->userdata("is_admin");

}

function index(){
    $url = site_url("gallery");
    if(isset($this->_is_login)):
        $url = site_url("gallery/own");
        if($this->is_admin):
            $url = site_url("gallery/admin");
        endif;
        if($this->moderate):
            $url = site_url("gallery/moderate");
        endif;
        redirect($url);
    endif;

    $cmd = $this->input->post("cmd");
    $pic_id = $this->input->post("pic_id");
    switch($cmd):
        case"showPic":
            $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();
            $this->o_put["get"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        break;
        default:
            $this->data["subview"] = "gallery/index";
            $this->data["meta_title"] = "Gallery version 1.02";
            $this->load->view("_layout_main",$this->data);
        break;
    endswitch;
    
    
    
        
}//end of index

//----public list photo show
function ajaxPubPic(){

    $where = array("allow_public !=" => 0,"admin_allow !=" => 0);
    $get = $this->Mdl_gallery->get($where)->result();
    $num = count($get);

    $per_page = 10;
    $url = "gallery/index";
    $c = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($c);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $per_page;
    $get_all = $this->Mdl_gallery->get($where,$c['per_page'],$start)->result();

    if($num >= $per_page):
        $this->o_put['pagination'] = $this->pagination->create_links();
    endif;
    $this->o_put["get"] = $get_all;

    $this->o_put["num_pic"] = $num;


    $this->output->set_output(json_encode($this->o_put));
}

//-------------------
//-------uGetPhotoList
function uGetPhotoList($seg=1){
    $u_id = $this->user_id;
    if($this->is_admin):
        $u_id = $this->input->post("u_id");
    endif;
    $where = array(
        "user_id" => $u_id
    );
    $get_pic = $this->Mdl_gallery->get($where)->result();
    $num = count($get_pic);
    $this->o_put["num_pic"] = $num;
    $this->o_put["get_pic"] = $get_pic;

    $this->output->set_output(json_encode($this->o_put));
}

//----own section start

function ajaxOwnUpload(){
    $picTitle = $this->input->post("txtPicTitle");
    $pub = $this->input->post("pic_pub");

    
    $conf = array(
    "upload_path" => $this->img_path,
    "allowed_types" => "JPG|jpeg|jpg|gif|x-png|png"
    );
    $this->load->library("upload");
    $this->upload->initialize($conf);
    //    $this->upload->do_upload();
    if(!$this->upload->do_upload("userfile")):
        var_dump($this->upload->display_errors());
    endif;
    $img_data = $this->upload->data();
    //   var_dump($img_data);
    $thumb_name = "_Thumb_".$img_data["file_name"];
    $thumb_conf = array(
    "source_image" => $img_data["full_path"],
    "new_image" => $this->thumb_path.$thumb_name,
    "maintain_ratio" => true,
    "width" => 250,
    "height" => 250
    );
    $this->load->library("image_lib");
    $this->image_lib->initialize($thumb_conf);
    $this->image_lib->resize();
    if(!$this->image_lib->resize()):
        $this->image_lib->display_errors();
    //error resize image
    var_dump($this->image_lib->display_errors());

    endif;

    /*
    Upload and resize is ready
    */
    if(!empty($picTitle)):
        $picTitle = $picTitle;
    else:
        $picTitle = $img_data["file_name"];
    endif;

    $pic_path = $this->img_path."/".$img_data["file_name"];
    $img_add = array(
        "pic_title" => $picTitle,
        "pic_name" => $img_data["file_name"],
        "pic_path" => $img_data["full_path"],
        "thumb_name" => $thumb_name,
        "thumb_path" => $this->thumb_path.$thumb_name,
        "date_add" => $this->today,
        "album_id" => 1,
        "allow_public" => $pub,
        "user_id" => $this->user_id
    );
    $add_me = $this->Mdl_gallery->save($img_add);
    $pic_id = $add_me;
    if(!$add_me):
        echo"Error : Data cannot be save!";
    else:
        $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();
        $this->o_put["img"] = $get;

        $this->output->set_output(json_encode($this->o_put));

    endif;

}


/*
function ajaxOwnGetPic(){
    //--call by ajax using in own
    $where = array(
        "user_id" => $this->user_id
    );
    $get = $this->Mdl_gallery->get($where)->result();
    $num = count($get);

    $url = "gallery/own";
    $per_page = 8;
    $c = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($c);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $per_page;
    $get_all = $this->Mdl_gallery->get($where,$c['per_page'],$start)->result();
    
    if($num >= $per_page):
        $this->o_put['pagination'] = $this->pagination->create_links();
    endif;
    $this->o_put['num_pic'] = $num;
    $this->o_put["get_pic"] = $get_all;

    $this->output->set_output(json_encode($this->o_put));
}
//--comment out on Thu 28 June 2018 as no longer use
*/

function own_getPic($seg=1,$opt=false){
    $url = "gallery/own_getPic/{$seg}";

    $where = "";
    switch($opt):
        case"getPublicPic":
            $where = array(
                "allow_public !=" => 0,
                "admin_allow !=" => 0
            );
        break;
        case"getMyPic":
            $where = array(
                "user_id" => $this->user_id
             );
        break;
        case"not_approve":
            $where = array(
                "user_id" => $this->user_id,
                "admin_allow" => 0
            );
        break;
    endswitch;
    
    $get = $this->Mdl_gallery->get($where)->result();
    $num = count($get);

    $per_page = 5;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $seg;
    $start = ($page-1)*$conf["per_page"];

    $get_all = $this->Mdl_gallery->get($where,$conf["per_page"],$start)->result();
    $this->o_put["get_img"] = $get_all;
    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;
    $this->o_put["num_img"] = $num;
    $this->output->set_output(json_encode($this->o_put));
}

function own(){

    if(!$this->_is_login):
        //--not allow access
        redirect(site_url());
    endif;
    
    $cmd = $this->input->post("cmd");
    $pic_id = $this->input->post("pic_id");
    $pic_title = $this->input->post("pic_title");
    $pub = $this->input->post("public");
    switch($cmd):
        case"getPic":
            //echo"view this pic {$pic_id}";
            $get = $this->Mdl_gallery->userGetPic(array("pic_id" => $pic_id));
            $this->o_put["get"] = $get;
            $this->output->set_output(json_encode($this->o_put));
            
        break;
        case"chPub":
            $update = array("allow_public" => $pub);
            $this->Mdl_gallery->save($update,array("pic_id" => $pic_id));
            $this->o_put["pic_id"] = $pic_id;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"changeTitle":
            $update = array("pic_title" => $pic_title);
            $this->Mdl_gallery->save($update,array("pic_id" => $pic_id));
            $this->o_put["pic_id"] = $pic_id;
            $this->output->set_output(json_encode($this->o_put));

        break;
        default:
            $this->data["subview"] = "gallery/own";
            $this->data["meta_title"] = "{$this->user_name}'s Gallery";
            $this->load->view("_layout_main",$this->data);
        break;
    endswitch;
  
}


//---end of own section date create on tue 12 June 2018
//-------------------------------------------



///---------------------------------------------
//----moderate section create on Mon 11 June 2018

function ajaxGetPic(){

    $get = $this->Mdl_gallery->getPic();
    $num_pic = $this->Mdl_gallery->countPic();

    $per_page = 10;
     

    $backone = site_url("gallery/moderate");
    $conf = array();
    $conf["base_url"] = "#";
    $conf["per_page"] = $per_page;
    $conf["total_rows"] = $num_pic;
    $conf["uri_segment"] = 3;
    $conf['use_page_numbers'] = TRUE;
    $conf["full_tag_open"] = "<ul class='pagination'>";
    $conf["full_tag_close"] = "</ul>";
    $conf["first_tag_open"] = '<li>';
    $conf["first_tag_close"] = '</li>';
    $conf["last_tag_open"] = "<li>";
    $conf["last_tag_close"] = "</li>";
    $conf["next_link"] = "&gt;";
    $conf["next_tag_open"] = "<li>";
    $conf["next_tag_close"] = "</li>";
    $conf["prev_link"] = "&lt;";
    $conf["prev_tag_open"] = "<li>";
    $conf["prev_tag_close"] = "</li>";
    $conf["cur_tag_open"] = "<li class='active'><a href='#'>";
    $conf["cur_tag_close"] = "</a></li>";
    $conf['num_tag_open'] = "<li>";
    $conf['num_tag_close'] = "</li>";
    $conf['num_links'] = 1;
    
    $this->pagination->initialize($conf);
    
    $page = $this->uri->segment(3);
    
    $start = ($page - 1) * $conf["per_page"];


    $get_all = $this->Mdl_gallery->getPic(null,$conf["per_page"],$start);

    if($num_pic >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;
    $this->o_put["num_pic"] = $num_pic;
    $this->o_put["get_pic"] = $get_all;

    $this->output->set_output(json_encode($this->o_put));
}




function mod_index(){
    $this->data["subview"] = "gallery/moderate_index";
    $this->data["meta_title"] = "moderate {$this->user_name}'s page";
    $this->load->view("_layout_moderate",$this->data);
}


/*
//--comment this method out as no longer use 
//--Fri-29-June-2018
//--mod get pub pic
function mod_getPubPic(){
    $url = "gallery/mod_getPubPic";

    $pub = array("allow_public !="=>0);
    $get = $this->Mdl_gallery->get($pub)->result();
    $num = count($get);

    $per_page = 10;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $this->uri->segment(3);
    $start = ($page-1)*$conf["per_page"];

    $get_all = $this->Mdl_gallery->get($pub,$conf["per_page"],$start)->result();
    $this->o_put["get_img"] = $get_all;
    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;
    $this->o_put["num_img"] = $num;

    $this->output->set_output(json_encode($this->o_put));
}

function mod_approvePic($seg=1,$opt=false){

    $url = "gallery/mod_approvePic/{$seg}";
    
    $where = "";
    switch($opt):
        //--get what the option
        case"not_approve":
            $where = array("admin_allow" => 0); 
        break;
    endswitch;

    $get = $this->Mdl_gallery->get($where)->result();
    $num = count($get);

    //--pagination
    $per_page = 5;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $seg;
    $start = ($page-1)*$conf["per_page"];

    $get_all = $this->Mdl_gallery->get($where,$conf["per_page"],$start)->result();
    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;
    $this->o_put["get_img"] = $get_all;
    $this->o_put["num_img"] = $num;
    //$this->o_put["where"] = $where;

    $this->output->set_output(json_encode($this->o_put));
}

//---end of code comment out

*/


function mod_getPic($seg=1,$opt=false){
    

    $url = "gallery/mod_getPic";//--global set url

    $where = "";

    switch($opt):
        case"getMyPic":
            $where = array(
                "user_id" => $this->user_id
            );
        break;
        case"getApprovePic":
            $where = array(
                "admin_allow" => 0
            );
        break;
        case"getPublicPic":
            $where = array(
                "allow_public !=" => 0
            );
        break;
    endswitch;
    

    $get = $this->Mdl_gallery->get($where)->result();
    $num = count($get);

    $per_page = 10;
    $conf = $this->getConfPagin($per_page,$num,$url);
    $this->pagination->initialize($conf);
    $page = $seg;
    $start = ($page-1)*$conf["per_page"];

    $get_all = $this->Mdl_gallery->get($where,$conf["per_page"],$start)->result();

    if($num >= $per_page):
        $this->o_put["pagination"] = $this->pagination->create_links();
    endif;

    $this->o_put["get_img"] = $get_all;
    $this->o_put["num_img"] = $num;
    $this->output->set_output(json_encode($this->o_put));
}
function moderate(){
    
    !isset($this->moderate)?redirect(site_url()):"default";
    $cmd = $this->input->post("cmd");
    //$where = $this->input->post("where");
    $pic_id = $this->input->post("pic_id");
    $pic_title = $this->input->post("pic_title");
    $pic_pub = $this->input->post("pic_pub");
    $admin_allow = $this->input->post("admin_allow");

    switch($cmd):
        case"edit":
            $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();
            $this->o_put["get"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"updateTitle":
            $up_data = array("pic_title" => $pic_title);
            $s = $this->Mdl_gallery->save($up_data,array("pic_id" => $pic_id));
            $this->o_put["pic_id"] = $s;
            $this->o_put["msg"] = "Success : image {$s}'s Title has been updated";
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"updatePub":
            //echo"the pic id {$pic_id} value {$pic_pub}";

            
            $up_data = array("allow_public" => $pic_pub);
            $s = $this->Mdl_gallery->save($up_data,array("pic_id" => $pic_id));
            $this->o_put["msg"] = "Success : image {$s}'s show status has been updated";
            $this->o_put["pic_id"] = $s;
            $this->output->set_output(json_encode($this->o_put));

            
        break;
        case"updateAllow":
            $up_data = array("admin_allow" => $admin_allow);
            $s = $this->Mdl_gallery->save($up_data,array("pic_id" => $pic_id));

            $this->o_put["msg"] = "Success : image {$s}'s Allow status has been updated";
            $this->o_put["pic_id"] = $s;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"delPic":
            //--not test yet
            //echo"the pic id to del is {$pic_id}";
            
            
            $b_pic = "NO Pic";
            $s_pic = "No Pic";

            $path = $this->img_path;
            $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();

            foreach($get as $row):
                $b_pic = "{$path}/{$row->pic_name}";
                $s_pic = "{$path}/thumb/{$row->thumb_name}";
                $pic_id = $row->pic_id;
            endforeach;
            $this->Mdl_gallery->del(array("pic_id" => $pic_id));
            unlink($s_pic);
            unlink($b_pic);
            echo"The photo has deleted!";
            
        break;
        default:
            $this->mod_index();
        break;
    endswitch;
}


//----End of moderate section



//-----------------
//--Add this line Wed 9/5/18

function ajaxDoUpload(){
    //--get the input from form.
    
    $picTitle = $this->input->post("txtPicTitle");
    $pub = $this->input->post("pic_pub");


    $conf = array(
                "upload_path" => $this->img_path,
                "allowed_types" => "JPG|jpeg|jpg|gif|x-png|png"
    );
    $this->load->library("upload");
    $this->upload->initialize($conf);
    //    $this->upload->do_upload();
    if(!$this->upload->do_upload("userfile")):
        var_dump($this->upload->display_errors());
    endif;
    $img_data = $this->upload->data();
    //   var_dump($img_data);
    $thumb_name = "_Thumb_".$img_data["file_name"];
    $thumb_conf = array(
        "source_image" => $img_data["full_path"],
        "new_image" => $this->thumb_path.$thumb_name,
        "maintain_ratio" => true,
        "width" => 250,
        "height" => 250
    );
        $this->load->library("image_lib");
        $this->image_lib->initialize($thumb_conf);
        $this->image_lib->resize();
        if(!$this->image_lib->resize()):
            $this->image_lib->display_errors();
            //error resize image
            var_dump($this->image_lib->display_errors());

        endif;

        /*
            Upload and resize is ready
        */
    
       
    $pic_path = $this->img_path."/".$img_data["file_name"];
    $img_add = array(
        "pic_title" => $picTitle,
        "pic_name" => $img_data["file_name"],
        "pic_path" => $img_data["full_path"],
        "thumb_name" => $thumb_name,
        "thumb_path" => $this->thumb_path.$thumb_name,
        "date_add" => $this->today,
        "album_id" => 1,
        "allow_public" => $pub,
        "admin_allow" => 1,
        "user_id" => $this->user_id
    );

    $add_me = $this->Mdl_gallery->save($img_add);
    $pic_id = $add_me;
    
    $img = "Loading...";
    if(!$add_me):
        $img = "<h3>Error : 
                    <span class='label label-danger'>DataBase Error please try again later</span>
                </h3>
                ";
    else:
        $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();
        $img = $get;
    endif;
    $this->o_put['img'] = $img;
    $this->output->set_output(json_encode($this->o_put));
    
}

function admin(){
    if(!$this->is_admin):
        redirect(site_url("gallery"));
    endif;
    //---adding this on Thu 7 June 2018
    $cmd = $this->input->post("cmd");
    $pic_id = $this->input->post("pic_id");
    $pic_title = $this->input->post("pic_title");
    $public = $this->input->post("pic_pub");
    $allow = $this->input->post("allow");
    switch($cmd):
        case"setPub":
            $pic_update = array("allow_public" => $public);
            $this->Mdl_gallery->save($pic_update,array("pic_id" => $pic_id));
            echo 1;
        break;
        case"setAllow":
            $pic_update = array("admin_allow" => $allow);
            $this->Mdl_gallery->save($pic_update,array("pic_id" => $pic_id));
            echo 1;
        break;
        case"setTitle":
            $pic_update = array("pic_title" => $pic_title);
            $this->Mdl_gallery->save($pic_update,array("pic_id" => $pic_id));
            echo 1;
        break;
        case"delete":
            $b_pic = "NO Pic";
            $s_pic = "No Pic";

            $path = $this->img_path;
            $get = $this->Mdl_gallery->get(array("pic_id" => $pic_id))->result();

            foreach($get as $row):
                $b_pic = "{$path}/{$row->pic_name}";
                $s_pic = "{$path}/thumb/{$row->thumb_name}";
                $pic_id = $row->pic_id;
            endforeach;
            $this->Mdl_gallery->del(array("pic_id" => $pic_id));
            unlink($s_pic);
            unlink($b_pic);
            echo"The photo has deleted!";
        break;
        case"editPic":
            //echo"I will edit the id {$pic_id} now";
            $get = $this->Mdl_gallery->getPic(array("pic_id" => $pic_id));
            $this->o_put["get_pic"] = $get;

            $this->output->set_output(json_encode($this->o_put));
        break;
        default:
            $this->data["meta_title"] = "{$this->user_name}'s gallery admin";
            $this->data["subview"] = "gallery/admin_main";
            $this->load->view("_layout_admin",$this->data);
        break;
    endswitch;
}
//-------
//--End of admin


}//end of the file
