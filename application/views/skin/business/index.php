<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $meta_title; ?></title>

<?php
    $tag_head = "component/_tag_in_head";
    $this->load->view($tag_head);
?>



</head>

<body>
<?php
    $fb_service = "skin/business/facebook_service/_fb_login";
    $this->load->view($fb_service);

    $seg1 = $this->uri->segment(1);

?>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3"><?php echo $sysName; ?></span>
  <span class="site-heading-lower"><?php echo $seg1; ?></span>
  </h1>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 fixed-top" id="mainNav">

<?php
    $menu = "component/menu_default";
    if($is_login):
        $menu = "component/menu_member";
    endif;
    $this->load->view($menu);
?>
  </nav>
    <div class="status">
        
    </div>


<!-- body -->
<?php
    $g_search = "component/_google_search";
    $this->load->view($g_search);
    $this->load->view($subview);
?>
<!-- End of body -->

  <footer class="footer text-faded text-center py-5">

<?php
    $footer = "skin/business/_footer";
    $this->load->view($footer);
?>
    

  </footer>

  

</body>

</html>
