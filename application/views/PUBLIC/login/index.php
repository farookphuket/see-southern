  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://lh3.googleusercontent.com/o_RrX76-31iw4dr3loYWg7gfpABrEQbrpeZ-WodwB2zA1VQWYV3CmeUEmJSc4-Bl-4pgVowirKibWu5ECR4gtZGuB6YEZhewHnoCmqW2k7BIyoAEZMYEGWgLZKgBbjdb4aj6Bi7GT9M=w2400" alt="login to see-southern.com with you account on the web">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">get login to access member zone</span>
                <span class="section-heading-lower">Read me!</span>
              </h2>
              <p><strong>Please Note :</strong> if you only need to read any content from this website so the member section is will not be require because all the content from this website has been published for free to anyone.

</p>
<p class="mb-0">you also can login with your facebook account or via your google account in order to access to the member zone.</p>



                <!-- form login -->
<?php
    $frm = "PUBLIC/login/_frm_login";
    $this->load->view($frm);
?> 
                <!-- End form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<script charset="utf-8">
    $(function(){
        const $LOGIN = (function(){

            let $page_status = getEl(".status");

            //-- the form
            let $frm = getEl("#frmLogin");

            let u_email = getEl(".email");
            let u_pass = getEl(".passwd");
            let action_id = getEl(".action_id");
            let btnLogin = getEl(".btnLogin");

            function getLoginUser(){
                btnLogin.unbind();
                $frm.submit(function(e){
                    e.preventDefault();
                    $page_status.html("Loading...").show();
                    let url = $(this).attr("action");
                    let data = $(this).serialize()+"&action_id="+action_id.val();
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            location.href = rs.url;
                        },1200);
                    });

                });
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                btnLogin.on("click",function(){
                    getLoginUser();
                });
            }
            return{getEvent:getEvent}
        })();
        $LOGIN.getEvent();
    });
</script>   

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex ">
                  Thursday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>1116 Orchard Street</strong>
                  <br>
                  Golden Valley, Minnesota
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (317) 585-8468
              </p>

                <!-- form -->
                <form class="form-horizontal">
                <input type="text" class="form-control"/>
                <textarea class="form-control" name="test"></textarea>

                </form>
                <!-- end form -->
            </div>
          </div>
        </div>
      </div>
    </section>


