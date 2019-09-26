<!-- Location show map and contact form 11-9-2019-->
    <div class="row tm-section-mt">
      

      <!-- div.col-lg-6 map -->
      <div class="col-lg-6">
        <h3 class="mb-4 tm-text-gray">Our Location</h3>
          <!-- GOOGLE MAP -->
            <div id="google-map" class="text-center mb-5">
            <!-- How to change your own map point
              1. Go to Google Maps
              2. Click on your location point
              3. Click "Share" and choose "Embed map" tab
              4. Copy only URL and paste it within the src="" field below
             -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.537223237927!2d102.28692361382696!3d13.7464446903509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311b6fa8793bac0f%3A0x5b00c756dc59f3a6!2sBurapha%20University-Sa%20Kaeo!5e0!3m2!1sen!2sth!4v1568548243628!5m2!1sen!2sth" class="google-map-iframe" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div> <!-- End Of Map -->

      <div class="col-lg-6 mb-5">
        <h3 class="mb-4 tm-text-gray">Contact Us</h3>
          <form action="#contact" method="post" class="tm-contact-form">
            <div class="row">

              <div class="form-group col-xl-6">
                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name..." required/>
              </div>

              <div class="form-group col-xl-6">
                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email..." required/>
             </div>

            </div>

            <div class="form-group">
              <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Your Message..." required></textarea>
           </div>
            <button type="submit" class="btn  tm-btn-send">Send It</button>
            </div><!-- end of div.row -->
          </form>


</div><!-- End of div.row mt -->



