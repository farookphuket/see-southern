<section class="notice_admin" id="notice">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="text-center">
                            All notification 
                            <span class="badge badge-warning notice_num">0</span> item(s).
                        </h2>
                    </div>
                    <div class="col-md-3 set_all content-wrap">
                        <input type="checkbox" class="mark_all" name="mark_all"> mark all as read
                    </div>
                </div>
                <ul class="notice_list">
                
                </ul>
                <div class="notice_pagin"></div>
            </div>
            <?php 
                $aJS = "admin/adminJS.php";
                $this->load->view($aJS);
            ?>
        </div>
    </div>
</section>

<section class="ticket" id="ticket">
    <?php 

    $ticket = "admin/booking/book_index.php";
   // $this->load->view($ticket);
    ?>
</section>
<p>&nbsp;</p>
<section id="tour">
    <?php 
        $tour = "admin/tour/index.php";
       // $this->load->view($tour);
    ?>
</section>
<section id="article">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Recent Post 
            <span class="badge badge-success ar_num">0</span> item(s).
            </h1>
            <hr />
        </div>
        <div class="col-lg-12">
            <div class="ar_list"></div>
            <div class="ar_pagin"></div>
            <div class="float-right">
                <a class="btn btn-primary btn-sm" href="<?php echo site_url("article/admin/");?>">See All</a>
            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        var $el = $("#article");
        var ar = (function(){
            var $ar_list = $el.find(".ar_list");
            var $ar_pagin = $el.find(".ar_pagin");
            var $ar_num = $el.find(".ar_num");
            function getArList(page=1){
                $ar_list.html("");
                var url = "<?php echo site_url("article/adminGetAllPost/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        console.log(
                            rs
                        );
                        
                        $ar_num.html(rs.num_ar);
                        $.each(rs.get_ar,function(i,v){
                            //console.log(v);
                            
                            var app = `<span class="badge badge-success">Yes</span>`;
                            if(parseInt(v.ar_is_approve) === 0){
                                app = `<span class="badge badge-danger">No</span>`;
                            }

                            var pub = `<span class="badge badge-success">Yes</span>`;
                            if(parseInt(v.ar_show_public) === 0){
                                pub = `<span class="badge badge-danger">No</span>`;
                            }

                            var index = `<span class="badge badge-success">Yes</span>`;
                            if(parseInt(v.ar_show_index) === 0){
                                index = `<span class="badge badge-danger">No</span>`;
                            }



                            var tmp = `
                            <div class="card">
                                <div class="card-header">
                                <h1 class="text-center">${v.ar_title}</h1>
                                </div>
                                <div class="card-body">
                                ${v.ar_summary}
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                <tr>
                                <th>Post By</th>
                                <td>${v.ar_post_by}</td>
                                </tr>

                                <tr>
                                <th>Post IP</th>
                                <td>${v.ar_post_ip}</td>
                                </tr>

                                <tr>
                                <th>Date</th>
                                <td>
                                <strong>Create :</strong> ${v.date_add}
                                <strong>Edit :</strong> ${v.date_edit}
                                </td>
                                </tr>

                                <tr>
                                <th>Status</th>
                                <td>
                                <strong>Approve :</strong> ${app}
                                <strong>Index :</strong> ${index}
                                <strong>Public :</strong> ${pub}

                                </td>
                                </tr>

                                </table>
                                </div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            `;
                            $ar_list.append(tmp);
                        });

                        $ar_pagin.html(rs.pagination);
                        
                    }
                });
            }
            //--------------
            function getEvent(){
                getArList();

                //--pagination
                $ar_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    var cur_page = $(this).attr("data-ci-pagination-page");
                    getArList(cur_page);
                });
            }
            return{getEvent:getEvent}
        })();
       ar.getEvent();
    });
</script>

<p>&nbsp;</p>
<section class="users" id="users">
    <?php 
        $users = "admin/user/user_index.php";
      //  $this->load->view($users);
    ?>
</section>
