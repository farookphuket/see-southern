<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-faded rounded pt-0 mb-4">
                <h1 class="text-center">Admin Home</h1>
<p>new text</p>
            </div>

            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>ustd 
                    <span class="badge badge-success num_ustd">0</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>Visitor 
                    <span class="badge badge-success num_visit">
						
						0
					</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>user 
                    <span class="badge badge-success num_user">0</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>comment 
                    <span class="badge badge-success num_comment">0</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>Blog 
                    <span class="badge badge-success num_blog">0</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>Category 
                    <span class="badge badge-success num_cat">0</span> 
                </h2>
               </div>
            </div>
            <div class="col-lg-6 pt-4">
               <div class="alert alert-warning">
                  <h2>Template 
                    <span class="badge badge-success num_tmp">0</span> 
                </h2>
               </div>
            </div>

        </div>
        
    </div>
</section>
<script charset="utf-8">
    $(function(){

        const $NUM = (function(){
            
            let $num_tmp = getEl(".num_tmp");
            let $num_cat = getEl(".num_cat");
            let $num_blog = getEl(".num_blog");
            let $num_user = getEl(".num_user");
            let $num_ustd = getEl(".num_ustd");
            let $num_comment = getEl(".num_comment");
            let $num_visit = getEl(".num_visit");
            function getNumber(){
                let url = "<?php echo site_url("admin/getServiceNumber/"); ?>";
                $.ajax({
                url : url,
                    success : (e)=>{
                    //console.log(e);
                    let visit_url = "<?php echo site_url("visitor");?>";
                    let rs = $.parseJSON(e);
                    $num_visit.html(`<a href="${visit_url}">${rs.num_visit}</a>`);
                    $num_ustd.html(rs.num_ustd);
                    $num_tmp.html(rs.num_tmp);
                    $num_user.html(rs.num_user);
                    $num_cat.html(rs.num_cat);
                    $num_blog.html(rs.num_blog);
                    $num_comment.html(rs.num_comment);
                }
                }); 
            }

            function getSummary(){
                getNumber();
            }

            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getSummary();
            }
            return{getEvent :getEvent}
        })();
        $NUM.getEvent();
    });
</script>
