<!-- Navigation -->
<?php 


$cur_url = current_url();
$home_url = site_url();

//---home link
$lnHome =  site_url("users/u/{$user_id}/#page-top");

//---lnArticle
$lnAr = "#user_share";

//--lnBooking
$lnBooking = "#user_ticket";
if($cur_url != $home_url):
  $lnHome = site_url("users/u/{$user_id}/#page-top");
  $lnAr = site_url("users/u/{$user_id}/{$lnAr}");
  $lnBooking = site_url("users/u/{$user_id}/{$lnBooking}");
endif;


?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo $lnHome;?>">Ornnicha-J 1.0</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnHome;?>">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="<?php echo $lnBooking;?>">my booking</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo $lnAr;?>">My Share</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("users/logout");?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>