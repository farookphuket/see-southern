
<section id="tour">
    <div class="tour_list"></div>
    <div class="tour_pagin"></div>
</section>
<script>
$(function(){
    var $el = $("#tour");
    var tour = (function(){

        var $tour_list = $el.find(".tour_list");
        var $tour_pagin = $el.find(".tour_pagin");

        function getTourList(page=1){
            var url = "<?php echo site_url("tour/uGetTourList/");?>"+page;
            $.ajax({
                url : url,
                success : function(e){
                    var rs = $.parseJSON(e);
                    if(parseInt(rs.num_tour) !== 0){
                        $.each(rs.get_tour,function(i,v){

                            var read_url = "<?php echo site_url("tour/detail/");?>"+v.t_id;
                            var tmp = `
                            <div class="card">
                                <div class="card-header bg-primary">
                                <h2 class="text-center">${v.t_name}</h2>
                                </div>
                                <div class="card-body">
                                ${v.t_summary}
                                <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>location</th>
                                    <td>${v.t_destination}</td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td>${v.t_duration}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>${v.full_price}</td>
                                </tr>
                                </table>
                                </div>
                                <p>&nbsp;</p>
                                <span class="float-right">
                                <a href="${read_url}" target="_blank" class="btn btn-primary">Read More</a>
                                </span>
                                
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            `;
                            $tour_list.append(tmp);
                        });
                    }else{
                        $tour_list.html(`<div class="alert alert-danger">
                        <h2 class="text-center">
                        There is no tour program yet.
                        </h2>
                        </div>`);
                    }
                    
                }
            });
        }
        function getEvent(){
            getTourList();
        }
        return{getEvent:getEvent}
    })();

    tour.getEvent();
});
</script>