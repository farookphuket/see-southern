<section id="member">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">You have logout from your account.</h1>
        </div>
    </div>




</section>
<!--try on 14/5/19 7:30 a.m.-->
<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>


<!-- for the developing jst comment this out  -->
<script>
$(function(){
  
  setTimeout(function(){
    window.location.href = "<?php echo site_url(); ?>";
  },4000);

});
</script>

<!-- COMENT THIS ABOVE LINE CODE ON LIVE SERVER -->

<!--
on the live server just comment this out
<script>
        document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=https://www.see-southern.com/";
</script>
-->
