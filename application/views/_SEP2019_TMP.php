<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?php echo $meta_title; ?>
    </title>

    <!-- jQuery CDN - -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
   

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo site_url("public/css/menu_mod.css"); ?>">

    <!-- custom theme  -->
    <link rel="stylesheet" href="<?php echo site_url("public/css/custom_theme.css"); ?>">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>






<!-- change the tinymce to call it from the online -->
<script src="<?php echo site_url("public/js/tinymce/tinymce.min.js"); ?>"></script>
<script type="text/javascript">
//tinymce.remove();
tinymce.init({
    selector: "textarea.tinymce",
    height : 350,
    
    setup: function(editor){
        editor.on('change',function(){
            tinymce.triggerSave();
        });
    },
    
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table  paste"
    ],
    
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

    
</head>

<body>
    <div class="status">
        
    </div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <!-- nav-left start --> 

<?php  
    $nav_left = "component/_nav_left";
    $this->load->view($nav_left);
?>
       
        <!-- End of nav-left -->

        <!-- Page Content  -->
        <div id="content">

            <!-- Menu top Start -->
<?php
    $nav_top = "component/_nav_top";
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
