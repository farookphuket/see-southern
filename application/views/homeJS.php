<script>

//-------jQuery get Sun 14 oct 2018
$(function(){

    var $el = $("#article");
    var $t = $("#tour");
    
    

    var recent_post = (function(){
        var $post_recent = $el.find(".post_recent");
        var $num_post = $el.find(".num_post");

        //---show tour list in the landing page
        var $tour_list = $t.find(".tour_list");
        var $tour_pagin = $t.find(".tour_pagin");
        var $num_tour = $t.find(".num_tour");

        function getTourList(page=1){
            $tour_list.html("");
            var url = "<?php echo site_url("home/getTourList/");?>"+page;
            $.ajax({
                url : url,
                success : function(e){
                    var rs = $.parseJSON(e);
                    //console.log(rs);
                    
                    $num_tour.html(rs.num_tour);
                    $.each(rs.get_tour,function(i,v){
                        var read_tour = "<?php echo site_url("tour/detail/");?>"+v.t_id;
                        var tmp = `
                       
                            
                            <div class="card">
                                <div class="card-heading bg-info">
                                    <h2 class="section-heading text-white mx-auto">
                                        ${v.t_name}
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            ${v.t_summary}
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>Where do we go</th>
                                                        <td>${v.t_destination}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>How long</th>
                                                        <td>${v.t_duration}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Price</th>
                                                        <td>${v.full_price}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary btnReadTour" data-t_id="${v.t_id}">read more</button>
                                
                                </div>
                            </div>
                            <br />
                            <hr class="my-4" />
                            <br />
                        `;

                        $tour_list.append(tmp);
                    });
                    
                    $tour_pagin.html(rs.pagination);
                    
                }
            });
        }


        //-----------------------
        function readTour(id){
            //alert(`will open the page ${id} now`);
            var url = "<?php echo site_url("tour/detail/");?>"+id;
            var win = window.open(`${url}`, '_blank');
            if (win) {
                //Browser has allowed it to be opened
                win.focus();
            } else {
                //Browser has blocked it
                alert('Please allow popups for this website');
            }
        }
        //----------End of tour section

        function getPostSummary(){
            $post_recent.html("");
            
            var url = "<?php echo site_url("home/getRecentPost");?>";
            $.ajax({
                url : url,
                success : function(e){
                    var rs = $.parseJSON(e);
                    
                    $num_post.html(rs.num_ar);
                    $.each(rs.get_ar,function(i,v){
                        var read_url = "<?php echo site_url("article/read/");?>"+v.ar_id;
                        var tmp = `
                            <li>
                                <div class="content-wrap">
                                    <h1>${v.ar_title}</h1>
                                    <p>${v.ar_summary}</p>
                                    <p>&nbsp;</p>
                                    <a class="btn btn-primary" href="${read_url}" target="_blank">Read More</a>
                                    
                                    <hr class="me-4"/>
                                    <br style="clear:both"/>
                                </div>
                            </li>
                        `;

                        $post_recent.append(tmp);
                    });
                    
                }
            });

        }
        function getEvent(){
            getPostSummary();
            getTourList();
            
            //---tour pagination
            $tour_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                var cur_page = $(this).attr("data-ci-pagination-page");
                getTourList(cur_page);
            });

            //---btn read tour
            $tour_list.delegate(".btnReadTour","click",function(e){
                e.preventDefault();
                var id = $(this).attr("data-t_id");
                readTour(id);
            });
        }
        return{getEvent:getEvent}
    })();
    recent_post.getEvent();


});
</script>