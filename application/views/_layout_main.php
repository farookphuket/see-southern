<!DOCTYPE html>
<html lang="en">

  <head>
  <meta name="google-signin-client_id" content=" XPjLJGaR_YtKMf6DpWP-Q6Z7q0e8VI3HQuOfTUYrjZc">
    <?php 
      $tag_head = "component/_tag_in_head.php";
      $this->load->view($tag_head);
    ?>

    <!-- Bootstrap core CSS -->
    <?php 
      $ln = site_url("public/");
    ?>
    <link href="<?php echo $ln; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo $ln; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!--not use on local
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      -->
    
      <!-- Custom styles for this template -->
    <link href="<?php echo $ln; ?>css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <div class="status"></div>
    <!-- Navigation -->
    <?php 
      $menu = "component/menu_default.php";
      $this->load->view($menu);
    ?>

    <!-- Header -->
    <header class="masthead">
      
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">see-southern</h1>
          <h2 class="text-white-50 mx-auto mt-6 mb-9">
            your selection tour by local guide seeing THAILAND as a local eyes.
          </h2>
          <div class="text-center addthis_inline_follow_toolbox"></div> 
          <?php 
            $check_booking = site_url("booking/checkMyBooking");
          ?>
          <a href="<?php echo $check_booking;?>" class="btn btn-primary" target="_blank">Check My Booking</a>
        </div>
        
      </div>
    </header>
    
    <!--test--> 
    <section id="user_agent">
      <div class="container">
        <div id="chk_user_agent"></div>
      </div>
    </section>
    <!--end of test-->

    
    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">One day tour,Multiday tour.</h2>
            <p class="text-white-50">
              you can select your choice as one day tour ,multi day tour as we operate the tour in the southern of THAILAND and you will see it as in a local eyes. 
            </p>
          </div>
        </div>
        <img src="<?php echo $ln; ?>img/chiaew_larn1.jpg" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="<?php echo $ln; ?>img/chiaew_larn2.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>bird watching and kayaking tour in Chiaew Larn Dam</h4>
              <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo $ln; ?>img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Misty</h4>
                  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo $ln; ?>img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Mountains</h4>
                  <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  <?php 
    $this->load->view($subview);
  ?>



    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
            <p class="text-white">Your email will show as upper case don't to worry!</p>
            <form class="form-inline d-flex" id="subscript" action="<?php echo site_url("faq/sendEmail");?>">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0 u_email" id="u_email" name="u_email"  placeholder="Enter email address..." required>
              <button type="submit" class="btn btn-primary mx-auto btnSave">Subscribe</button>
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
                        var rs = $.parseJSON(e);
                        console.log(rs);
                        $page_status.html(rs.msg).show();
                        setTimeout(function(){
                          $page_status.html("loading...").fadeOut("slow");
                          $f.trigger("reset");
                        },9000);
                        
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

    <!-- Contact Section -->
    <section id="contact" class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                <p>
                56 M.3 T.Lam-suk A.Ao-Luk Krabi Thailand 81110
                </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                <?php 
                  $mailto = $this->admin_email;
                ?>
                  <a href="mailto:<?php echo $mailto;?>" target="_blank">
                  <?php  echo $mailto;?>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <p>
                    +66 81 3974489
                  </p>
                  <p>
                    +66 95 9543920
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Your Website 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo $ln; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $ln; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo $ln; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo $ln; ?>js/grayscale.min.js"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb67e3058a76a5d"></script>


    <!--10/5/19 try google login api-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  </body>

</html>
