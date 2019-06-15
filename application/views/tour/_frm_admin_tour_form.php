<form class="form-horizontal" action="<?php echo site_url("tour/modSaveTour");?>" id="frmTour">
<div class="col-lg-12 bg-info">
    <h2 class="text-white text-center">for the SEO</h2>
    <hr class="my-4" />
</div>

<label for="keyurl">The url will show here after you press the save button</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="meta_key1">
    <?php 
        $url = site_url("tour/detail/");
        echo $url;
    ?>
    </span>
  </div>
  <input type="text" name="keyurl" class="form-control keyurl" id="keyurl"   aria-describedby="meta_key1" disabled>
  <input type="hidden" name="kw_id" class="kw_id" />
  <input type="hidden" name="tour_id" class="tour_id" />
</div>

<label for="keyword">The meta key word for the seo search engine</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="meta_key2">
    <?php 
        $keyword = "bird watching,one day tour ,multi day tour";
        echo $keyword;
    ?>
    </span>
  </div>
  <input type="text" name="keyword" class="form-control keyword" id="keyword" aria-describedby="meta_key2">
</div>

<label for="keydes">The meta key description for the seo search engine</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="meta_key3">
    <?php 
        $des = "bird watching one day in Phuket by {$user_name}";
        echo $des;
    ?>
    </span>
  </div>
  <input type="text" name="keydes" class="form-control keydes" id="keydes" aria-describedby="meta_key3">
</div>
<!--end of seo section -->
<!--write about tour program-->
<div class="col-lg-12 bg-primary">
    <h2 class="text-white text-center">Tour Program</h2>
</div>
<hr class="my-4" />

<label for="t_title">Tour title</label>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Program Title</span>
    </div>
    <input type="text" name="t_title" id="t_title" class="form-control t_title" aria-label="title of this tour program">
</div>

<label for="tour_fullprice">Price per person in Thaibath</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Thai Bath.</span>
  </div>
  <input type="number" name="tour_fullprice" id="tour_fullprice" class="form-control tour_fullprice" aria-label="Amount (to the nearest thai bath)">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

<label for="tour_duration">how long for this tour</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">program duration</span>
  </div>
  <input type="text" name="tour_duration" id="tour_duration" class="form-control tour_duration" aria-label="how long does this program will take">
 </div>

 <label for="tour_location">Tour program location</label>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Program location</span>
    </div>
    <input type="text" name="tour_location" id="tour_location" class="form-control tour_location" aria-label="where this program tour operate">
</div>

<label for="tour_summary">Tour summary</label>
<div class="col-lg-12">
  <textarea class="form-control tour_summary" id="tour_summary" name="tour_summary" aria-label="tour_summary" rows="15"></textarea>
</div>


<label for="tour_detail">Tour detail</label>
<div class="col-lg-12">
  <textarea class="form-control tinymce tour_detail" id="tour_detail" aria-label="tour_detail" name="tour_detail"></textarea>
</div>



<div class="col-lg-12">
  <div class="tourResult"></div>
</div>



  






</form>