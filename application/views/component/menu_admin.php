<!-- Navigation -->
<?php 
  $cur_url = current_url();
  $home_url = site_url();
  
  $lnTour = "#tour";
  $lnTicket = "#ticket";
  $lnUser = "#users";
  $lnAr = site_url("article/admin");
  $lnHome = site_url("admin/u/{$user_id}");

  $lnUstd = site_url("ustd");

  if($cur_url != $home_url):
    $lnTour = site_url("admin/u/{$user_id}/{$lnTour}");
    $lnTicket = site_url("admin/u/{$user_id}/{$lnTicket}");
    $lnUser = site_url("admin/u/{$user_id}/{$lnUser}");
    //$lnAr = site_url("admin/u/{$user_id}/{$lnAr}");

  endif;

  $lnSeo = site_url("seo");
?>
<!--test mainnav-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <?php echo $a_name;?>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnHome;?>">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnUstd;?>">USTD</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnTour;?>">Tour program</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="<?php echo $lnUser;?>">users</a>
            </li>


            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnAr;?>">Article</a>
            </li>

            

            

            
            <li class="nav-item">
              <!--More-->
              <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">MORE</a>
              
                <div class="dropdown-menu">
                  <a class="dropdown-item nav-link js-scroll-trigger" href="<?php echo $lnSeo;?>">SEO Key Manager</a>

                  

                  
                </div>
              </div>
            </li>




            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("users/logout");?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
