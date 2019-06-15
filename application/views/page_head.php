<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics for see-southern.com-->
<!-- 
    This line has been comment on the develop purpose on Wed 12 Sep 2018
    on the real server just uncomment this line 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120382485-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120382485-1');
</script>

-->


<!-- Global site tag (gtag.js) - Google Analytics for farookphuket.com
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118269307-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118269307-1');
</script>
comment this out as it is redundant with farookphuket.co
-->


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
<meta name="robots" content="noodp,noydir"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $og_url;?>"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $meta_title;?>" />
<meta property="og:description" content="<?php echo $page_description;?>" />
<meta name="description" content="<?php echo $page_description;?>"/>
<meta property="og:site_name" content="<?php echo $og_sitename;?>" />
<meta  name="keywords" content="<?php echo $page_keyword;?>">
<meta property="article:publisher" content="<?php echo $publisher; ?>" />
<link rel="canonical" href="<?php echo $og_url;?>" />


<script src="<?php echo site_url("public/js/jquery.js");?>"></script>
<!---Last add Sat 13 Oct 2018 start-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url("public/vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo site_url("public/vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">

    <!--

    just comment this out when upload top the server
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    -->

    <!-- Plugin CSS -->
    <link href="<?php echo site_url("public/vendor/magnific-popup/magnific-popup.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url("public/css/creative.min.css");?>" rel="stylesheet">

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

<title>
<?php

$url = site_url();
$title = "Welcome to {$url}";
if($meta_title):
   $title = $meta_title;
endif;
echo $title;
?>
</title>

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

</head>
