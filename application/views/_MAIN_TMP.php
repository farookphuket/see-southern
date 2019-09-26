
 <?php 
      $ln = site_url("public/");
  ?>

<!DOCTYPE html>

<html lang="en">



<head>

<?php 
    $tag_head = "component/_tag_in_head";
    $this->load->view($tag_head);
?> 


<!-- 



Timeless Template 



http://www.templatemo.com/tm-517-timeless



-->
</head>



<body>
    <div class="status"></div>
    <?php 
        $menu = "component/menu_default";
        $this->load->view($menu);
    ?>
    <div class="container">





      <!-- row site title and video -->
     
        <?php 
          $tag_video = "component/_tag_video_title";

          $cur_url = current_url();
          $home_url = site_url();
          if($cur_url == $home_url):
	          $this->load->view($tag_video);
          endif;

        ?>    
        <!-- End of video and site title -->
	<?php
		$this->load->view($subview);
	?>	
       	<!-- will move this to "view/home_index.php" -->
            <!--  row -->

            <hr>



        <!-- section person_credit move to file "_tag_person_credit.php" 11-Sep-2019 -->
        <?php 
		$tag_person = "component/_tag_person_credit";
		$this->load->view($tag_person);
        ?>
            
        <!-- Tag person_credit END -->

        <hr>
          
        <!-- Location Map and Contact form move to "_tag_contactus.php" -->

        <?php
          $tag_contact = "component/_tag_contactus";
          $this->view($tag_contact);
        ?>
        

        <!--- End Location and Contact form -->

        <hr>

	<!-- Load user login form -->
<?php 
          $f_login = "users/frm_login";
          $this->load->view($f_login);
?>
	<!-- End of user Login form -->
	<hr>
        <!-- Footer -->
        <?php 
          $tag_foot = "component/_tag_footer";
          $this->load->view($tag_foot);
        ?>
        <!-- go to file "_tag_footer.php" -->
    </div>

    <!-- .container -->

 
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb67e3058a76a5d"></script>
</body>

</html>

