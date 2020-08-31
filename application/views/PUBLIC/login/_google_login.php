<div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://lh3.googleusercontent.com/8Ucn8EIy7nJqoqBwiSxKG5ihFPnov4qxnxwkTGsxg-wmZtcBE7-cB5n21XlosY1dQhwmu9ZeuOvHlFuwoT1nMbKD6HgHJ2DwSBTG_4pTW0xPK04M2tela-8NanXQnoV3Az-0c_egd-w=w2400" alt="login with your facebook account to see-southern.com">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">google login</span>
                <span class="section-heading-lower">Login with your google account</span>
              </h2>
              <p>just click on the button to login with your google account</p>
              <p class="mb-0">&nbsp;</p>
              <p class="mb-0">if this is your first time ever come visit us <strong>we</strong> will do create your new account on our system so you will be able to access to our member section for the next time you be back</p>
              <p class="pt-4">&nbsp;</p>


              <!-- G START -->
            <div class="text-center">
                <div class="g-signin2" data-onsuccess="onSignIn"></div>

	    </div>

                         
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
<script charset="utf-8">
	
	let has_cookie = 0;
	let rd_url = "";
function onSignIn(googleUser) {
          let  profile = googleUser.getBasicProfile();
          has_cookie = 1;
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
              console.log('Image URL: ' + profile.getImageUrl());
              console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            
            
            Cookies.set("g_email",profile.getEmail());
            Cookies.set("g_name",profile.getName());
            Cookies.set("has_cookie",has_cookie);
            
            setTimeout(()=>{
					//location.reload();
			},3000);
            
              
    }



$(function(){


    
    
    const $gLogin = (function(){

		let ck_email = Cookies.get("g_email");
		let ck_name = Cookies.get("g_name");
		let ck_has = Cookies.get("has_cookie");
		let $page_status = $(".status");
		let rd_url = Cookies.get("rd_url");
		
		let num_has = 0;
		
		function checkEmailCookie(){
			
			let msg = '';
			if(ck_has === 0){
				msg = `The script will running to check the url is ${rd_url}`;
				
			}else{
				msg = `Stop run this script the email is ${ck_email}`;
				ck_has = 1;
				sentRequest();
			}
			
			console.log(msg);
			
			
		}
		
		
		function sentRequest(){
			
			let url = "<?php echo site_url("login/useGoogleService");?>";
			let data = {
				gmail : ck_email,
				google_name : ck_name
			};
			
			$.post(url,data,function(e){
				
				console.log(e);
				let rs = $.parseJSON(e);
				$page_status.html(rs.msg).show();
				//alert(`redirect to ${rs.url}`);
				setTimeout(()=>{
					$page_status.html("redirecting to member zone").fadeOut("slow");
					Cookies.set("rd_url",rs.url);
					location.href = rs.url;
					
				},2000);
				//location.reload();
					
			});
			
				
			
			
		}
		
		
        function getEvent(){
			let ck_once = "";
			
			if(ck_has === undefined){
				ck_has = 0;
				
			}
			
			if(rd_url === undefined){
				rd_url = "<?php echo current_url();?>";
			}
			
			
			checkEmailCookie();
            
        }
        return{getEvent : getEvent}
    })();
    $gLogin.getEvent();

    
});
</script>
        







