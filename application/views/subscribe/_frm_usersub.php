<section id="subscribe">


    <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
            <p class="text-white">Your email will show as upper case don't to worry!</p>
            <form class="form-inline d-flex" id="subscript" action="<?php echo site_url("faq/sendEmail");?>">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0 u_email" id="u_email" name="u_email"  placeholder="Enter email address..." required>
              <button type="submit" class="btn btn-primary btn-sm mx-auto btnSave">Subscribe</button>
            </form>
            <script>
              //---jQuery
              $(function(){
                var $page_status = $(".status");

                var $el = $("#signup");
                var getMail = (function(){

                  var $f = $el.find("#subscript");
                  var u_email = $el.find(".u_email");
                  var btnSave = $el.find(".btnSave");

                  function saveMail(){
                    btnSave.unbind();
                    $f.submit(function(e){
                      e.preventDefault();
                      var url = $(this).attr("action");
                      var data = $(this).serialize();
                      $.post(url,data,function(e){
                        alert(e);
                      })
                    });
                  }
                  function getEvent(){
                    btnSave.on("click",function(){
                      saveMail();
                    });
                  }
                  return{getEvent: getEvent}
                })();
                getMail.getEvent();
              });
            </script>
          </div>
        </div>
    </div>
</section>