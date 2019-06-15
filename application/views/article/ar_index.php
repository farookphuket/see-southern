<section id="article">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 text-center">
                <span class="float-right">
                    <a href="<?php echo site_url();?>" class="btn btn-primary">Home</a>
                </span>
                <h1>Article 2.0</h1>
                <h2>All post 
                <span class="badge badge-info num_ar">0</span> item(s).
                </h2>
            </div>
            <div class="col-lg-12">
                
                <!--dynamic content-->
                <div class="ar_list">
                <div class="no_data">
                    <h2 class="text-center bg-danger">There is no data</h2>
                </div>
                </div>
                <div class="ar_pagin">
                </div>
                <!--end of dynamic content-->

            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        var $el = $("#article");
        var $page_status = $(".status");

        var ar = (function(){

            var $ar_list = $el.find(".ar_list");
            var $ar_pagin = $el.find(".ar_pagin");
            var $ar_num = $el.find(".num_ar");
            var $no_data = $el.find(".no_data");
            $no_data.hide();

            //----------getAr 
            function getAr(page=1){

                $ar_list.html("");
                var url = "<?php echo site_url("article/getPubAr/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        if(parseInt(rs.num_ar) ===0){
                            $no_data.show();
                        }else{
                            $no_data.fadeOut("slow");
                            $ar_num.html(rs.num_ar);
                            $.each(rs.get_ar,function(i,v){
                                //console.log(v);
                                var read_url = "<?php echo site_url("article/read/");?>"+v.ar_id;
                                var tmp = `<div class="card">
                                <div class="card-header">
                                <h2 class="text-center">
                                ${v.ar_title}
                                </h2>
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-striped">
                                <tr>
                                <th>Post By</th>
                                <td>
                                <strong>User Name : </strong>
                                &nbsp;${v.ar_post_by}
                                &nbsp;|&nbsp;
                                <strong>IP : </strong>
                                &nbsp;${v.ar_post_ip}
                                
                                </td>
                                </tr>
                                
                                <tr>
                                <th>Date</th>
                                <td>
                                <strong>Create : </strong>
                                &nbsp;${v.date_add}
                                &nbsp;|&nbsp;
                                <strong>Update : </strong>
                                &nbsp;${v.date_edit}
                                
                                </td>
                                </tr>
                                </table>
                                </div>
                                
                                ${v.ar_summary}
                                
                                </div>
                                
                                <div class="card-footer">
                                <a class="btn btn-primary" href="${read_url}" target="_blank">Read</a>
                                </div>
                                
                                </div>
                                <p>&nbsp;</p>
                                `;
                                $ar_list.append(tmp);
                                
                            });
                            $ar_pagin.html(rs.pagination);
                        }
                    }
                });
            }
            //-------------------------
            //----call getEvent
            function getEvent(){
                getAr();
            }
        return{getEvent:getEvent}
        })();
        ar.getEvent();
    });
</script>