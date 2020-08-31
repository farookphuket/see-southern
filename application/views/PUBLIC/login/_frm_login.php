<div class="container">
    
    <h2 class="section-heading mb-4">
        get login
    </h2>
<form id="frmLogin" action="<?php echo site_url("login/webLogin"); ?>" class="form-horizontal">
        <div class="form-group">
            <label for="email">Email</label>
            
            <input type="email" name="email" class="form-control email"/>
            <input type="hidden" name="action_id" value="<?php echo $action_id; ?>" />
        </div>
        <div class="form-group">
            <label for="passwd">Password</label>
            <input type="password" name="passwd" class="form-control passwd">
        </div>
<?php
    $fb_login = site_url("login/facebookLogin");
    $g_login = site_url("login/googleLogin");
?>
        <div class="form-group">
            <div class="float-right">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary btnLogin" form="frmLogin">Login</button>
                    <a  href="<?php echo $fb_login; ?>" style="color:white;font-weight:bold;" class="btn btn-info lnFacebook">facebook Login</a>
                    <a href="<?php echo $g_login; ?>" style="color:white;font-weight:bold;"  class="btn btn-primary lnGoogleLogin">Google Login</a>
                </div>
            </div>
        </div>

    </form>
</div>
         


