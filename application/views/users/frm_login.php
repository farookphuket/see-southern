<div class="container tm-container-2">
    

     <div id="member" class="row tm-section-mt">
    <div class="col-lg-6">
      <h1>Warning</h1>
      <ol>
        <li>
          You do not have to to "register" or "SignIn"
        </li>
         <li>you do not have to be a member</li> 
      </ol>
      
    </div>
		<div class="col-lg-6">
			<h1>Login Form</h1>
      <form action="<?php echo site_url("login/getLogin");?>" id="frm_login">
			<div class="form-group">
				<label for="user_name">
					User Name
				</label>
				<input class="form-control user_name" type="text" name="user_name">
			</div>
			<div class="form-group">
				<label for="user_pass">
					Password
				</label>
				<input class="form-control user_pass" type="password" name="user_pass">
			</div>
                        <div style="margin-left:5px;" class="row">
                           <button type="submit" class="btnLogin tm-btn-send btn-sm">Login</button>
                           <a href="<?php echo site_url("users/forgotpass"); ?>" style="font-weight:bold;color:white;" class="btn tm-btn-send btnForgot btn-sm">Forgot Pass</a>
			<a href="<?php echo site_url("register"); ?>" class="tm-btn-send btnRegister btn-sm" style="color:white;font-weight:bold">Register</a>

 
                        </div>
						</form>
		</div>
	</div>
</div>
<script>
$(function(){
  var $p = $("#member");
  var $page_status = $(".status");
  var lg = (function(){

    var $f = getEl("#frm_login");
    var u_name = getEl(".user_name");
    var u_pass = getEl(".user_pass");
    var btnLogin = getEl(".btnLogin");


    function sendLogin(){
      btnLogin.unbind();
      $f.submit(function(e){
        e.preventDefault();
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url,data,function(e){
          //$page_status.html(e).show();
          var rs = $.parseJSON(e);
          var url = rs.url;
          $page_status.html(rs.msg).show();
          if(parseInt(rs.error) !== 0){
            url = "<?php echo site_url("#member"); ?>";
            console.log(`The Error come url is ${url}`);
          }
          console.log(`There are no Error the url is ${url}`);
          setTimeout(function(){
            $page_status.html("").fadeOut("slow");
            location.href = url;
          },4000);
        });

      });
    }

    //------getEl --
    function getEl(el){
      return $p.find(el);
    }
    function getEvent(){
      $f.trigger("reset");
      u_name.on("mouseenter",function(){
        u_name.focus();
      });
      btnLogin.on("click",function(){
        sendLogin();
      });
    }
    return{getEvent:getEvent}
  })();
  lg.getEvent();
});

</script>  

