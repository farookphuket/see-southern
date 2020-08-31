<!DOCTYPE html>
<html>

<head>
    
<?php
    $seo_meta = "component/_seo_tag";
    $this->load->view($seo_meta);

?>
    
    <title>
        <?php echo $meta_title; ?>
    </title>

<?php
    $main_link = site_url("public/");
?>
    <!-- jQuery CDN - -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>


<!--
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   


    <link rel="stylesheet" href="<?php echo $main_link; ?>css/datepicker.css" /> 
    <script src="<?php echo $main_link; ?>js/datepicker.js"></script>   

-->

<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"

         rel = "stylesheet">


      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>




<?php
    $tag_head = "ADMIN/skin/SEP2019/_tag_in_head";
    $this->load->view($tag_head);
?>
    
</head>

<body>
    <div class="status">
        
    </div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <!-- nav-left start --> 

<?php  
    $nav_left = "ADMIN/skin/SEP2019/_nav_left";
    $this->load->view($nav_left);
?>
       
        <!-- End of nav-left -->

        <!-- Page Content  -->
        <div id="content">

            <!-- Menu top Start -->
<?php
    $nav_top = "ADMIN/skin/SEP2019/_nav_top";
    $this->load->view($nav_top);
?> 
            <!-- End of nav-top -->

            <!-- everything content START -->
<?php
    $this->load->view($subview);
?>
            
            <!-- everything content End -->


        </div>
    </div>

     <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
                                    
    });
        
});
    </script>



    </body>

</html>
