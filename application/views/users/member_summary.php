<section class="member" id="about">
      <div class="container tm-container-2">
        
      <div class="row">
      
         <div class="col-lg-12">
            <h2 class="tm-welcome-text text-white">How's going on with you   
            <?php echo $user_name;?> ?
            </h2>
            <p style="color:white;font-weight:bold;">
            Want to share your status with your friend.
            </p>
            
          </div>

      <div class="row tm-section-mb test_script">
        
        <div class="col-lg-12">

          <!-- item start -->
            <div class="tm-timeline-item">
            <div class="tm-timeline-item-inner">
                <img src="http://funnyandhumorous.com/thumb/funny-men-1.jpg" class="tm-img-timeline rounded-circle">
                <div class="tm-timeline-connector">
                      <p class="mb-0">&nbsp;</p>
                      </div>
              <div class="tm-timeline-description-wrap">
                <div class="tm-bg-dark tm-timeline-description">
                  <h3 class="tm-text-green tm-font-400">
                  <form action="<?php echo site_url("users/userStatusSave"); ?>" id="user_st">
                    <input type="text" class="form-control img_url" name="img_url">
                    <input type="hidden" name="st_id" class="st_id">
                  </h3>
                                     <p>
                    <textarea class="form-control st_body" name="st_body" cols=85></textarea>
  
                  </p>
                                     
                  </form>
                  <div class="frmResult">
                  </div>
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary btnSave" form="user_st">
                      Post
                    </button>
                  </div>
                </div>
              </div>
                
            </div>
              <div class="tm-timeline-connector-vertical"></div>
 
          </div>

          <!-- item end -->

      <!-- The preview div -->
      <div class="frmPreview"></div>
      
      <!-- End of the preview -->


          <!-- show the list of status -->
          <div class="ls_tmp">

          </div>
          <!-- END Of show list -->

        </div>
    
      </div>
      <script>
$(function(){ 

  var $p = $(".test_script");

  var sp = (function(){ 

    var $ls_tmp = getEl(".ls_tmp");
    var $frmResult = getEl(".frmResult");
    var img_url = getEl(".img_url");

    var st_body = getEl(".st_body");
    var $frmPreview = getEl(".frmPreview"); 
    //-- the form
    var $frm = getEl("#user_st");
    var btnSave = getEl(".btnSave");
    var usr_name = "<?php echo $user_name; ?>";

    function getStatusList(page=1){
      $ls_tmp.html("");
      var url = "<?php echo site_url("users/userListStatus/"); ?>"+page;
      $.ajax({
        url : url,
          success : function(e){
            console.log(e);
            var rs = $.parseJSON(e);
            $.each(rs.get,function(i,v){
              var body = v.st_body;

              $ls_tmp.append(body);
            });
          }
      });
    }

    function getTmp(){
      $frmPreview.html("");
      var tmp = "Copy and paste your image url here";
      var today = new Date().toLocaleString();
      if(!img_url.val()){
        img_url.attr("placeholder",tmp);
      }else{
        tmp = `<div class="tm-timeline-item">
            <div class="tm-timeline-item-inner">
                <img src="${img_url.val()}" class="tm-img-timeline rounded-circle responsive">
                <div class="tm-timeline-connector">
                      <p class="mb-0">&nbsp;</p>
                      </div>
              <div class="tm-timeline-description-wrap">
                <div class="tm-bg-dark tm-timeline-description">
                  <h3 class="tm-text-green tm-font-400">
                    Change your title here! เปลี่ยนหัวเรื่อง
                  </h3>
                  <p>
                    Change your detail here! <br />เปลี่ยนข้อความที่นี่เป็นข้อความของคุณ
                  </p>
                  <p class="tm-text-green float-left mb-0">
                  ${ usr_name } date on ${ today }
                  </p>
                  <div class="float-right">
                    <a class="btn btn-primary" href="YOUR-LINK-HERE" style="font-weight;color:white;">Read More</a>
                  </div>
                  <p>&nbsp;</p>
                </div>
              </div>
                
            </div>
              <div class="tm-timeline-connector-vertical"></div>
 
          </div>
<p>&nbsp;</p><p>&nbsp;</p>

`;
      }
      var msgShow = `<p class="alert alert-warning">
        click elsewhere to see the result กดที่อื่นเพื่อดู
        </p>
        <p class="alert alert-danger"> 
        Click Save button to save your post กดปุ่ม Post เพื่อจัดเก็บ
        </p>`;
      $frmResult.html(msgShow);
      $frmPreview.html(tmp);
      st_body.val(tmp);
      //$ls_tmp.html(tmp);
    }

    function showResult(){
      var tmp = st_body.val();
      $frmPreview.html(tmp);
      //$ls_tmp.html(tmp);
    }

    function saveStatus(){
      btnSave.unbind();
      $frm.submit(function(e){ 
        e.preventDefault();
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url,data,function(o){ 
          var rs = $.parseJSON(o);

          $frmResult.html(rs.msg).fadeOut("slow");
          //$frmPreview.html();
          setTimeout(function(){ 
            $frmResult.html("").fadeOut("slow");

            $frmPreview.html("");
            $frm.trigger("reset");
            getSummary();
          },2000);
          

        });
      });
    }

    function getSummary(){
      getStatusList();
    }

    function getEl(el){
      return $p.find(el);
    }
    function getEvent(){ 

        getSummary();
        //showResult();
        img_url.on("blur",function(){ 
          getTmp();
        });

        st_body.on("blur",function(){ 
         showResult();
        });

        //--btn submit
        btnSave.on("click",function(){ 
          saveStatus();
        });

    }
    return{ getEvent:getEvent }
  })();

  sp.getEvent();

});
      </script>

<?php
  $frm_status = "users/_user_status_form";
  $this->load->view($frm_status);

?>   
     
    <!-- end of status text form -->
    
<?php 
    //$tkJS = "booking/own_bookingJS.php";
    $own_booking = "booking/own_booking.php";
    $this->load->view($own_booking);
    //$this->load->view($tkJS);
?>




<?php
  $share = "article/user_ar";
  $this->load->view($share);
?>


    </div>
  </div>
</section>


