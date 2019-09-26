<?php 
    $gTools = "component/google_tool.php";
    $this->load->view($gTools);
?>

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
<title><?php echo $meta_title;?></title>
<meta name="robots" content="noodp,noydir"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $og_url;?>"/>
<meta property="og:locale" content="en_US" />
<meta property="og:title" content="<?php echo $meta_title;?>" />
<meta property="og:description" content="<?php echo $page_description;?>" />
<meta name="description" content="<?php echo $page_description;?>"/>
<meta property="og:site_name" content="<?php echo $og_sitename;?>" />
<meta  name="keywords" content="<?php echo $page_keyword;?>">
<meta property="article:publisher" content="<?php echo $publisher; ?>" />
<link rel="canonical" href="<?php echo $og_url;?>" />




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



<!-- this template style has use on 11-Sep-2019 -->
<link rel="stylesheet" href="<?php echo site_url("public/css/templatemo-style.css");?>">






<!-- only for the menu -->
<?php 
    $menu_ln = site_url("public/");
    $menu_css = $menu_ln."css/menu.css";
?>

  
    <link rel="stylesheet" href="<?php echo $menu_css; ?>">
    <script>
    jQuery(document).ready(function() {
      jQuery('.toggle-nav').click(function(e) {
            jQuery(this).toggleClass('active');
                jQuery('.menu ul').toggleClass('active');

    e.preventDefault();
  
      });

    });
  
    </script>
<!-- End of menu section -->
    <!--

    just comment this out when upload top the server
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    -->

    

    

    <link href="<?php echo site_url("public/css/custom_theme.css");?>" rel="stylesheet">

<!--
   <script src="<?php echo site_url("public/vendor/jquery/jquery.min.js");?>"></script>
-->
    <!--end of Sat 13 Oct 2018 -->

    <!--get the jQuery ui
    jquery.js
    jquery-ui.js
    jquery-ui.css
    --> 
    
    <script src="<?php echo site_url("public/js/jquery-ui/jquery-ui.js");?>"></script>
    <link href="<?php echo site_url("public/js/jquery-ui/jquery-ui.css");?>" rel="stylesheet">

    <!--end of jQuery ui Mon 12 Nov 2018-->

<link rel="icon" 
      type="image/ico" 
      href="<?php echo site_url('public/img/see-southernLOGO2.ico');?>" />   
      <script src="<?php echo site_url("public/js/tinymce/tinymce.min.js");?>"></script>



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
readonly : 1,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


<!--Add this line on 6-6-19-->
<script>
    $(function(){
        var $el = $("body");
        
        var browser = (function(){
            var showRes = $el.find("#chk_user_agent");
            
            //--getBrowser
            function getBrowser(){
                var cur_browser = "<?php echo $browser_name;?>";
                var fox_browser = "Firefox";
                var msg = "";
                showRes.html("").hide();
                if(cur_browser === fox_browser){
                    msg = `
                    <div class="alert alert-danger">
                    <p>Dear user your browser is ${fox_browser}! which is still not support for this website!</p>
                    <p>to use this website functionally please change your browser such as Google Chrome or Opera instead!</p>
                    </div>
                    `;
                    showRes.append(msg).show();
                }
                setTimeout(function(){
                    showRes.html("Loading...").fadeOut("slow");
                },9000);
            }
            
            function getEvent(){
                getBrowser();
            }
            return{getEvent:getEvent}
        })();
        browser.getEvent();
    });
</script>


