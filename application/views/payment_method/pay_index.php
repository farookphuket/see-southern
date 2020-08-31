

<?php
    $pay_paypal = site_url("public/img/pay_by_paypal-1.png");
    $pay_true = "https://lh3.googleusercontent.com/rQlL3vcP5vu5iXsJO7KXAggzdia1-bUTijjz-88i4G7_ZYKMhXexh305NSjSgPwEHRJ9k9aY0yz7JPGTuCl8DwUr_tA1245_3XpB1Z1T59ioBCtJwiu7NSCWwwQg8uZ-yN3uFem3F7c=w2400";
    $pay_SCB= site_url("public/img/promptpaySCB.jpg");
    $pay_KBank = site_url("public/img/promtpayKBank.jpg");
?>
<h1>&nbsp;</h1>
<section id="payment">
    <div class="container">
        <h1 class="text-center">Payment</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                
                <a href="<?php echo $pay_paypal;?>" target="_blank" alt="click to see the full size image">
                    <img class="card-img-top responsive" src="<?php echo $pay_paypal;?>"/>
                </a>
                
                <div class="card-header">
                    <h2 class="text-center">Pay by PayPal</h2>
                </div>
                <div class="card-body">
                    <p>
                        Pay by paypal is the most easy and secure online payment solution if you want to pay via paypal click on the button below.
                    </p>
                    <p>
                        จ่ายผ่าน Paypal นั้นง่ายและปลอดภัยเมื่อท่านชำระเงินออนไลน์ หากท่านต้องการชำระผ่าน Paypal ท่านสามารถคลิกที่ปุ่มข้างล่างได้เลย
                    </p>
                </div>
                <div class="card-footer">
                    <a class="btn-pay" href="https://www.paypal.me/farookphuket/" target="_blank">Pay via Paypal</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img class="card-img-top responsive" src="<?php echo $pay_true;?>" />
                <div class="card-header">
                    <h2 class="text-center">
                    Pay at 7-eleven
                    </h2>
                </div>
                <div class="card-body">
                    <p>
                        pay @7-eleven is a very easy way</p>
                        <p>if you are now in Thailand just show the bar code to the staff and tell them what is your payment amount.
                    </p>
                    <p>
                        You may have to be charge for 15-20 THB. for the service.
                    </p>
                    <p>
                        จ่ายที่เซเว่นได้ง่ายๆ แค่โชว์บาร์โค้ดให้พนักงานทำการสแกนจากนั้นบอกจำนวนเงินที่ท่านต้องการชำระ ท่านจะต้องจ่ายค่าบริการ 15-20 บาท
                    </p>
                </div>

                <div class="card-footer">
                    <a href="<?php echo $pay_true; ?>" target="_blank" class="btn-pay">Click for big image</a>
                </div>
            
            </div>
        </div>
        
        <!--pay transfer by KBank-->
        <div class="col-lg-3">
            <div class="card">
                
                <a href="<?php echo $pay_KBank;?>" target="_blank" alt="click to see full size">
                    <img class="card-img-top responsive" src="<?php echo $pay_KBank;?>"/>
                </a>
                <div class="card-header">
                    <h2 class="text-center">
                    Transfer to KBank
                    </h2>
                </div>
                <div class="card-body">
                    <p>
                        Transfer money to KBank by scan the QR Code 
                    </p>
                
                </div>
            </div>
        </div>

        <!--pay transfer by SCB-->
        <div class="col-lg-3">
            <div class="card">
                
                <a href="<?php echo $pay_SCB;?>" target="_blank" alt="Click to see full size">
                    <img src="<?php echo $pay_SCB;?>" class="card-img-top responsive">
                </a>
                <div class="card-header">
                    <h2 class="text-center">
                        Transfer to SCB
                    </h2>
                </div>
                <div class="card-body">
                    <p>
                        Transfer money to SCB Bank by scan the QR Code 
                    </p>
                </div>
            </div>
        </div> 

    </div>
    
</section>
<h1>&nbsp;</h1>