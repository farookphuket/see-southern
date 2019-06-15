<section id="check_booking">
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">
                    <a href="#" class="btn btn-danger lnClose">Close this window.</a>
                </h1>
            </div>
            <div class="col-lg-12">
                
                <h1 class="text-center">Check my booking
                    
                </h1>
                <hr />
            </div>
            
        </div>
    </div>  
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                
                <form id="frmCheckBooking" action="<?php echo site_url("booking/uGetBookingByEmail/");?>">
                <div class="form-group">
                    <label for="email">ENTER YOUR E-MAIL</label>
                    <input type="email" name="email" class="form-control email" id="email" placeholder="E-Mail" required/>
                </div>
                <div class="form-group">
                    <label for="booking_code">ENTER YOUR Booking Code</label>
                    <input type="text" name="booking_code" class="form-control booking_code" id="booking_code" placeholder="BOOKING CODE " required/>
                </div>
                <div class="form-group">
                    <label>&nbsp;</label>
                    <div class="float-right">
                    <button class="btn btn-primary btnSave" type="submit" form="frmCheckBooking">Check Booking</button>
                    </div>
                </div>
                
                </form>
            </div>

            <div class="col-lg-9">
                <div class="list-group">
                    <div class="bk_list"></div>
                </div>
                <div class="bk_pagin"></div>
            </div>
        </div>
    </div>


    <div class="frmSent">
        <h1 class="text-center fSentHead">Sent your slip</h1>
        
        <div class="container">
        <form class="form-horizontal" id="frmSentPayment" action="<?php echo site_url("booking/userSentPayment");?>" enctype="multipart/form-data">

        <div class="form-group">
            <label>&nbsp;</label>
        </div>

        <div class="form-group">
            <label class="label-control col-sm-4">Your payment reciept</label>

            <div class="col-sm-6">
            <input type="file" name="userfile" class="form-control userfile" required/>
            <input type="hidden" name="cf_email" class="cf_email" id="cf_email" />
            <input type="hidden" name="bk_id" class="bk_id" id="bk_id" />
            </div>
        </div>

        <div class="form-group">
            <label class="label-control col-sm-4">picture you have choose</label>
            <div class="col-sm-6">
                <div class="upload_img_preview"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="label-control col-sm-4">&nbsp;</label>
            <div class="col-sm-6">
                <div class="frmResult"></div>
            </div>
        </div>

        <div class="form-group">
            <label>&nbsp;</label>
            <div class="float-right">
            <button class="btn btn-primary btnSentPayment" type="submit">Sent my payment reciept</button>
            
            <button class="btn btn-danger lnClose">
            Close
            </button>
            </div>
        </div>
        
        </form>
        </div>
    </div>

</section>
<script>
    $(function(){
        var $page_status = $(".status");
        var $el = $("#check_booking");

        

        var check = (function(){

            var lnClose = $el.find(".lnClose");

            var $bk_list = $el.find(".bk_list");
            //var $bk_pagin = $el.find(".bk_pagin");

            var $f = $el.find("#frmCheckBooking");
            var email = $el.find(".email");
            var btnSave = $el.find(".btnSave");

            //----show form sent payment
            var $frmSent = $el.find(".frmSent");
            var $fSentHead = $el.find(".fSentHead");
            
            //---form sent payment
            var frmReqPayment = $el.find("#frmSentPayment");
            var bk_id = $el.find(".bk_id");
            var userfile = $el.find(".userfile");
            var cf_email = $el.find(".cf_email");
            var $img_preview = $el.find(".upload_img_preview");
            var $frmResult = $el.find(".frmResult");
            var btnSentPayment = $el.find(".btnSentPayment");

            
            function getMyBooking(obj){
                //console.log(obj);
                $bk_list.html("");
                var bk_data = "";
                var bk_id = "";
                var lnShow = "";

                //---user show info
                var b_name = "";
                var t_name = "";
                var go_day = "";
                var book_date = "";
                var tmp = "";
                var conf = "";
                if(obj.bk_data){
                    bk_data = obj.bk_data;
                    
                    $.each(bk_data,function(i,v){
                        console.log(v);
                        //bk_id.val(v.bk_id);
                         
                        conf = `
                        <span class="badge badge-success">Confirmed</span>
                        `;
                        if(parseInt(v.bk_confirm) === 0){
                            //---show form sent booking payment
                            lnShow = "sentPaymentForm";
                            conf = `
                            <span class="badge badge-danger">NOT confirm</span>
                            `;
                        }else{
                            bk_id = v.bk_id;
                            lnShow = "printReciept";
                        }

                        b_name = v.bk_user_name;
                        t_name = v.tour_name;
                        go_day = v.going_date;
                        book_date = v.book_record_day;
                        
                    });


                    switch(lnShow){
                        
                        case"sentPaymentForm":
                            tmp = `
                            <div class="container">
                                <h2 class="text-center">Dear ${b_name}.</h2>
                                <p>as you have booking for 
                                <strong>${t_name}</strong> on departure <strong>${go_day}</strong></p>
                                <p>your booking is <strong>
                                ${conf}
                                </strong></p>
                                <p>Please make a payment and sent your payment reciept by using the form below of your booking table.</p>
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                <tr>
                                <th>Tour name</th>
                                <td>${t_name}</td>
                                </tr>
                                <tr>
                                <th>Date of departure
                                <p>Booking on </p>
                                </th>
                                <td>${go_day}
                                <p>
                                <strong>${book_date}</strong>
                                </p>
                                </td>
                                </tr>
                                <tr>
                                <th>Confirm Status</th>
                                <td>${conf}</td>
                                </tr>
                                </table>
                                </div>
                                <p>&nbsp;</p>
                            </div>
                            
                            `;
                            $bk_list.append(tmp);
                            paymentReq(bk_data);
                        break;
                        case"printReciept":
                            printReciept(bk_id);
                        break;
                    }
                    
                }
                if(obj.msg){
                    var tmp = `
                    <div class="alert alert-danger">
                        <h3>${obj.msg}</h3>
                    </div>
                    `;
                    $bk_list.html(tmp);
                }
                
            }


            //---user submit to sent email and booking number
            function sentCheckBooking(){
                btnSave.unbind();
                $f.submit(function(e){
                    e.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize();
                    $.post(url,data,function(e){
                        
                        //console.log(e);
                        var rs = $.parseJSON(e);
                        getMyBooking(rs);
                        
                    });
                });
            }
            //-------------------
            //-----show form user will sent the payment reciept to the server 
            function paymentReq(obj){
                
                //console.log(obj);
                $.each(obj,function(i,v){
                    var hShow = `${v.bk_user_name} sent the payment reciept.`;
                    $fSentHead.html(hShow);
                    //bk_id = v.bk_id;
                    bk_id.val(v.bk_id);
                    cf_email.val(v.bk_user_email);
                    $frmSent.slideToggle();
                });
                
                
            }
            //------------
            //-----userSentPayment
            function userSentPayment(){
                //---user click submit button in the form sent payment
                btnSentPayment.unbind();
                $frmResult.html("");
                
                frmReqPayment.submit(function(o){
                    o.preventDefault();
                    var url = $(this).attr("action");
                    var formData = new FormData(this);
                    
                    var req = new XMLHttpRequest();
                    req.open("post",url);
                    req.send(formData);
                    req.onreadystatechange = function(){
                        if(req.readyState === 4){
                            if(req.status === 200){
                                var rs = req.responseText;
                                var p = JSON.parse(rs);
                                console.log(p);
                                $frmResult.html(p.msg);
                                setTimeout(function(){
                                    $frmResult.html(`Loading...`).fadeOut("slow");
                                    $img_preview.html("");
                                    frmReqPayment.trigger("reset");
                                    
                                    
                                    
                                },8000);
                                
                                
                                
                            }else{
                                console.log("req fail");
                                
                            }
                        }
                    };

                });
                
            }

            //-----
            //----printReciept 
            //---last edit 17/4/19
            function printReciept(bk_id){
                //alert(`will be printing ${bk_id}`);
                var our_web = "<?php echo site_url();?>";
                var url = "<?php echo site_url("booking/printMyTicket/");?>"+bk_id;
                var wind = window.open(url,'_blank');
                if(wind){
                    wind.focus();
                }else{
                    alert(`Please allow popup for ${our_web}`);
                }
            }
            //----------
            //-----closeWindow
            function closeWindow(){
                
                var cur_url = "<?php echo current_url();?>";

                var msg = `Are you sure you want to close this window?`;
                //console.log(`the current url is ${cur_url}`);
                
                if(confirm(msg) === true){
                    window.open(cur_url,"_self").close();
                }else{
                    return false;
                }
            }

            //------------
            function getEvent(){
                btnSave.on("click",function(){
                    sentCheckBooking();
                });

                $frmSent.hide();

                //---sent payment
                $bk_list.delegate(".btnSentPayment","click",function(){
                    var id = $(this).attr("data-bk_id");
                    paymentReq(id);
                });



                //--------------
                //--show preview when user select file before upload
                userfile.on("change",function(e){
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function(e){
                        var tmp = `<img src="${e.target.result}" class="responsive">`;

                        //--show image preview before upload
                        $(".upload_img_preview").html(tmp);
                    };
                });

                //----------
                //----btnSentPayment click
                //---user click submit button
                btnSentPayment.on("click",function(){
                    userSentPayment();
                });
                //-------------

                //---close this window
                lnClose.on("click",function(){
                    closeWindow();
                });
            }
            return{getEvent:getEvent}
        })();
        check.getEvent();
    });
</script>