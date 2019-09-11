<section id="tour">
    
    <div class="row">
        <div class="col-lg-12">
            <?php 
                $lnTour = site_url("tour/admin");
            ?>
            <div class="float-right">
                <a class="btn btn-primary" href="<?php echo $lnTour;?>">Manage Tour page</a>
            </div>
            
        </div>
        <div class="col-lg-12">
            <h1 class="tour_head text-center">
                All tour program
                <span class="badge badge-success tour_num">0</span> item(s).
            </h1>
            <hr class="my-4" />
        </div>
        <div class="col-lg-12">
            <div class="tour_list"></div>
            <div class="tour_pagin"></div>
        </div>
    </div>
    

</section>
<script>
    $(function(){
        var $el = $("#tour");
        var $page_status = $(".status");

        var tour = (function(){
            var $tour_num = $el.find(".tour_num");
            var $tour_list = $el.find(".tour_list");
            var $tour_pagin = $el.find(".tour_pagin");

            function getTourList(page=1){
                $tour_list.html("");
                var url = "<?php echo site_url("tour/modGetTourList/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        //console.log(e);
                        
                        var rs = $.parseJSON(e);
                        var tmp;
                        if(parseInt(rs.num_tour) === 0){
                            tmp = `
                        <div class="alert alert-danger">
                            <h1 class="text-center">
                                There is no tour program yet!
                            </h1>
                        </div>
                        `;

                        $tour_list.html(tmp);

                        }else{
                            $tour_num.html(rs.num_tour);
                            $.each(rs.get_tour,function(i,v){
                                console.log(v);
                                var sale = `
                                <span class="badge badge-success">Yes</span>
                                `;
                                if(parseInt(v.mark_draft) !== 0){
                                    sale = `
                                <span class="badge badge-danger">No</span>
                                `; 
                                }
                                
                                tmp = `
                                <div class="card">
                                    <div class="card-header">
                                    <h2>${v.t_name}</h2>
                                    </div>
                                    <div class="card-body">
                                        ${v.t_summary}
                                        <p>&nbsp;</p>
                                        <div class="table-responsive">
                                        <table class="table table-bordered">
                                        <tr>
                                        <th>Date</th>
                                        <td>
                                        <strong>Create :</strong>
                                        ${v.date_create}
                                        <strong>Edit :</strong>
                                        ${v.date_update}
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>On Sale</th>
                                        <td>
                                        ${sale}
                                        </td>
                                        </tr>
                                        
                                        </table>
                                        
                                        </div>
                                    </div>

                                </div>
                                <p>&nbsp;</p>
                                `;
                                $tour_list.append(tmp);
                            });
                        }
                        
                    }
                });
            }
            function getEvent(){
                getTourList();

            }
            return{getEvent : getEvent}
        })();
        //---call
        tour.getEvent();
    });
</script>