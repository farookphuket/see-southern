<section id="tour">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <span>
                    <a href="<?php echo site_url("admin");?>" class="btn btn-primary btn-lg lnHome">Home</a>
                </span>
                <span class="float-right">
                    <a class="btn btn-primary btn-lg lnCreate">Create New Tour</a>
                </span>
                
            </div>
            <div class="col-lg-12">
                <h1 class="text-center tHead">
                Tour program 
                <span class="badge badge-success tNum">0</span> item(s).
                </h1>
                <div class="tour_list"></div>
                <div class="tour_pagin"></div>
            </div>
        </div>
    </div>


    <div class="modal fade mdTourForm">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title frmHead">Add new Tour</h1>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>

                <div class="modal-body">
                
                    <?php 
                        $frm = "admin/tour/_frm_admin_tour_form.php";
                        $this->load->view($frm);
                    ?>
                </div>

                <div class="modal-footer">
                    <div class="input-group">
                        <select class="custom-select mark_draft" id="mark_draft" name="mark_draft">
                            <option selected>Choose...</option>
                            <option value=0>Public</option>
                            <option value=1>Save as draft</option>
                            
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-outline-secondary btnSave" type="submit" form="frmTour">Save</button>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>

</section>

<!--js script-->
<script>
    $(function(){
        var $el = $("#tour");

        var $page_status = $(".status");
        var tour = (function(){
            var $tour_list = $el.find(".tour_list");
            var $tour_pagin = $el.find(".tour_pagin");
            var $tNum = $el.find(".tNum");

            //---link
            var lnCreate = $el.find(".lnCreate");

            //---modal
            var $md = $el.find(".mdTourForm");
            var $fHead = $el.find(".frmHead");

            //---form
            var $f = $el.find("#frmTour");
            var $fResult = $el.find(".tourResult");
            var kw_id = $el.find(".kw_id");
            var t_id = $el.find(".tour_id");

            //--seo
            var keyurl = $el.find(".keyurl");
            var keyword = $el.find(".keyword");
            var keydes = $el.find(".keydes");

            var draft = $el.find(".mark_draft");
            
            var location = $el.find(".tour_location");
            var price = $el.find(".tour_fullprice");
            var duration = $el.find(".tour_duration");
            
            var t_name = $el.find(".tour_title");
            var t_sum = $el.find(".tour_summary");

            //---checkbox when the user click will show html template in tour summary textarea
            var sum_tmp = $el.find(".sum_tmp");
            var show_sum = $el.find(".show_sum");

            //--button
            var btnSave = $el.find(".btnSave");
            
            function getTourList(page=1){
                $tour_list.html("");
                var url = "<?php echo site_url("tour/modGetTourList/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        //console.log(rs);
                        getTour(rs);
                        $tNum.html(rs.num_tour);
                        $.each(rs.get_tour,function(i,v){
                            var onSale = `
                            <span class="badge badge-success">Yes</span>
                            `;

                            if(parseInt(v.mark_draft) !== 0){
                                onSale = `
                            <span class="badge badge-danger">No</span>
                            `;
                            }
                            var tmp = `
                            <div class="card">
                                <div class="card-header">
                                <h1 class="card-title">${v.t_name}</h1>
                                
                                </div>
                                <div class="card-body">
                                    <p>
                                        ${v.t_summary}
                                    </p>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Price</th>
                                            <td>
                                            ${v.full_price}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>On Sale</th>
                                            <td>
                                            ${onSale}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Location</th>
                                            <td>
                                            ${v.t_destination}
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    </div>
                                </div>
                                <div class="card-footer">
                                <div class="float-right">
                                <button class="btn btn-primary btn-sm lnEdit" data-t_id="${v.t_id}">Edit</button>
                                <button class="btn btn-danger btn-sm lnDel" data-t_id="${v.t_id}">Delete</button>
                                </div>
                                
                                </div>
                            </div>
                            <br />
                            `;
                            $tour_list.append(tmp);
                        });
                        $tour_pagin.html(rs.pagination);
                    }
                });
            }
            //-----
            //---getTour
            function getTour(obj){
                var numT = parseInt(obj.num_tour);
                var get_tour = obj.get_tour;
                
                $.each(get_tour,function(i,v){
                    
                    if(v.t_id){
                        t_name.val(v.t_name);
                        t_sum.val(v.t_summary);
                        
                    }else{
                        t_name.attr('placeholder','Tour Title from nothing');
                    }
                    
                });
                
            }
            //-------
            //----frmTour
            function frmTour(cmd,id){
                $f.trigger("reset");
                $fHead.html("Add new Tour");
                tinymce.activeEditor.setMode("design");
                switch(cmd){
                    case"edit":
                        var url = "<?php echo site_url("tour/modEditTour/");?>"+id;
                        var titleShow = "";
                        $.ajax({
                            url : url,
                            success : function(e){
                                var rs = $.parseJSON(e);
                                $.each(rs.get_tour,function(i,v){
                                    console.log(v);
                                    //---seo
                                    keyurl.val(v.kw_canonical);
                                    keyword.val(v.kw_page_keyword);
                                    keydes.val(v.kw_page_des);


                                    draft.val(0);
                                    if(parseInt(v.mark_draft) !== 0){
                                        draft.val(1);
                                    }
                                    t_name.val(v.t_name);
                                    t_sum.val(v.t_summary);
                                    tinymce.activeEditor.setContent(v.t_program);
                                    
                                    t_id.val(v.t_id);
                                    kw_id.val(v.kw_id);

                                    //---location
                                    location.val(v.t_destination);

                                    //--price 
                                    price.val(v.full_price);

                                    //---duration
                                    duration.val(v.t_duration);

                                    titleShow = v.t_name;
                                });
                                $fHead.html(`editing ${titleShow}...`);
                                $($md).modal("show");
                            }
                        })
                    break;
                    default:
                        t_name.attr('placeholder','Tour title');
                        $($md).modal("show");
                    break;
                }
            }
            //-----------
            //----sumTmp
            function sumTmp(){
                t_sum.val("");
                var tmp = `Edit text in this box`;
                if(sum_tmp.is(":checked") === true){
                    var imgUrl = "https://lh3.googleusercontent.com/gm_Bt5qxGFEnQFVW19B-K4ErEuNyUT7Ybs_U_5jNFTfe1gtTCCYB-IahaZNX5vTNqz9txvBgxf3OxHrmuwurNS9Ibfwp_JNFkTluk-89iJZCGStKM1mMKxeyoBu_s5P2j9CsX3ZZGw=w2400";
                    tmp = `<div class="row">
                        <div class="col-md-4">
                            <a href="${imgUrl}" target="blank" alt="see the full size image">
                            <img src="${imgUrl}" class="responsive"/>
                            </a>
                            <p>Picture here</p>
                        </div>
                        <div class="col-lg-8">
                            <p>Start the paragraph</p>
                        </div>
                    </div>
                    `;
                }
                t_sum.val(tmp);
            }
            //-----------
            //----showSum
            function showSum(){
                var s = t_sum.val();
                show_sum.html(s);
            }
            //-----seoAutoSave
            function seoAutoSave(id){
                $fResult.html("");
                //alert(`id to safe ${id} naka`);
               var url = "";
               if(!id){
                url = "<?php echo site_url("tour/seoFirstSave/");?>";
               }else{
                url = "<?php echo site_url("tour/seoAutoSave/");?>"+id;
               }
               //alert(`The url to save is ${url} naka`);
               var data = {
                    tour_title : t_name.val(),
                    kw_id : kw_id.val(),
                    tour_id : t_id.val(),
                    keyword : keyword.val(),
                    keydes : keydes.val(),
                    keyurl : keyurl.val(),
               };
               $.ajax({
                    type : "post",
                    url : url,
                    data : data,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        var tmp_msg = `
                        <span class="badge badge-success">
                        ${rs.msg}
                        </span>
                        `;
                        console.log(rs);
                        var edit_id = 0;
                        $.each(rs.get_tour,function(i,v){
                            edit_id = v.t_id;
                        });
                        $fResult.html(tmp_msg);
                        frmTour("edit",edit_id);
                    }
               });
            }
            //-----saveTour
            function saveTour(){
                btnSave.unbind();
                $f.submit(function(o){
                    o.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize()+"&mark_draft="+draft.val();
                    
                    $.post(url,data,function(e){
                        var rs = $.parseJSON(e);
                        $fResult.html(rs.msg);
                    });
                });
            }
            //-----delTour
            function delTour(cmd,id){
                
                switch(cmd){
                    case"delete":
                        var url = "<?php echo site_url("tour/modDelTour/");?>"+id;
                        $.ajax({
                            url : url,
                            success : function(e){
                                var rs = $.parseJSON(e);
                                $page_status.html(rs.msg).show();
                                setTimeout(function(){
                                    $page_status.html("loading...").fadeOut("slow");
                                    getSummary();
                                },5000);
                                
                            }
                        });
                    break;
                    default:
                        
                        var ms = `You are about to delete tour id ${id} this operation cannot be undo\n are you sure to delete?`;
                        if(confirm(ms) === true){
                            delTour("delete",id);
                        }else{
                            return false;
                        }
                    break;
                }
            }
            //-----------
            function getSummary(){
                getTourList();
            }
            function getEvent(){
                getSummary();
                //--edit button click
                $tour_list.delegate(".lnEdit","click",function(){
                    var id = $(this).attr("data-t_id");
                   frmTour("edit",id);
                });

                //--delete button
                $tour_list.delegate(".lnDel","click",function(){
                    var id = $(this).attr("data-t_id");
                    delTour(null,id);
                });

                //---pagination
                $tour_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    var cur_page = $(this).attr("data-ci-pagination-page");
                    getTourList(cur_page);
                });
                //---lnCreate
                lnCreate.on("click",function(){
                    frmTour();
                });

                //---autoSave
                t_name.on("blur",function(){
                    var id = t_id.val();
                    seoAutoSave(id);
                });

                //---need html
                sum_tmp.on("change",function(){
                    sumTmp();
                });

                //---lost focus show summary
                t_sum.on("blur",function(){
                    showSum();
                });
                //---button click
                btnSave.on("click",function(){
                    saveTour();
                });
            }
            return{ getEvent : getEvent}
        })();
        tour.getEvent();
    });
</script>
<!--end of js script-->