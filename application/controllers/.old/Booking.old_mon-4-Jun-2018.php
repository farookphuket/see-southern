<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Booking extends MY_Controller{
    protected $user_id;
    protected $user_name;
    protected $is_login;
    protected $is_admin;

    protected $moderate;
    /*
       use table to join
    */

    //set the table on Sat 22 Jul 2017
    //field name bk_id bk_name bk_email bk_date_conf
    protected $_tb_book = "tbl_booking";
    protected $_tb_notic = "tbl_notification";

    public $today;
    public $o_put;

    public $ip;
    public $os;
    public $browser;

function __construct() {
        parent::__construct();        
		//$this->is_admin = $this->session->userdata("is_admin");
        $this->is_login = $this->user_is_login();
        $this->user_id = $this->session->userdata("user_id");
        $this->is_admin = $this->user_is_admin();
        $this->user_name = $this->session->userdata("user_name");
        $this->moderate = $this->session->userdata("moderate");

//Load the library..
        $this->load->model("Mdl_booking");
        $this->load->model("Mdl_tour");
        $this->load->library("pagination");
        $this->today = date("Y-m-d",time());

        $this->ip = $this->Mdl_booking->getIP();
        $this->os = $this->Mdl_booking->getOS();
        $this->browser = $this->Mdl_booking->getBrowser();
}
function index(){
    if($this->is_login):
        $url = site_url("booking/own");
        if($this->is_admin):
            $url = site_url("booking/admin");
        endif;
        redirect($url);
    endif;

    //--will show list of tour program in form
    //---Mon 14 May 2018
    $get = $this->Mdl_tour->getTour()->result();
    $this->data["get_tour"] = $get;
    $this->data["num_tour"] = count($get);


    $this->data["today"] = $this->today;
    $this->data["subview"] = "booking/book_index";
    $this->load->view("_layout_main",$this->data);
}//end of index

function ajaxGetTour(){
    //--set value for the book ticket
    //--mon 14 may 2018
    $t_id = $this->input->post("t_id");
    $where = array("t_id" => $t_id);
    $get = $this->Mdl_tour->getTour($where)->result();
    $this->o_put["get"] = $get;
    $this->output->set_output(json_encode($this->o_put));
}

//--------checkTick mon 28 May 2018
function checkTicket(){
    $t_email = $this->input->post("tk_email",true);

    $where = array("bk_email" => $t_email);
    $get = $this->Mdl_booking->getBooking($where)->result();
    $num = count($get);

    //--set output
    $this->o_put["num_book"] = $num;
    $this->o_put["get_book"] = $get;

    //--sent it to render
    $this->output->set_output(json_encode($this->o_put));

}

//---end checkTick

//check valid mon 19 mar 2018
    function check_booking(){
        $cmd = $this->input->post("cmd");
        $bk_email = $this->input->post("bk_email",true);
        $go_day =  $this->input->post("go_day");
        $go_day = date("Y-m-d",strtotime($go_day));
        
        $msg = "";
        $err = 0;
        switch($cmd):
            case"check_email":
                if(!$this->is_valid_email($bk_email)):
                    $msg = "Error : {$bk_email} is invalid!";
                    $err = 1;
                endif;
                $this->o_put["err"] = $err;
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
            case"pick_date":
                if($go_day <= $this->today):
                    $err = 1;
                    $msg = "Error : you have to do booking one day in advance!";
                endif;
                $this->o_put["err"] = $err;
                $this->o_put["msg"] = $msg;
                $this->output->set_output(json_encode($this->o_put));
            break;
        endswitch;

    }

//----------------
    function save_booking(){
        //echo"booking is save";
        $err = 0;
        $msg = "";
        
        $go_day = $this->input->post("go_day");
        $bk_ip = $this->input->post("bk_ip");
        $bk_name = $this->input->post("bk_name");
        $bk_email = $this->input->post("bk_email");
        $bk_num = $this->input->post("bk_num");
        $bk_more = $this->input->post("bk_more");
        
        //--choose tour program
        $choose_tour = $this->input->post("sel_tour");
        
        //--get the input hidden from post
        $h_full_price = $this->input->post("h_full_price");
        $h_min_price = $this->input->post("h_min_price");
        $tour_name = $this->input->post("tour_name");
        
        //--calculate price
        $price_per_person = $h_full_price;
        $pay_full_price = $h_full_price*$bk_num;
        $pay_min_price = $h_min_price*$bk_num;
        

        $go_day = date("Y-m-d",strtotime($go_day));
        if($go_day <= $this->today):
            $err = 1;
            $msg = "Error : you have to choose at least one day in advance!";
        endif;

        //--check if this userIP do the same name or email on booking
        //--name and e-mail have to be unique
        $where_book = array(
            "bk_ip" => $bk_ip,
            "bk_date" => $this->today,
            "bk_email" => $bk_email
        );
        $get_book = $this->Mdl_booking->getBooking($where_book)->result();
        if(count($get_book) != 0):
            $err = 1;
            $msg = "Error : we are apologize ,but your email {$bk_email} has been used.";
        endif;

        //--prepare data to save
        //--need a moderate from admin to change booking status
       

        $paypal_full_price = "
        <a href='https://www.paypal.me/farookphuket/{$pay_full_price}' target='_blank'>{$pay_full_price}</a>";
        $paypal_min_price = "
        <a href='https://www.paypal.me/farookphuket/{$pay_min_price}' target='_blank'>{$pay_min_price}</a>";

        $im_scb = site_url("public/image/promptpaySCB.jpg");

        $im_ks = site_url("public/image/promtpayKBank.jpg");

        $im_true = site_url("public/image/TrueWallet996520237.jpg");

        $total_price = $price_per_person*$bk_num;//sum the full price

        $book_data = array(
            "bk_ip" => $bk_ip,
            "price_of_deposite" => $pay_min_price,
            "bk_more" => $bk_more,
            "bk_num" => $bk_num,
            "bk_name" => $bk_name,
            "bk_email" => $bk_email,
            "tour_id" => $choose_tour,
            "tour_name" => $tour_name,
            "going_date" => $go_day,
            "bk_date" => $this->today,
            "price_per_one" => $price_per_person,
            "price_total" => $pay_full_price
        );
        if($err != 1):
            $this->Mdl_booking->save_booking($book_data);
            $msg = "
                <div class='row'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h2>Booking is success!</h2>
                        </div>
                        <div class='panel-body'>
                            <h3>Congratulation! <span class='label label-success'>{$bk_name}</span>&nbsp; your booking has been save</h3>
                            <h4>
                                please note that your booking will 
                                &nbsp;<span class='label label-danger'>
                                    not be confirm 
                                </span>&nbsp;
                                until you make payment with one of the below method 
                            </h4>
                        </div>
                    </div>
                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <tr>
                            <th>Paypal</th>
                            <td>
                                <h4>
                                Pay Full Price 
                                <span class='label label-warning'>
                                {$paypal_full_price}
                                </span>&nbsp; to paypal.
                                </h4>
                                <h4>
                                Pay Deposite 
                                <span class='label label-warning'>
                                {$paypal_min_price}
                                </span>&nbsp; to paypal.
                                </h4>
                            </td>
                            </tr>
                            <tr>
                                <th>SCB Bank</th>
                                <td> 
                                    <h4>pay {$pay_full_price} or Deposite {$pay_min_price}</h4>
                                    <img src='$im_scb'>
                                </td>
                            </tr>
                            <tr>
                                <th>K Bank</th>
                                <td>
                                    <h4>pay {$pay_full_price} or Deposite {$pay_min_price}</h4>
                                    <img src='$im_ks'>
                                </td>
                            </tr>
                            <tr>
                                <th>7-eleven</th>
                                <td>
                                    <h4>pay {$pay_full_price} or Deposite {$pay_min_price}</h4>
                                    <img src='$im_true'>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            ";

            //--save notification for admin
            $note_title = "New booking from {$bk_ip} on {$this->today}";
            $note_body = "The user ip {$bk_ip} has booking on {$this->today}";
            $notic_data = array(
                "notice_title" => $note_title,
                "notice_body" => $note_body,
                "notice_ip" => $bk_ip,
                "by_user_name" => $bk_name,
                "notice_date" => date("Y-m-d h:i:s",time())
            );
            $this->Mdl_booking->saveTB($this->_tb_notic,$notic_data);
            //--send notification to admin
            //--end notification
        endif;
        
        
        //the total


        $this->o_put["err"] = $err;
        $this->o_put["msg"] = $msg;
        $this->output->set_output(json_encode($this->o_put));
    }


//-----------------

function own(){
    if(!$this->is_login):
        redirect(site_url("users/logout"));
    endif;
    if($this->moderate):
        redirect(site_url("booking/moderate"));
    endif;
    echo"Hell {$this->user_name}";
    
}

function summary(){
    $data = array();

    //--all booking
    $all_book = $this->Mdl_booking->getBooking()->result();
    $data["book_all"] = count($all_book);

    //--confirm booking
    $b_conf = $this->Mdl_booking->getBooking(array("bk_confirm !=" => 0))->result();
    $data["confirm"] = count($b_conf);

    //--not confirm
    $not_conf = $this->Mdl_booking->getBooking(array("bk_confirm" =>0))->result();
    $data["not_confirm"] = count($not_conf);

    //---booking has complete
    $comp = $this->Mdl_booking->getBooking(array("mark_as_done !=" => 0))->result();
    $data["complete"] = count($comp);

    $not_comp = $this->Mdl_booking->getBooking(array("mark_as_done " => 0))->result();
    $data["not_complete"] = count($not_comp);

    //--sent data call by ajax
    $this->output->set_output(json_encode($data));
    
    
    return $data;
}


//--Moderate section
function moderate(){
    $cmd = $this->input->post("cmd");
    $bk_id = $this->input->post("bk_id");

    //-try short hand sat 12 may 2018
    //if $bk_conf not equal to $_POST['bk_conf'] then $bk_conf equal to 0
    $bk_conf=($bk_conf = $this->input->post("bk_confirm"))?true:0;
    //($bk_conf == $this->input->post("bk_confirm"))?1:0;
    
    //$on_tour = $this->input->post("has_done");
    $on_tour = ($on_tour =$this->input->post("has_done"))?2:0;
    $conf_day = date("Y-m-d h:i:s",time());
    
    $book_data = array(
        "bk_confirm" => $bk_conf,
        "mark_as_done" => $on_tour,
        "bk_date_conf" => $conf_day,
        "conf_ip" => $this->ip,
        "conf_id" => $this->user_id,
        "conf_name" => $this->user_name
    );

    //--switch
    switch($cmd):
        case"edit":
            $get = $this->Mdl_booking->getBooking(array("bk_id" => $bk_id))->result();
            $this->o_put["get"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"save":
            $save = $this->Mdl_booking->save_booking($book_data,array("bk_id" => $bk_id));
            
            
            
            
            $this->o_put["msg"] = "<h4>
            <span class='label-success'>
            Success : data has been save
            </span></h4>
            ";

            $this->output->set_output(json_encode($this->o_put));

        break;
        default:
            $this->data["subview"] = "booking/book_moderate";
            $this->data["meta_title"] = "Moderator {$this->user_name}";
            $get_all = $this->Mdl_booking->getBooking()->result();
            $num_book = count($get_all);

            //--pagination
            $per_page = 4;
            $page = $this->input->get("page");
            if(!$page):
                $page = $per_page;
            else:
                $page = $page;
            endif;

            $conf = array();
            $conf["base_url"] = site_url("booking/moderate");
            $conf["per_page"] = $per_page;
            $conf["total_rows"] = $num_book;
            $conf["full_tag_open"] = "<ul class='pagination'><li>";
            $conf["full_tag_close"] = "</li></ul>";
            $this->pagination->initialize($conf);
            $get_book = $this->Mdl_booking->getBooking(null,$conf["per_page"],$this->uri->segment(3))->result();

            $this->data["get_booking"] = $get_book;
            $this->data["num_book"] = $num_book;
            $this->data["per_page"] = $per_page;

            

            $this->load->view("_layout_moderate",$this->data);
        break;
    endswitch;

    //--end switch
}

//---end of moderate
//--------Admin section-------
function admin(){
    if(!$this->is_admin):
        redirect(site_url("users/logout"));
    endif;
    $cmd = $this->input->post("cmd");
    $bk_id = $this->input->post("bk_id");
    $bk_name = $this->input->post("bk_name");
    $bk_email = $this->input->post("bk_email");
    $bk_more = $this->input->post("bk_more");
    $bk_depo = $this->input->post("deposite");
    $bk_num = $this->input->post("bk_num");
    $price_per_one = $this->input->post("price_per_one");
    //$total_price = $price_per_one*3950;
    $bk_status = $this->input->post("bk_status");
    $onboard = $this->input->post("onboard");
    
    
    $pay_total = $price_per_one*$bk_num;
    $collect_more = $pay_total-$bk_depo;
    $conf_time = date("Y-m-d h:i:s",time());
    $book_data = array(
        "bk_name" => $bk_name,
        "price_of_deposite" => $bk_depo,
        "bk_confirm" => $bk_status,
        "price_per_one" => $price_per_one,
        "price_total" => $pay_total,
        "collect_more" => $collect_more,
        "bk_date_conf" => $conf_time,
        "bk_more" => $bk_more,
        "mark_as_done" => $onboard
    );

    switch($cmd):

        case"edit":
            $get = $this->Mdl_booking->getBooking(array("bk_id" => $bk_id))->result();
            $this->o_put["get_booking"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        break;
        case"update":
            $this->Mdl_booking->save_booking($book_data,array("bk_id" => $bk_id));
            
            echo"Data has been save!";
        break;
        case"delete":
            //-- admin delete booking
            //echo"This is the delete {$bk_id}";
            $this->Mdl_booking->delBooking(array("bk_id" => $bk_id));
            echo"The booking id {$bk_id} has been deleted!"; 
         break;
        default:
            $this->data["subview"] = "admin/booking/book_index";
            $this->data["meta_title"] = "List all booking by {$this->user_name}";
            $get_all = $this->Mdl_booking->getBooking()->result();
            $num_all_booking = count($get_all);

            $page = $this->input->get("page");
            if(!$page):
                $page = 0;
            endif;
            $per_page = 4;
            $conf = array();
            $conf["base_url"] = site_url("booking/admin/{$page}");
            $conf["total_rows"] = $num_all_booking;
            $conf["per_page"] = $per_page;
            $conf["full_tag_open"] = "<ul class='pagination'><li>";
            $conf["full_tag_close"] = "</li></ul>";
            // $conf["cur_tag_open"] = "<li>";
            // $conf["cur_tag_close"] = "</li>";

            $this->pagination->initialize($conf);
            $get_booking_page = $this->Mdl_booking->getBooking(null,$conf["per_page"],$this->uri->segment(4))->result();

            $this->data["get_booking_page"] = $get_booking_page;
            $this->data["per_page"] = $per_page;
            $this->data["get_all_booking"] = $get_all;
            $this->data["num_all_booking"] = $num_all_booking;
            $this->load->view("_layout_admin",$this->data);
        break;
    endswitch;

}


//-------End of admin section------

}//end of file
