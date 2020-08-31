<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://lh3.googleusercontent.com/bctg53f3G2CfFQ_mDwEWQiy6ygW31yB0iJ1HeuoCmQOnsZ8AJzcGoEGi-NuBa20Lix8woJVf5nLzDOANswzXeKvYvdzvIWmgUmVuPmOlv5i24MF2cMw7UC22y7OQYE6bU_JSe0TumrU=w2400" alt="logout from see-southern.com">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">you're signed out</span>
                <span class="section-heading-lower">thank you</span>
              </h2>
<?php
    $our_web = site_url();
?>
    <p>you have log-out from <?php echo $our_web; ?></p>
              <p class="mb-0">&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script charset="utf-8">
    $(function(){
        const url = "<?php echo site_url(); ?>";
        setTimeout(()=>{
            location.href = url;
        },8000);
    });
</script>
