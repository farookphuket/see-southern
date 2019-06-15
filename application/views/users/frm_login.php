



<div class="jumbotron">
    <h1>Member : Login</h1>
</div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1>Please Note::</h1>
                </div>
                <div class="panel-body">
                    <p>-All the article content on this website is "PUBLIC".</p>
                    <p>-There is no require to be a member just to reading the content.</p>
                    <p>-Only the "Activated" member can be login.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1>ทำความเข้าใจกันก่อนนะ</h1>
                </div>
                 <div class="panel-body">

<!--panel body content start-->
    <p>-    ท่านไม่จำเป็นต้อง "Login" เพื่ออ่านบทความ</p>
    <p>-    บทความที่ทุกๆ อย่างเป็น "สาธารณะ" ไม่จำเป็นต้อง "สมัครสมาชิก" กับทางเว๊ปไซต์</p>
    <p>-    เว๊ปไซต์นี้ใช้ "Javascript" </p>                
<!--end of panel body content -->

                </div>
                </div>
            </div>
   </div><!--end of div.row-->
        <div class="dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Log in Form</h1>
                </div>
                <div class="modal-body">

<!--start the login form-->
<form class="form-horizontal frmLogin" id="frmLogin" action="<?php echo site_url("users/login");?>">
    <div class="form-group">
        <label class="label-control col-sm-4">User Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control u_name" name="u_name"/>
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-sm-4">Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control u_pass" name="u_pass"/>
        </div>
    </div>

</form>
<!--End of login form -->
     <div class="modal_status">
        
    </div>
<div class="modal-footer">
	<span class="pull-right">
		<fb:login-button
		        id = "btnSocialLogin"
		        scope="public_profile,email"
		        onlogin="checkLoginState();">
	   </fb:login-button>
	</span>
    <span class="float-right">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </span>
<!--start button center-->
<div class="text-center">
    <button class="btn btn-info btnLogin" type="submit" form="frmLogin">
        Login
    </button>
    <button class="btn btn-info lnForgotPass" type="button">
        Forgot password?
    </button>
    
         
</div>
<!--end of button center-->
        <!--facebook button-->
            
        
        <!--end facebook button-->
                </div>
            </div>
        </div>
    </div>

    <!--start the new modal of the forgot password form-->
<div class="modal fade mdForgot">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title mdForgotPassTitle">
                    Forgot password? 
                    <label class="label label-default">
                    <?php echo $ip; ?>
                    </label>
                </h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="alert alert-warning">
                            <h2>Please read me carefully!</h2>
                            <p>This is <span class="label label-danger">NOT</span>
                            an automatic system ,the system will 
                            <span class="label label-danger">Block</span>
                            your account after you click
                            submit form.
                            </p>
                            <p>
                            You will not be able to login at all 
                            unless you have approve by admin
                            </p>
                            <p>you will recieve email from
                            <span class="label label-default"> 
                            <?php echo $admin_email;?> 
                            </span>
                             in 24 hour.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="alert alert-warning">
                            <h2>โปรดทำความเข้าใจ</h2>
                            <p>นี่ไม่ใช่ระบบอัตโนมัติ ระบบจะทำการ Blog บัญชีของท่านทันทีที่ท่านทำการ reset รหัสผ่าน</p>
                            <p>ท่านจะไม่สามารถ Login ได้จนกว่าจะได้รับการยืนยันจาก Admin</p>
                            <p>กรุณาติดต่อ <?php echo $admin_email;?> หากท่านรอนานเกิน 24 ชั่วโมง</p>
                        </div>
                    </div>
                </div>

                <!--form start-->
                <form id="forgotPass" action="<?php echo site_url("users/forgotpass");?>" class="form-horizontal frmForgotPass">                
                    <div class="form-group">
                        <label class="label-control col-sm-4">E-mail</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control fgEmail" />
                            <input type="hidden" class="u_id" name="u_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label-control col-sm-4">Tel</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control fgTel" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control newP" name="newP">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Re-Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control re-pass" name="re-pass">
                        </div>
                    </div>
                </form>
                <!--form end -->                    
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="modal_status">
                            Status
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btnResetPass " type="submit" form="forgotPass">
                            Reset My Password
                        </button>
                        <button class="btn btn-danger btnClose" type="button">
                            Close
                        </button>
                    </div>
                </div>
            </div>
            
         </div>
</div>
</div>
    

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '166509584186131',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.0'
    });
      
    FB.AppEvents.logPageView();   
      
    //--copy from section 2
    
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    //--end copy

    

  };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



    //---function 1
    function statusChangeCallback(response){
        if(response.status === "connected"){
            console.log("user is login");
            getUserData(response);
            
        }else{
            console.log("not login");
        }
    }

    //---end function 1
    //--function 2
    
    function checkLoginState() {
        //--user click login with facebook will fire this method
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    //---
    //--getUserData
    function getUserData(u){
        var msg = `
            You have request to login with facebook if this is your first time to visit please press F5
           `;        


        FB.api("/me?fields=name,email",function(res){
            if(res && !res.error){
                var url = "<?php echo site_url("users/ajaxGetUser");?>";
                var data = {fb_name : res.name,fb_email : res.email};
                $.ajax({
                    type : "post",
                    url : url,
                    data : data,
                    success : function(e){
                        //alert(e);
                        console.log(e);
                        var rs = $.parseJSON(e);
                        var url = rs.url;
                        
                        location.href = url;
                    }
                });
            }
        });
        if(confirm(msg) === true){
            location.reload();
        }else{
            alert("You will not redirect until you reload the page");
        }
       
    
    }
    //---end getUserData
    
    

  
</script>


<?php 

    require("loginJS.php");

