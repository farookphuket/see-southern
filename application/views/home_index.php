
<!-- Change new theme on 11-Sep-2019 -->
 <div class="container tm-container-2">
    <div class="row">
	    <div class="col-lg-12">
	    <h2 class="tm-welcome-text">Welcome Friends.</h2>
	    </div>
    </div>

    <div class="row tm-section-mb user_status">
      <div class="col-lg-12">

        <div class="st_list"></div>
        <div class="st_pagin"></div>


    </div>
	</div>	
<script> 
$(function(){ 
    
  var $ST = $(".user_status");
  var st = (function(){ 

    var $st_list = getEl(".st_list");
    var $st_pagin = getEl(".st_pagin");

    function getUserStatusList(page=1){
      $st_list.html("");
      var url = "<?php echo site_url("home/userStatusList/"); ?>"+page;
      $.ajax({ 
      url : url,
        success : function(e){
          var rs = $.parseJSON(e);
          var tmp = "";
          if(!rs.get_status.length){
            tmp = `<div class="alert alert-danger"><h2 class="text-center">There is no data</h2></div>`; 
          }else{ 
            $.each(rs.get_status,function(i,v){ 
                
                var tmp = `<div class="container">
                    ${v.st_body}
                    </div>`;
              $st_list.append(tmp);
          });

            if(rs.pagination){
              $st_pagin.html(rs.pagination);
            }

          } 
          $st_list.append(tmp);
        
        }
      });
    }

    function getSummary(){
      getUserStatusList();
    }
    function getEl(el){
      return $ST.find(el);
    }
    function getEvent(){
      getSummary();
    }
    return{ getEvent:getEvent }
  })();
  st.getEvent();

});
</script>




		<!-- Recenly post from Article -->
		 <div class="row"><!-- row title -->
			<div class="col-lg-12">
			  <h2 class="tm-welcome-text">Recenly Post.</h2>
			</div>
    </div><!-- End of row title -->
    
    <!-- row content list start -->
		<div class="row tm-section-mb article_section">
			<div class="col-lg-12">



		    <!-- item number 4 start -->
        <div class="ar_list">
        </div>
        <div class="pagination ar_pagin">
        </div>
        
		    <!-- End of tm-timeline-item -->


			</div><!-- end of div.col-lg-12 -->
		</div>
      <script>
        //--- JS script for article home index
       
        $(function(){

        var $A = $(".article_section");
        var ar = (function(){
          var $ar_list = getEl(".ar_list");
          var $ar_pagin = getEl(".ar_pagin");




          function getArticleList(page=1){
              $ar_list.html("");


            /*
            var tmp = `<div class="tm-timeline-item">
                <div class="tm-timeline-item-inner">
                  <img src="https://car-images.bauersecure.com/pagefiles/89936/1752x1168/bmw_concept4_045.jpg?mode=max&quality=90&scale=down" class="rounded-circle tm-img-timeline ">
                    <div class="tm-timeline-connector">
				              <p class="mb-0">&nbsp;</p>
			              </div>
                      
			              <div class="tm-timeline-description-wrap">

                          
				              <div class="tm-bg-dark tm-timeline-description">
                            
                        <h3 class="tm-text-yellow tm-font-400">
                            From javascript
                        </h3>
                          <p style="color:white;font-weight:bold;">
                            to make this as my guide line. the background can be preform by add tm-bg-dark or tm-bg-dark-light
                          </p>

                        <p class="tm-text-cyan float-right mb-0">
                          Another Story . 9 July 2018
                        </p>


                      </div>
                    </div><!-- end of description-wrap -->


                </div>
              </div>
`;
             */

            var url = "<?php echo site_url("home/getRecentPost/") ?>"+page;
            $.ajax({
            url : url,
              success : function(e){
                var rs = $.parseJSON(e);
                //alert(`The length is ${rs.get_ar.length}`);
                if(rs.pagination){
                  $ar_pagin.html(rs.pagination);
                }
                $.each(rs.get_ar,function(i,v){
                 // console.log(v);
                  var readUrl = "<?php echo site_url("article/read/"); ?>"+v.uniq_id;
                  var tmp = `${v.ar_summary}`;
                  $ar_list.append(tmp); 
                });
              }
            });
          }

          function getEl(el){
            return $A.find(el);
          }
          function getEvent(){
           getArticleList(); 
           $ar_pagin.delegate(".pagination a","click",function(e){ 
             e.preventDefault();
             var page = $(this).attr("data-ci-pagination-page");
             getArticleList(page);
           });
          }
          return{ getEvent:getEvent }
        })();
        ar.getEvent();




        });
      </script>




</div>



