<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://lh3.googleusercontent.com/8Ucn8EIy7nJqoqBwiSxKG5ihFPnov4qxnxwkTGsxg-wmZtcBE7-cB5n21XlosY1dQhwmu9ZeuOvHlFuwoT1nMbKD6HgHJ2DwSBTG_4pTW0xPK04M2tela-8NanXQnoV3Az-0c_egd-w=w2400" alt="login with your facebook account to see-southern.com">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Facebook login</span>
                <span class="section-heading-lower">Login with your facebook account</span>
              </h2>
              <p>just click on the button to login with your facebook account</p>
              <p class="mb-0">&nbsp;</p>
              <p class="mb-0">if this is your first time ever come visit us <strong>we</strong> will do create your new account on our system so you will be able to access to our member section for the next time you be back</p>
              <p class="pt-4">&nbsp;</p>
              <!-- FB START -->
            <div class="text-center">
					<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>
			</div>

            <form id="sendFB">
<input type="hidden" name="fb_name" class="fb_name" />
<input type="hidden" name="fb_email" class="falseb_email" />
<input type="hidden" name="fb_id" class="fb_id" />
                                
            </form>
            <!-- FB END -->
              
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FB Script START-->
  <script>



window.fbAsyncInit = function() {
    FB.init({
          appId      : '2569217453343065',
            cookie     : true,
            xfbml      : true,
            version    : 'v6.0'
                                    
});
      
    FB.AppEvents.logPageView();   
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
        
    });
          
      
};







function checkLoginState() {
    FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
              
    });
    
}

function statusChangeCallback(response){
    //console.log(response);
    let url = "";
    let err = 0;
    if(response.status === 'connected'){
		
        getUser();
    }else{
		err = 1;
		url = "<?php echo site_url("login/facebookLogin"); ?>"; 
    }
    
    if(err === 1){
		setTimeout(()=>{
				//location.href = url;
				console.log(`not login yet`);
			},450);
	}
}

function getUser(){
 
	FB.api("/me",function(req){
	  //console.log(req);
	  Cookies.set("fb_name",req.name);
	  
	  Cookies.set("fb_id",req.id);
	  //console.log(req.email);
		if(req.email !== undefined){
		  Cookies.set("fb_email",req.email);
		}else{
			console.log(`There is no email from ${req.name}`);
			req.email = 0;
		}
		let url = "<?php echo site_url("login/useFacebookLogin");?>";
		let data = {
				action_id : req.id,
				fb_name : req.name,
				fb_email : req.email
			};
		$.ajax({
			type : "post",
			url : url,
			data : data,
			success : (e)=>{
				let rs = $.parseJSON(e);
				//console.log(rs);
				setTimeout(()=>{
				 location.href = rs.url;	
				},550);
			}
		});
		
	});	
	
}



(function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = "https://connect.facebook.net/en_US/sdk.js";
                   fjs.parentNode.insertBefore(js, fjs);
                 
}(document, 'script', 'facebook-jssdk'));


	

</script>
<!-- FB Script END-->
