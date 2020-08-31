<?php $this->load->view("page_head");?>
<body>
<?php 
    $menu_default = "component/menu_default";
    $menu_user = "component/menu_user";
    $menu_admin = "component/menu_admin";
    $menu_mod = "component/menu_mod";
   
    /*
    if(!$this->session->userdata("is_login")):
        $menu = $menu_default;
    else :
       if(!$this->session->userdata("is_admin")):
           
           $menu = $menu_user;
       else :
           $menu = $menu_admin;
       endif;
        
    
    endif;

    */
    $mod = $this->session->userdata("moderate");
    $admin = $this->session->userdata("is_admin");

    $is_login = $this->session->userdata("is_login");
    $menu = $menu_default;
    if($is_login):
        if($mod):
            $menu = $menu_mod;
        elseif($admin):
            $menu = $menu_admin;
        else:
            $menu = $menu_user;
        endif;
    endif;
   
       
   $this->load->view($menu);
?>
<div class="container">
    <div class="status">
        <!--status element will be show after run the javascript command
            this element will be hidden by default
        -->
        Status Page
    </div>

	<div id="google_translate_element" style="text-align:center"></div><script type="text/javascript">
	function googleTranslateElementInit() {
  		new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>   
<?php 
$this->load->view($subview);
?>
<!--start modal area-->

<!--end modal-->
    
    
</div><!--end of div.container-->
<?php 

require("component/page_tail.php");

?>
<!--online script-->
<!--
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<!--end of online script-->
