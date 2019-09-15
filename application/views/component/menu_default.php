<!-- Navigation -->
<?php 
  $cur_url = current_url();
  $home_url = site_url();
  
  $lnTour = "#tour";
  $lnMember = "#member";
  $lnContact = "#contact";
  $lnTop = "#page-top";
  $lnRegist = site_url("register");
  if($cur_url != $home_url):
    $lnTour = site_url("#tour");
    $lnMember = site_url("#member");
    $lnContact = site_url("#contact");
    $lnTop = site_url("#page-top");
  endif;

?>

<nav class="menu fixed-top">
  <ul class="active">
  <li class="current-item"><a href="<?php echo $home_url;?>">Home</a></li>
    <li><a href="#">My Work</a></li>
    <li><a href="#">About Me</a></li>
    <li><a href="<?php echo $lnTour;?>">Tour</a></li>
    <li><a href="<?php echo $lnMember;?>">Login</a></li>
  </ul>

    <a class="toggle-nav" href="#">&#9776;</a>

      <form class="search-form">
          <input type="text" class="search" placeholder="Still in the test mode">
              <button>Search</button>
                </form>
                </nav>

