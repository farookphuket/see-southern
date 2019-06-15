<!DOCTYPE html>
<html lang="en">
<head>
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
<body>
    <?php $this->load->view($subview);?>




    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo $ln; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $ln; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo $ln; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo $ln; ?>js/grayscale.min.js"></script>


    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb67e3058a76a5d"></script>

</body>
</html>