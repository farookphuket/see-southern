<?php 
    $cur_url = current_url();
    $regis_url = site_url("register");
    if($cur_url == $regis_url):
        ?>
    <script>
        var url = "<?php echo site_url("register#user_agreement");?>";
        setTimeout(function(){
            location.href = url;
        },500);
    </script>
        <?php
    else:
        echo"The url is something";
    endif;

?>
<section id="user_agreement">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Before you begin!</h1>
            </div>
            <div class="col-lg-6">
                <h1 class="text-center">Warning!</h1>
                <ul>
                    <li>You don't have to signup with 
                    <?php echo site_url();?>
                    </li>
                    <li>All those content on this website are public to anyone</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h1 class="text-center">โปรดทราบ!</h1>
                <ul>
                    <li>ท่านไม่จำเป็นต้องสมัครสมาชิกกับ 
                    <?php echo site_url();?>
                    </li>
                </ul>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
</section>
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <a class="btn btn-primary g-signin2" data-onsuccess="onSignIn">Login with Google</a>
            </div>
                <!--             
                <span class="float-right">
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                     </span>
                    <hr class="my-4"/>
                -->
            <div class="col-lg-6">
                <a href="" class="btn btn-warning">Enter your info</a>
            </div>
            <div class="col-lg-12">
                <h2>Register</h2>
            </div>
            <div class="col-lg-8">
                <?php 
                    $f = "users/frm_register.php";
                    $this->load->view($f);
                ?>
            </div>
        </div>
    </div>
</section>
<script>
    function onSignIn(googleUser) {
            var id_token = googleUser.getAuthResponse().id_token;
            var gProfile = googleUser.getBasicProfile();

            var gImage =  gProfile.getImageUrl();
            var gEmail = gProfile.getEmail();
            var gName = gProfile.getName();
            
            //--sever url 
            var to_url = "<?php echo site_url("login/googleLogin");?>";
            //---data to send 
            var data = {
                g_email : gEmail,
                g_name : gName,
                g_image : gImage,
                user_token : id_token
                
            };

            $.ajax({
                type : "post",
                url : to_url,
                data : data,
                success : function(e){
                    var rs = $.parseJSON(e);
                    $(".status").html(rs.msg).show();
                    var rd = rs.url;
                    setTimeout(function(){
                        location.href = rd;                    
                    },2000);
                }
            });
            
            //console.log(`user profile ${gProfile} the email is ${gProfile.getEmail()} and the picture is ${gImage} user name is ${gName}`);
            
            /*
            var xhr = new XMLHttpRequest();
            
            
            xhr.open('POST',to_url );
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            //console.log('Signed in as: ' + xhr.responseText);
        };
        xhr.send(data);
        */
        
    }

</script>
