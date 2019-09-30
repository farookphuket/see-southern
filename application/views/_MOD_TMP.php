<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    $tag_head = "component/_tag_in_head.php";
    //$this->load->view("$tag_head");

    //---call page style
    $page_style = "component/_page_style.php";
    //$this->load->view($page_style);
  ?>
  
  <link href="<?php echo site_url(); ?>public/css/grayscale.min.css" rel="stylesheet">
  
    <link href="<?php echo site_url("public/css/custom_theme.css");?>" rel="stylesheet">




  <!-- Last edit 10-9-2019 -->
     <!-- load CSS -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">

    <!-- Google web font "Open Sans" -->


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Propper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- boostrap 4-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- https://getbootstrap.com/ -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php $menu_mod = site_url("public/css/menu_mod.css"); ?>
    
    <link rel="stylesheet" href="<?php echo $menu_mod; ?>">


</head>
<body id="page-top">
<?php 
  $menu = "component/menu_mod.php";
  $this->load->view($menu); 

?>
    <div class="status"></div>
    <!-- fix the below scroll bar 10-9-2019 
    by just add div.container
    -->
    <div class="container">
    <?php 
      $this->load->view($subview);
    ?>
    </div>

  <?php 
    $tag_tail = "component/_tag_in_tail.php";
    $this->load->view($tag_tail);
  ?>




</body>
</html>
