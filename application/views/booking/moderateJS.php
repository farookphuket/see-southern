<script>



    $(function(){

var $el  =  $("#container");
var page_status = $el.find(".status");
var modal_status = $el.find(".modal_status");


var manBooking = (function(){

    //----booking list
    var bk_list = $el.find(".booking_list");
    var bk_num = $el.find(".booking_num");
    var bk_pagin = $el.find(".booking_pagin"); 

    

    //---modal booking form
    var mdBooking = $el.find(".mdEditBooking");
    var mdTitle  = $el.find(".mdEditTitle");
    var payment_photo = $el.find(".payment_photo");

    var tb_booking_detail = $el.find(".tb_booking_detail");

    //---form modal edit booking
    var frmBooking = $el.find("#frmBooking");

    //---res_full_price
    var res_full_price = $el.find(".res_full_price");
    var full_price = $el.find(".full_price");

    //--res_pay_more
    var res_pay_more = $el.find(".res_pay_more");
    var pay_more = $el.find(".user_must_pay");

    //-----user has paid 
    var user_has_paid = $el.find(".user_has_paid");
    var res_user_paid = $el.find(".res_user_paid");

    //--check box
    var mark_as_done = $el.find(".mark_as_done");
    var booking_cancle = $el.find(".booking_is_cancle");

    var bk_id = $el.find(".bk_id");
    var ms_body = $el.find(".ms_body");
    var pay_status = $el.find(".pay_status");
    var btnSave = $el.find(".btnSave");

    var img_not_pay = `<?php echo site_url("public/img/NOT_PAY_YET_1.png");?>`;
    var conf_pic = "";

    //--------------------------------------
    //---------editBookingForm
    function editBookingForm(cmd,id){
        switch(cmd){
            case"edit":
                tb_booking_detail.html("");
                var url = "<?php echo site_url("booking/adminEditBooking/");?>"+id;
                $.ajax({
                    url : url,
                    success : function(e){
                        //console.log(e);
                        var rs = $.parseJSON(e);
                        $.each(rs.get_booking,function(i,v){

                            bk_id.val(v.bk_id);
                            res_full_price.html(v.pay_full_price);
                            full_price.val(v.pay_full_price);
                            //---msTitle field msBody
                            //ms_title.val(v.bk_ms_title);
                            //ms_body.val(v.bk_ms_body);

                            var conf_label = `
                            <h4>
                                <span class="label label-danger">
                                    NOT Confirm
                                </span>
                            </h4>
                            `;

                            
                            if(parseInt(v.bk_confirm) !== 0){
                                conf_label = `
                                    <h4>
                                        <span class="label label-success">
                                            Confirmed
                                        </span>
                                    </h4>
                                    `;

                                    conf_pic = "User is pay something";
                            }

                            //----show photo of money slip
                            var pic_path = `<?php echo site_url("public/payment_confirm/");?>`;
                            if(v.user_payment_img !== null){
                                conf_pic = `
                                <a href="${pic_path}${v.user_payment_img}" target="_blank">
                                    <img src="${pic_path}${v.user_payment_img}" width="250" />
                                </a>
                                `;
                            }



                            var tmp = `
                                <table class="table table-bordered">
                                    <tr>
                                        <th>
                                            booking Name
                                        </th>
                                        <td>
                                            ${v.bk_user_name}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            booking email
                                        </th>
                                        <td>
                                            ${v.bk_email}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>
                                            Booking Date
                                        </th>
                                        <td>
                                            ${v.bk_datetime}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Going Date
                                        </th>
                                        <td>
                                            ${v.going_date}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            People/pax(s).
                                        </th>
                                        <td>
                                            ${v.bk_num_people}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            booking confirm
                                        </th>
                                        <td>
                                            ${conf_label}
                                        </td>
                                    </tr>


                                </table>

                            
                            `;

                            tb_booking_detail.append(tmp);

                            var txt_mdTitle = `
                            Editing booking id&nbsp; 
                            <span class="label label-default">
                                ${v.bk_id} 
                            </span>&nbsp;
                            booking Name &nbsp;
                            <span class="label label-warning">
                                ${v.bk_user_name}
                            </span>
                            
                            `;
                            mdTitle.html(txt_mdTitle);
                            payment_photo.html(conf_pic);
                            $(mdBooking).modal("show");
                        });
                        
                    }
                });
                
                /*
                mdTitle.html("Editing....booking "+id);
                $(mdBooking).modal("show");

                */
            break;
        }
    }
    //-----------------
    //-------------setRadioButton
    function setRadioButton(val){
        //console.log(val);

        //ms_title.val("");
        //ms_body.val("");
        var opt = "";
        //var m_title = "";
        //var m_body = "";

       switch(val){
           case"bk_pay_deposite":
                //alert("deposite");
                opt = "DEPOSITE";

                /*
                m_title = "pay deposite will be collect more of (COLLECT AMOUNT)";
                ms_body.attr("placeholder","Message for pay deposite {Optional you can leave it blank}");

                */
           break;
           case"bk_full_paid":
                opt = "FULLPAID";

                /*
                m_title = "Your ticket has already paid";
                ms_body.attr("placeholder","Message for paid {Optional you can leave it blank}");
                //alert("full paid");
                */
           break;
           case"bk_wait_pay":
                //alert("wait for pay");
                opt = "NOT_PAY";
                /*
                m_title = "You did not make any payment yet";
                ms_body.attr("placeholder","Message for NOT Pay {Optional you can leave it blank}");

                */
           break;
       }

       //var tmp_title = ` ${m_title}`;
       
       //ms_title.val(tmp_title);
       
       return opt;
       
       
       
       
    }
    //---------------------------------
    //-------setBox check box event
    function setBox(cmd){

        var box_name = "";
        var option = 0;
        switch(cmd){

            case"mark_as_done":
                bk_name = mark_as_done;
                if(bk_name.is(":checked")){
                    option = 2;
                    
                }
                mark_as_done.val(option);
                //console.log(`done is ${option}`);
                
            break;
            case"cancle":
                bk_name = booking_cancle;
                    if(bk_name.is(":checked")){
                        option = 2;
                        
                    }
                    booking_cancle.val(option);
                    //console.log(`The booking is ${option}`);

            break;
        }


    }

    //----------calBookingPayment
    function calBookingPayment(){

        var rs_has_pay = user_has_paid.val();
        res_user_paid.html(rs_has_pay);

        var f_price = parseInt(full_price.val());
        
        var rs_result = f_price - rs_has_pay;
        res_pay_more.html(rs_result);
        pay_more.val(rs_result);
        //---end of display


    }
    //----------------
    function saveBooking(){
        btnSave.unbind();
        frmBooking.submit(function(e){
            e.preventDefault();
            //var pay_st = setRadioButton(pay_status);
            var url = $(this).attr("action");
            var data = $(this).serialize();
            $.post(url,data,function(e){
                //console.log(e);
                var rs = $.parseJSON(e);
                modal_status.html(rs.msg);
                var bk_id = rs.bk_id;
                setTimeout(function(){
                    modal_status.html("");
                    editBookingForm("edit",bk_id);
                    getSummary();

                },4000);
                
            });
        });
    }

    function getAllBooking(page=1){
        bk_list.html("");
        var url = "<?php echo site_url("booking/adminGetAllBooking/");?>"+page;
        var conf_pic = `
        <img src="${img_not_pay}"  class="responsive" width="250" />
                            `;
        $.ajax({
            url : url,
            success : function(e){
                var rs = $.parseJSON(e);
                bk_num.html(rs.num_book);
                //console.log(rs);
                $.each(rs.get_book,function(i,v){

                    var conf_status = `
                    
                        <span class="label label-danger">
                            NOT CONFIRM
                        </span>
                    
                    `; 


                    //----show photo of money slip
                    var pic_path = `<?php echo site_url("public/payment_confirm/");?>`;
                    
                    if(v.user_payment_img !== null || parseInt(v.user_payment_img) !== 0){
                        conf_pic = `
                        <a href="${pic_path}${v.user_payment_img}" target="_blank">
                            <img src="${pic_path}${v.user_payment_img}" width="250"/>
                        </a>
                        `;
                    }

                    //--get count to date of going
                    var remain_go_date = getDiffDay(v.going_date);
                   
                    //var must_conf =  - 2;
                   

                    if(parseInt(v.bk_confirm) !== 0){
                        conf_status = `
                        
                            <span class="label label-success">
                                CONFIRMED
                            </span>
                        
                        `; 
                    }

                    //----customer on tour
                    var on_tour = `
                    <h4>
                        <span class="label label-success">Yes</span>
                    </h4>
                    
                    `;
                    if(parseInt(v.mark_as_done) === 0){
                        on_tour = `
                        <h4>
                            <span class="label label-warning">No</span>
                        </h4>
                    
                        `;
                    }

                    //-----booking is cancle
                    var bk_cancle = `
                    <h4>
                        <span class="label label-success">
                            TAKEN
                        </span>
                    </h4>
                    
                    `;
                    if(parseInt(v.booking_cancle) !== 0){
                        bk_cancle = `
                        <h4>
                            <span class="label label-danger">
                                CANCLED!
                            </span>
                        </h4>
                    
                        `;

                    }


                    var tmp = `
                        <li>
                            <div class="content-wrap">
                                <h2>
                                    <span class="label label-default">
                                        ${v.bk_user_name}
                                    </span>&nbsp;
                                    <span class="label label-warning">
                                        ${v.bk_email}
                                    </span>&nbsp;
                                    ${conf_status}
                                </h2>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>
                                            Tour Name 
                                            <span class="label label-default">
                                                ${v.tour_name}
                                            </span>
                                        </h3>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="table table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>
                                                        Has Deposite
                                                    </th>
                                                    <td>
                                                        ${v.must_pay_deposite}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <h4>
                                                            <span class="label label-warning">
                                                            Collect on tour
                                                            </span>
                                                        </h4>
                                                        
                                                    </th>
                                                    <td>
                                                        ${v.must_collect_more}
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <h3>
                                            More detail from user :
                                           
                                        </h3>
                                        <p>
                                            ${v.bk_user_more}
                                        </p>
                                        <br style="clear:both" />
                                        <p>
                                            ${conf_pic}
                                        </p>
                                    </div>

                                    <!--content in table right--> 
                                    <div class="col-md-4 table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>
                                                    Booking Name
                                                </th>
                                                <td>
                                                    ${v.bk_user_name}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Booking Date
                                                </th>
                                                <td>
                                                    ${v.bk_date}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Going Date
                                                </th>
                                                <td>
                                                    <h4>
                                                        <span class="label label-warning">
                                                            ${v.going_date}
                                                        </span>
                                                    </h4>
                                                    
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Remain Day
                                                </th>
                                                <td>
                                                    <h4>
                                                        <span class="label label-danger">
                                                            ${remain_go_date} 
                                                        </span>&nbsp;day(s).
                                                    </h4>
                                                    
                                                    
                                                </td>
                                            </tr>

                                            

                                            <tr>
                                                <th>
                                                    Number of people
                                                </th>
                                                <td>
                                                    ${v.bk_num_people}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Full price
                                                </th>
                                                <td>
                                                    ${v.pay_full_price}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Must deposite
                                                </th>
                                                <td>
                                                    ${v.pay_deposite}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Customer on tour
                                                </th>
                                                <td>
                                                    ${on_tour}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Booking is Cancle
                                                </th>
                                                <td>
                                                    ${bk_cancle}
                                                </td>
                                            </tr>
                                            

                                            <tr>
                                                <th>
                                                    Pay Status
                                                </th>
                                                <td>
                                                    ${v.bk_pay_status}
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--endof table right-->
                                    <div class="col-md-8">
                                        <h3>
                                            Admin
                                        </h3>
                                        
                                        <p>
                                            <a href="#" class="btn-pay btnBkEdit" data-bk_id="${v.bk_id}">Edit ticket</a>
                                        </p>
                                    </div>

                                    
                                </div>
                            </div>
                        </li>
                        <br style="clear:both" />
                    `;


                    //---sent output
                    bk_list.append(tmp);

                });
                
                //bk_list.html(rs);
                
            }
        });
        /*
        $.ajax({
            url : url,
            success : function(e){
                var rs = $.parseJSON(e);

                bk_num.html(rs.num_book);
                $.each(rs.get_all_booking,function(i,v){

                    var conf_status = `
                    <span class="label label-danger">
                    Not Confirm
                    </span>
                    `;
                    if(parseInt(v.bk_confirm) !== 0){
                        conf_status = `
                                <span class="label label-success">
                                    Confirmed
                                </span>
                        `;
                    }

                    var tmp = `
                    <li>
                        <div class="content-wrap">
                            <h2>
                                
                                <span class="label label-default">
                                    ${v.bk_name}
                                </span>&nbsp;
                                <span class="label label-success">
                                    ${v.bk_email}
                                </span>&nbsp;
                                ${conf_status}

                            </h2>

                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Tour program</h3>
                                    <p>
                                        ${v.tour_name}
                                    </p>
                                    
                                </div>

                                <div class="col-md-9">
                                    <h3>Detail from user</h3>
                                    <p>
                                        ${v.bk_more}
                                    </p>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>
                                                Price Per Person
                                            </th>
                                            <td>
                                                ${v.price_per_one}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Price In Total
                                            </th>
                                            <td>
                                                ${v.price_total}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Deposite
                                            </th>
                                            <td>
                                                ${v.price_of_deposite}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Collect on tour
                                            </th>
                                            <td>
                                                ${v.collect_more}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Confirm By
                                            </th>
                                            <td>
                                                ${v.conf_name}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Ticket Status
                                            </th>
                                            <td>
                                                ${v.bk_pay_status}
                                            </td>
                                        </tr>

                                    </table>
                                </div>

                            </div>

                            <br style="clear:both" />

                            <div class="row">
                                <div class="col-sm-3">
                                    <h4>
                                        Booking Date 
                                        <span class="label label-default">
                                            ${v.bk_datetime}
                                        </span>
                                    </h4>
                                </div>

                                <div class="col-sm-3">
                                    <h4>
                                        Going Date 
                                        <span class="label label-danger">
                                            ${v.going_date}
                                        </span>
                                    </h4>
                                </div>

                                

                            </div>
                            <p>
                                <a href="#" class="btn-pay btnBkEdit" data-bk_id="${v.bk_id}">
                                    Check Edit
                                </a>
                            </p>
                        </div>
                        <br style="clear:both" />
                    </li>
                    `;

                    bk_list.append(tmp);
                });
                
            }
        });

        */


    }
    //---------------------------------
    //---getDiffDay
    function getDiffDay(what_day){
        var date1=new Date();// for current date
        var date2 =new Date(what_day);
        if(!date2){
            date2 = new Date();
        }

        // for other date you can get the another date from a textbox by
        // var Newdate=document.getElementById('<%=textBox1.ClientID%>').value;
        // convert Newdate to dateTime by......   var date2=New Date(Newdate);

        var yearDiff=date1.getFullYear()-date2.getFullYear();// for year difference
        var y1=date1.getFullYear();
        var y2=date2.getFullYear();
        var monthDiff=(date1.getMonth() + y1*12)-(date2.getMonth() +y2*12);
        var day1=parseInt(date1.getDate());
        var day2=parseInt(date2.getDate());
        var dayDiff= (day2-day1)+ (monthDiff * 30);

        
        return dayDiff;
        //document.write("Number of day difference : "+dayDiff);
        
    }
    //-------------------------------
    

    //-------getSummary----------
    function getSummary(){
        getAllBooking();
    }
    //-------------------------------
    function getEvent(){
        getSummary();

        //----btnBkEdit click event
        bk_list.delegate(".btnBkEdit","click",function(e){
            e.preventDefault();
            var id = $(this).attr("data-bk_id");
            editBookingForm("edit",id);
        });

        //---pay status radio button click event
        pay_status.on("change",function(){
            
            var opt = "";
            if($("input[type='radio'].pay_status").is(":checked")){
                opt = $("input[type='radio'].pay_status:checked").val();
            }
            //alert(opt);
            setRadioButton(opt);
        });

        //--checkbox  mark_as_done
        mark_as_done.on("change",function(){
            setBox("mark_as_done");
        });

        //--checkbox booking_cancle event
        booking_cancle.on("change",function(){
            setBox("cancle");
        });


        //----user_has_paid
        user_has_paid.on("keyup",function(){
            calBookingPayment();
        });

        //-------btnSave click event
        btnSave.on("click",function(){
            saveBooking();
        });
    }
    return{getEvent : getEvent}
})();

manBooking.getEvent();

});



/*
//---comment out on Sat 15 Sep 2018
$(function(){

    var $el = $("#container");
    var modal_status = $el.find(".modal_status");


    var booking = (function(){

        var lnEdit = $el.find(".lnEdit");

        var url = "<?php echo site_url("booking/moderate");?>";

        var bk_result = $el.find(".book_result");//show result above the form

        //--modal to show booking result and form
        var mdBook = $el.find(".mdBook");

        //--form to confirm booking
        var frmBooking = $el.find("#frmBooking");
        var bk_id = $el.find(".bk_id");
        var h_done = $el.find(".has_done");
        var h_txt = $el.find(".done_txt");
        h_txt.attr("placeholder","Not On Tour ลูกค้ายังไม่เดินทาง")
        .val("");

        //--set confirm status
        var b_conf = $el.find(".bk_confirm");
        var conf_txt = $el.find(".conf_txt");
        conf_txt.attr("placeholder","Not Confirm ยังไม่ยืนยัน");
        
        var btnSave = $el.find(".btnSave");

        //--set confirm
        function setConf(){
            var c = 0;

            var c_txt = "Not Confirm ยังไม่ยืนยัน";
            conf_txt.removeClass("label-success")
            .addClass("label-danger");
            
            if(b_conf.is(":checked") === true){
                c = 1;
                c_txt = "Has Confirm ยืนยันแล้ว";
                conf_txt.removeClass("label-danger")
                .addClass("label-success");
            }
            conf_txt.val(c_txt);
            parseInt(c);
            b_conf.val(c);
        }

        //--set done
        function setDone(){
            var d = 0;
            var t = "Not On Tour ยังไม่ไป";
            h_txt.removeClass("label-success")
            .addClass("label-danger");
            if(h_done.is(":checked") === true){
                t = "Done Tour ไปแล้ว";
                d = 1;
                h_txt.removeClass("label-danger")
                .removeClass("label-warning")
                .addClass("label-success");
            }
            h_txt.val(t);
            h_done.val(d);
        }

        function editBooking(id){
            bk_result.html("");
            b_conf.val(0);
            var data = {
                bk_id : id,
                cmd : "edit"
            };
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    var rs = $.parseJSON(e);
                    
                    $.each(rs.get,function(i,v){
                        $(".modal-title").html(`ข้อมูลจองของ ${v.bk_name} กรุณายืนยันสถานะการจ่ายเงิน ก่อนอนุมัติ`);
                        var tmp = `
                        <table class="table table-striped">
                            <tr>
                                <th width="35%">Name </th>
                                <td>${v.bk_name}</td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td>${v.bk_email}</td>
                            </tr>
                            <tr>
                                <th>Tour </th>
                                <td>${v.tour_name}</td>
                            </tr>
                            <tr>
                                <th>Person/pax(s).</th>
                                <td>${v.bk_num}</td>
                            </tr>
                            <tr>
                                <th>
                                    <div>Booking Date </div>
                                    <div>Date Departure </div>
                                </th>
                                <td>
                                    <h4>วันจอง
                                        <span class="label label-default">  
                                            ${v.bk_date}
                                        </span>
                                    </h4>
                                    <h3>วันเดินทาง/วันทำทัวร์
                                    <span class="label label-danger">${v.going_date}</span>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                            <th>Customer Detail </th>
                            <td>
                                <div class="alert alert-info">
                                    ${v.bk_more}
                                </div>
                            
                            
                            </td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h4>
                                        ราคาเต็ม
                                        <span class="label label-info">
                                        ${v.price_total}
                                        </span>
                                    </h4>
                                    <h4>
                                        เงินต้องมัดจำ
                                        <span class="label label-warning">
                                            ${v.price_of_deposite}
                                        </span>
                                    </h4>
                                    <h4>
                                        ต้องเก็บเพิ่ม
                                        <span class="label label-danger">
                                            ${v.collect_more}
                                        </span>
                                    </h4>
                                </td>
                            </tr>
                        </table>
                        `;
                        //--show in table result
                       bk_result.append(tmp);
                        var d_txt = "Not On tour ลูกค้ายังไม่เดินทาง";
                        h_txt.addClass("label-warning");
                        if(parseInt(v.mark_as_done)!== 0){
                            d_txt = "ON Tour ลูกค้าเดินทางแล้ว";
                        }
                        h_txt.val(d_txt);

                        //--pay
                        var c_txt = "Not Confirm ยังไม่ยืนยัน";
                        conf_txt.removeClass("label-success")
                        .addClass("label-danger");
                        if(parseInt(v.bk_confirm) !== 0){
                            c_txt = "Has Confirm ยืนยันแล้ว";
                            b_conf.prop("checked",true);
                            conf_txt.removeClass("label-danger")
                            .addClass("label-success");
                        }
                        conf_txt.val(c_txt);
                        bk_id.val(v.bk_id);
                        
                        $(mdBook).modal("show");
                    });
                }
            });
        }

        //---save change
        function bookSave(){
            btnSave.unbind();
            frmBooking.submit(function(o){
                o.preventDefault();
                var url = $(this).attr("action");
                var data = $(this).serialize()+"&cmd=save";
                $.post(url,data,function(o){
                    var rs = $.parseJSON(o);
                    //console.log(e);
                    modal_status.html(rs.msg);
                    setTimeout(function(){
                        location.reload();
                    },2000);
                    
                });
            });
        }

        function getEvent(){
            lnEdit.on("click",function(){
                var id = $(this).attr("data-bk_id");
                editBooking(id);
            });

            //--checkbox conf
            b_conf.on("change",function(){
                setConf();
            });

            //--checkbox done
            h_done.on("change",function(){

                setDone();
            });

            btnSave.on("click",function(){
                bookSave();
            });
        }
        return{getEvent : getEvent}
    })();

    booking.getEvent();
});

*/


</script>