<?php 


class Booking extends MY_Controller{


    protected $_tb_booking = "tbl_booking";
    protected $_tb_payment = "tbl_booking_payment_info";
    protected $_tb_book_info = "tbl_booking_user_info";

    protected $_tb_tour = "tbl_tour";

    protected $_tb_notice = "tbl_notification";

    public $ip;

    //--pic path
    public $img_path;
    public $thumb_path;

    function __construct(){
        parent::__construct();
        
        //---load model
        $this->load->model("Mdl_booking");

        //--load library
        $this->load->library("pagination");

        $this->ip = $this->Mdl_booking->ip;

        $this->img_path = realpath(APPPATH."../public/payment_confirm");
        $this->thumb_path = $this->img_path."/thumb/";
    }

    function index(){

        if($this->user_is_login()):
            $url = site_url("booking/u/{$this->user_id}");
            redirect($url);
        endif;
        $this->data["meta_title"] = "Make your booking";
        $this->data["subview"] = "booking/book_index";
        $this->load->view("_layout_main",$this->data);
    }

    //-------checkBooking 15/4/19
    function checkMyBooking(){

        $this->data["meta_title"] = "Check your booking status";
        $this->data["subview"] = "booking/check_booking";
        $tmp = "booking/_check_booking_TMP";
        $this->load->view($tmp,$this->data);
    }

    //----uGetBookingByEmail
    function uGetBookingByEmail(){
        //---last edit 17/4/19
        $email = $this->input->post("email");
        $booking_code = $this->input->post("booking_code");
        
        $bk_id = "";
        $err = 0;

        $get_1 = $this->Mdl_booking->getBooking(array(
            "{$this->_tb_booking}.booking_code" => $booking_code,
            "{$this->_tb_booking}.bk_email" => $email
            ))->result();
        $num = count($get_1);
        
        $bk_data = null;
        $book_name = "";
        if($num != 0):
            //---get the whole detail
            foreach($get_1 as $row):
              $bk_id = $row->bk_id; 

            endforeach;
            $where = array("{$this->_tb_booking}.bk_id" => $bk_id);
            $bk_data = $this->Mdl_booking->modGetAllBooking($where)->result();
            
            
        else:
            $msg = "Error : There is no booking found for the email {$email}.";
            $err = 1;
        endif;
        

        if($err == 1):
            $this->o_put["msg"] = $msg;
        else:
            $this->o_put["bk_data"] = $bk_data;
            
        endif;
        
        
       // $this->o_put["bk_data"] = $bk_data;
        $this->output->set_output(json_encode($this->o_put));
        
    }

    //-------------------------------------
    //-------- #uGetPayTag
    function uGetPayTag($t_id){
        $bk_num = $this->input->post("bk_num");
        $unit_price = 0;
        $price_total = 0;
        $tour_name = "";

        if(!$bk_num):
            $bk_num = 2;
        endif;
        $where = array(
            "{$this->_tb_tour}.t_id" => $t_id
        );
        $get = $this->Mdl_booking->calTourPrice($where)->result();
        foreach($get as $row):
            $unit_price = $row->full_price;
            $tour_name = $row->t_name;
        endforeach;
        $total_price = $unit_price*$bk_num;

        $this->o_put["full_price"] = $total_price;
        $this->o_put["tour_name"] = $tour_name;
        $this->output->set_output(json_encode($this->o_put)); 

    }

    //--------------------------------------------
    //---------- uSetDateBooking
    function uSetDateBooking(){
        $today = date("Y-m-d",time());
        $date_dep = $this->input->post("bk_dep");
        $date_dep = date("Y-m-d",strtotime($date_dep));
        $valid_day = date("Y-m-d",time()+86400*2);
        $err = 0;
        $msg = "";
        if($date_dep <= $valid_day):
            $err = 1;
            $msg = "Error : you have to booking for later of {$valid_day} or 3 days in advance!";
        else:
            $msg = "your booking is for {$date_dep}";
        endif;
        $this->o_put["error"] = $err;
        $this->o_put["msg"] = $msg;
        $this->output->set_output(json_encode($this->o_put));
    }
    //-----------------
    //------uSaveBooking 16 jan 19
    function uSaveBooking(){
        //----get user data from the form submit by ajax
        $bk_id = 0;
        $go_day = $this->input->post("bk_dep");
        $bk_email = $this->input->post("bk_email");
        $go_day = date("Y-m-d",strtotime($go_day));
        $valid_day = date("Y-m-d",time()+86400*2);

        $booking_code = "";
        $res_email = "booking@see-southern.com";
        
        $err = 0;
        $msg = "";

        
        $get = 0;
        $our_url = site_url();
        if($go_day <= $valid_day):
            $err = 1;
            $msg = "Error : your selected date is not valid!";
        else:
            $booking_code = $this->randomChar();
            $u_data = $this->uGetFormData();
            $u_data["bk_ip"] = $this->ip;
            $u_data["booking_code"] = $booking_code;
            $bk_email = $u_data["bk_email"];
            //---save booking to get the key id
            $bk_id = $this->Mdl_booking->save_booking($u_data);

            //---user pay data
            $u_pay = $this->uGetUserPayData();
            $u_pay["bk_id"] = $bk_id;
            $u_pay["user_pay_as"] = "never_pay";
            $u_pay["user_payment_img"] = "NOT_PAY_YET_1.png";
            $this->Mdl_booking->savePaymentInfo($u_pay);
            //var_dump($u_pay);
            
            //---user booking detail
            $u_info = $this->uGetBookingInfo();
            $u_info["bk_id"] = $bk_id;
            $this->Mdl_booking->saveUserInfo($u_info);


            //---get the booking info for the email
            $bk_data = $this->getBookingInfo($bk_id);
            $cus_name = $bk_data["bk_name"];
            $cus_booking_code = $bk_data["booking_code"];
            $cus_email = $bk_data["bk_email"];
            $cus_ip = $bk_data["bk_ip"];
            $cus_going_date = $bk_data["going_date"];
            $cus_booking_date = $bk_data["booking_date"]; 
            $cus_tour_name = $bk_data["tour_name"];$cus_tour_price = $bk_data["full_price"];

            $half_price = $cus_tour_price/2;
            $cus_depo = $half_price/2;
            
            $cus_num = $bk_data["num_people"];

            $cus_mail_title = "Thank you for make a booking with us.";
            $cus_mail_body = "
            <h1>Hello {$cus_name} ,you just make a booking with {$our_url}.</h1>
            <h2>
            Dear <i>{$cus_name}</i>
            </h2>
            <p>We just want to inform you that you have made a booking throught {$our_url} for the tour {$cus_tour_name}  as the following detail below.</p>
            <div>
                <table border=1>
                    <tr>
                        <th>
                            Booking Code
                        </th>
                        <td>
                            {$cus_booking_code}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Booking E-Mail
                        </th>
                        <td>
                            {$cus_email}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Tour Name
                        </th>
                        <td>
                        {$cus_tour_name}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Date Departure
                        </th>
                        <td>
                        <p>
                           Departure {$cus_going_date}
                        </p>
                        <p>
                            Booking {$cus_booking_date}
                        </p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        People on tour
                        </th>
                        <td>
                        {$cus_num}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Total Price
                        </th>
                        <td>
                        {$cus_tour_price}
                        </td>
                    </tr>
                    

                    <tr>
                        <th>
                            Using IP
                        </th>
                        <td>
                        {$cus_ip}
                        </td>
                    </tr>


                </table>
            </div>
            <p>Please make a payment as a deposite {$cus_depo} or pay full price at {$cus_tour_price} to confirm your booking.</p>
            <p>
            To check your booking status please enter <strong>{$cus_email}</strong> in the email field and <strong>{$cus_booking_code}</strong> in the booking code field.
            </p>
            <p>
            <strong>please note :</strong> 
            your booking will be not confirm until you make a payment.
            </p>
            <p>
            any help or if you have already pay please contact {$res_email}.
            </p>
            <br />
            <br />
            <p>Best regard</p>
            <p>send from <strong>{$our_url}</strong> on date {$this->today_andTime}.</p>
            ";
            $info = "booking@see-southern.com";
            $this->sendMailTo($info,$cus_email,$cus_mail_title,$cus_mail_body);
            

            //----sent admin notice
            $note_title = "The user ip {$this->ip} has do booking on {$this->today_andTime}";
            $note_body = "The user email {$bk_email} has booking on {$this->today_andTime}";

            $note_data = array(
                "notice_title" => $note_title,
                "notice_body" => $note_body,
                "notice_ip" => $this->ip,
                "by_user_name" => $bk_email
            );
            $this->Mdl_booking->saveNotice($note_data);

            //---admin email
            $ad_mail_title = "New booking from {$cus_ip} on {$cus_booking_date}.";
            $ad_mail_body = "<h1 style='text-align:center;color:red'>New booking from {$our_url} on {$cus_booking_date}</h1>
            <p>Using IP {$cus_ip}</p>
            <p>Email {$cus_email}</p>
            <p>Customer name {$cus_name}</p>
            <p>Going on tour {$cus_tour_name}</p>
            
            ";
            $this->sendMailTo(null,$this->admin_email,$ad_mail_title,$ad_mail_body);

            


            $msg = "Success : your booking has send ";
        endif;

        
        $this->o_put["get_booking"] = $this->Mdl_booking->modGetAllBooking(array("{$this->_tb_booking}.bk_id" => $bk_id))->result();
        $this->o_put["msg"] = $msg;
        $this->o_put["error"] = $err;
        $this->o_put["bk_id"] = $bk_id;
        //$this->o_put["bk_email"] = $bk_email;
        $this->output->set_output(json_encode($this->o_put));
    }
    //------------------------------
    //----uViewBooking 15-4-19
    function uViewBooking($bk_id){
        //---when user request to view his booking
        $bk_data = $this->getBookingInfo($bk_id);
        var_dump($bk_data);
    }


    //--------------
    function getBookingInfo($bk_id){
        
        $data = array();
        $where = array("{$this->_tb_booking}.bk_id" => $bk_id);
        $get = $this->Mdl_booking->modGetAllBooking($where)->result();
        foreach($get as $row):
            $data["booking_code"] = $row->booking_code;
            $data["bk_id"] = $row->bk_id;
            $data["bk_name"] = $row->bk_user_name;
            $data["bk_email"] = $row->bk_user_email;
            $data["going_date"] = $row->bk_date_going;
            $data["booking_date"] = $row->bk_datetime;
            $data["bk_ip"] = $row->bk_ip;
            $data["user_more"] = $row->bk_user_more;
            $data["num_people"] = $row->bk_num_people;
            $data["tour_name"] = $row->tour_name;
            $data["full_price"] = $row->pay_full_price;
            
        endforeach;

        return $data;

    }
    
    //------------------------------

    //---------uGetFormData 17 jan 19
    function uGetFormData(){

        $go_day = $this->input->post("bk_dep");
        $go_day = date("Y-m-d",strtotime($go_day));
        $u_data = array(
            "tour_id" => $this->input->post("tour_id"),
            "bk_email" => $this->input->post("bk_email"),
           "tour_name" => $this->input->post("meta_url"),
           "bk_date" => $this->today,
           "bk_pay_status" => 0,
           "bk_datetime" => $this->today_andTime,
           "going_date" => $go_day 
        );

        return $u_data;
    }

    //----uGetUserPayData 17 jan 19
    function uGetUserPayData(){

        $full_price = $this->input->post("bk_price");
        $half_price = $full_price/2;
        $deposit = $half_price/2;

        $data = array(
            "pay_full_price" => $full_price,
            "must_pay_deposite" => $deposit,
            "user_has_pay" => 0,
            "user_pay_as" => "Never Pay"
        );
        return $data;
    }
    //----------------
    //----uGetBookingInfo 17 jan 19
    function uGetBookingInfo(){
        //---this method will return user data from booking form
        //--call by ajax when user has booking
        $go_day = $this->input->post("bk_dep");
        $go_day = date("Y-m-d",strtotime($go_day));
        $data = array(
            "bk_user_ip" => $this->ip,
            "bk_user_name" => $this->input->post("bk_name"),
            "bk_user_email" => $this->input->post("bk_email"),
            "bk_user_more" => $this->input->post("bk_pickup"),
            "bk_num_people" => $this->input->post("bk_num"),
            "bk_date_going" => $go_day,
            "bk_date_booking" => $this->today
        ) ;
        return $data;
    }
    //-----------------
    function u($id){
        $this->data["subview"] = "booking/own_booking";
        $this->data["meta_title"] = "{$this->user_type}&nbsp;|&nbsp;welcome {$this->user_name}";
        $this->load->view("_MEMBER_TMP",$this->data);
    }

    //-------------------------------------------
    //---------getMyTicketList
    function getMyTicketList($seg=1){

        $u_email= $this->user_email;
        $where = array(
            "bk_email" => $u_email
        );
        $get = $this->Mdl_booking->getBooking($where)->result();
        $num = count($get);

        $this->o_put["get_ticket"] = $get;
        $this->o_put["num_ticket"] = $num;
        $this->output->set_output(json_encode($this->o_put));

        
    }

    //--------------------
    //--------viewMyTicket
    function viewMyTicket($t_id){

        $detail = $this->getBookingInfo($t_id);
        $this->o_put["detail"] = $detail;
        $this->output->set_output(json_encode($this->o_put));
    }
    //---------------------
    //-----userSentPayment
    function userSentPayment(){
        $bk_id = $this->input->post("bk_id");
        $email = $this->input->post("cf_email");
        //$u_file = $this->input->post("userfile");
        $where = array("bk_id" => $bk_id);
        //---upload pic
        $this->load->library("upload");
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
            //var_dump($img_data);

            $pic_name = $img_data["file_name"];
            $thumb_name = "_Thumb_".$img_data["file_name"];
            $pay_info = array(
                "user_payment_img" => $pic_name,
                "payment_img_thumb" => $thumb_name
            );
            $this->Mdl_booking->savePaymentInfo($pay_info,$where);

            //----send e-mail to admin
            $aMail_title = "user sent payment request!";
            $aMail_body = "<h1>New payment request by {$this->ip} on {$this->today_andTime}</h1>
            <p>by email {$email}</p>
            <p>IP <strong>{$this->ip}</strong></p>
            <p>OS <strong>{$this->Mdl_booking->os}</strong></p>
            ";
            $this->sendMailTo(null,"booking@see-southern.com",$aMail_title,$aMail_body);

            //------end sent admin email
            //---sent email to this email


            //----------

            $this->o_put["msg"] = "
            Success : Thank you! please wait for our approve we will get back to you as soon as possible";
            $this->o_put["bk_id"] = $bk_id;
            $this->output->set_output(json_encode($this->o_put));


    }
    //------------------------------------
    //----userPrintTicket
    function printMyTicket($id){
        //echo"From the server will ptint the ticket id {$id}";

        $where = array("{$this->_tb_booking}.bk_id" => $id);
        $get = $this->Mdl_booking->modGetAllBooking($where)->result();

        $this->data["meta_title"] = "pritn this document or save this page as *.pdf file";
        $this->data["subview"] = "booking/_print_ticket";
        $this->data["get_booking"] = $get;

        $tmp = "booking/print_TMP";
        $this->load->view($tmp,$this->data);
    }




    //----------------------------------------------------
    //--------------Admin section-------------------
    //------------17-12-18----------------------------
    function adminGetBookingList($seg=1){
        $get = $this->Mdl_booking->modGetAllBooking()->result();
        $num_bk = count($get);

        ///----call for paginatoion
        $url = "adminGetBookingList";
        $per_page = 4;
        
        $conf = $this->getConfPagin($per_page,$num_bk,$url);
        $this->pagination->initialize($conf);
        $page = $seg;
        $start = ($page-1)*$per_page;
        $get_bk = $this->Mdl_booking->modGetAllBooking(null,$per_page,$start)->result();

        if($num_bk >= $per_page):
            $this->o_put["pagination"] = $this->pagination->create_links();
        endif;

        
        
        $this->o_put["num_bk"] = $num_bk;
        $this->o_put["get_bk"] = $get_bk;
        $this->output->set_output(json_encode($this->o_put));

    }

    //----------------
    //--------modViewBooking
    function modViewBooking($id){
        $where = array("{$this->_tb_booking}.bk_id" => $id);
        $get = $this->Mdl_booking->modGetAllBooking($where)->result();
        $this->o_put["get_booking"] = $get;
        $this->output->set_output(json_encode($this->o_put));
    }
    //--------modSaveBooking
    function modSaveBooking(){
        $conf_name = $this->user_name;
        $conf_id = $this->user_id;

        $bk_id = $this->input->post("bk_id");

        //---need the booking detail to sent email
        $bk_info = $this->getBookingInfo($bk_id);
        $bk_name = $bk_info["bk_name"];
        $bk_email = $bk_info["bk_email"];
        //$num_people = $bk_info["num_people"];
        $tour_name = $bk_info["tour_name"];
        $go_day = $bk_info["going_date"];
        $our_url = site_url();
        $print_url = site_url("booking/printMyTicket/{$bk_id}");

        $num_people = $this->input->post("num_people");
        $full_price = $this->input->post("full_price");
        $cus_depo = $this->input->post("cus_has_paid");
        
        //---checkbox
        $is_confirm = $this->input->post("set_conf");
        $pay_status = $this->input->post("pay_option");
        
        $must_collect = ($full_price-$cus_depo);
       
        $err = 0;
        $msg = "";

        $where_booking = array(
            "bk_id" => $bk_id
        );
        $book_data1 = array(
            "bk_pay_status" => $pay_status,
            "bk_confirm" => $is_confirm,
            "conf_ip" => $this->ip,
            "conf_id" => $this->user_id,
            "conf_name" => $this->user_name,
            "bk_date_conf" => $this->today_andTime
        );
        //--update the table tbl_booking
        $update_1 = $this->Mdl_booking->save_booking($book_data1,$where_booking);

        $book_data2 = array(
            "pay_deposite" => $cus_depo,
            "must_collect_more" => $must_collect,
            "day_pay_record" => $this->today_andTime,
            "user_has_pay" => $is_confirm,
            "user_pay_as" => $pay_status
        );
        //--update table tbl_booking_payment_info
        $update_2 = $this->Mdl_booking->savePaymentInfo($book_data2,$where_booking);

        $msg = "the booking id {$bk_id} has been updated! <p>There is no e-mail sent to <strong>{$bk_email}</strong> as his ticket is set to not confirm</p>";

        if($is_confirm == 1):
            
            //---sent email to user

            $title = "your booking with {$our_url} is confirmed";
            $body = "<h1 style='text-align:center;color:green;'>Your booking is confirmed.</h1>
            <p>Dear {$bk_name} your booking is confirmed on {$this->today_andTime}</p>
            ";
            $this->sendMailTo("booking@see-southern.com",$bk_email,$title,$body);
            //--end of sent mail

            //---display message
            $msg = "<p>The booking ID {$bk_id} is set confirm by you </p>
            <p>The email has been sent to {$bk_email} already.</p>
            ";
        endif;

        $this->o_put["msg"] = $msg;
        $this->o_put["bk_id"] = $bk_id;
        $this->output->set_output(json_encode($this->o_put));
    }


}