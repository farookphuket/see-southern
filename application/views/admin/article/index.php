<section id="article">
    <div class="page-top" id="top"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <span class="">
                    <a href="<?php echo site_url("admin");?>" class="btn btn-primary">Home page</a>
                </span>
                <div class="float-right">
                    <button class="btn btn-primary lnCreate">
                    Create
                    </button>
                </div>
                <h1 class="text-center">Article Admin</h1>
                <h2 class="text-center">
                All post 
                <span class="badge badge-info num_ar">0</span> item(s).
                </h2>
            </div>

            <div class="col-lg-12">
                <div class="row ar_list">
                    <div class="no_data">
                        <h1 class="bg-danger">There is no data.</h1>
                    </div>
                </div>
                <div class="ar_pagin"></div>
            </div>
        </div>




        <div class="modal fade" id="mdAr">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="modal-header">
                        
                        <h1 class="modal-title fTitle">Text change</h1>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        
                        <?php 
                            $f = "admin/article/_frm_ar.php";
                            $this->load->view($f);
                        ?>

                        <div class="modal_status"></div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btnSave" type="submit" form="frmAr">Save</button>
                    </div>
                </div>
            </div>
        
        </div>


    </div>

</section>
<script>
    $(function(){
        var $el = $(".container");

        var ar = (function(){
            
            //---create button 
            var lnCreate = $el.find(".lnCreate");
            var $ar_list = $el.find(".ar_list");
            var $ar_pagin = $el.find(".ar_pagin");
            var num_ar = $el.find(".num_ar");
            
            //---modal dialog-box
            var $md = $el.find("#mdAr");
            var need_tmp = $el.find(".need_tmp");
            var body_tmp = $el.find(".body_tmp");
            var $fTitle = $el.find(".fTitle");

            //---form add or edit
            var $f = $el.find("#frmAr");
            var $fResult = $el.find(".fResult");

            //---form element
            var ar_id = $el.find(".ar_id");
            var key_id = $el.find(".key_id");
            var og_url = $el.find(".og_url");
            var og_title = $el.find(".og_title");
            var og_des = $el.find(".og_des");

            var ar_title = $el.find(".ar_title");

            var ar_sum = $el.find(".ar_sum");
            var sumResult = $el.find(".sum_result");

            var ar_body = $el.find(".ar_body");

            var approve = $el.find(".ar_approve");
            var pub = $el.find(".ar_pub");
            var show_index = $el.find(".show_index");

            var btnSave = $el.find(".btnSave");


            function getAllAr(page=1){
                $ar_list.html("");
                var url = "<?php echo site_url("article/adminGetAllPost/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        //console.log(rs);
                        num_ar.html(rs.num_ar);
                        $.each(rs.get_ar,function(i,v){

                            //---approve
                            var approve = `
                            <span class="badge badge-success">Yes</span>
                            `;
                            if(parseInt(v.ar_is_approve) === 0){
                                approve = `
                            <span class="badge badge-danger">No</span>
                            `;
                            }

                            //---index
                            var index = `
                            <span class="badge badge-success">Yes</span>
                            `;
                            if(parseInt(v.ar_show_index) === 0){
                                index = `
                            <span class="badge badge-danger">No</span>
                            `;
                            }

                            //---public
                            var public = `
                            <span class="badge badge-success">Yes</span>
                            `;
                            if(parseInt(v.ar_show_public) === 0){
                                public = `
                            <span class="badge badge-danger">No</span>
                            `;
                            }

                            var lnEdit = `<button class="btn btn-info btn-sm btnEdit" data-ar_id="${v.ar_id}">Edit</button>`;
                            var lnDel = `<button class="btn btn-danger btn-sm btnDel" data-ar_id="${v.ar_id}">Delete</button>`;
                            var tmp = `
                            <div>
                                <h2>${v.ar_title}</h2>
                                <p>${v.ar_summary}</p>
                                <p>&nbsp;</p>
                                
                                <div class="table-resposive">
                                <table class="table table-bordered">
                                <tr>
                                <th>Date</th>
                                <td>
                                <strong>
                                Create :
                                </strong> ${v.date_add}

                                <strong>
                                Update :
                                </strong> ${v.date_edit}
                                
                                </td>
                                </tr>

                                <tr>
                                <th>Owner info</th>
                                <td>
                                <strong>User Name</strong>
                                ${v.ar_post_by}
                                
                                <strong>User IP</strong>
                                ${v.ar_post_ip}
                                </td>
                                </tr>

                                <tr>
                                <th>Status info</th>
                                <td>
                                <strong>Approve :</strong>
                                ${approve}
                                
                                <strong>Index :</strong>
                                ${index}
                                

                                <strong>Public :</strong>
                                ${public}
                                </td>

                                </tr>

                                </table>
                                </div>
                                <p>${lnEdit} ${lnDel}</p>
                            </div>
                            <p>&nbsp;</p>
                            `;

                           $ar_list.append(tmp); 
                        });
                    }
                });
            }
            //---

            
            
            //----frmAr
            function frmAr(cmd,id){
                tinymce.activeEditor.setMode("design");
                $f.trigger("reset");
                switch(cmd){
                    case"edit":
                        var url = "<?php echo site_url("article/adminEditAr/");?>"+id;
                        $.ajax({
                            url : url,
                            success : function(e){
                                //console.log(e);
                                var rs = $.parseJSON(e);
                                $.each(rs.get_ar,function(i,v){
                                    ar_id.val(v.ar_id);
                                    key_id.val(v.kw_id);
                                    ar_title.val(v.ar_title);
                                    ar_sum.val(v.ar_summary);
                                    tinymce.activeEditor.setContent(v.ar_body);
                                    
                                    //---checkbox show index
                                    var ind = 0;
                                    if(parseInt(v.ar_show_index) !== 0){
                                        ind = 1;
                                        show_index.prop("checked",true);
                                    } 

                                    //--checkbox approve
                                    var app = 0;
                                    if(parseInt(v.ar_is_approve) !== 0){
                                        app = 1;
                                        approve.prop("checked",true);
                                    }

                                    //---checkbox pub
                                    var is_pub = 0;
                                    if(parseInt(v.ar_show_public) !== 0){
                                        is_pub = 1;
                                        pub.prop("checked",true);
                                    }

                                    //---seo box
                                    og_url.val(v.og_url);
                                    og_title.val(v.kw_page_keyword);
                                    og_des.val(v.kw_page_des);


                                    $fTitle.html(`Editing ${v.ar_title}...`);
                                    $($md).modal("show");

                                });
                            }
                        });
                        
                        
                    break;
                    default:
                        $fTitle.html("Create new Post");
                        $($md).modal("show");
                        $f.trigger("reset");
                    break;
                }
            }

            //----firstSave
            function firstSave(){
                var url = "<?php echo site_url("article/firstSave");?>";
                var data = "";
                if(!parseInt(ar_id.val())){
                    data = {ar_title : ar_title.val()};
                }else{
                    data = {ar_id : ar_id.val(),
                            key_id : key_id.val(),
                            ar_title : ar_title.val()
                            };
                }
                $.post(url,data,function(e){
                    var rs = $.parseJSON(e);
                    console.log(rs);
                    var edit_id = "";
                    $.each(rs.get_ar,function(i,v){
                        ar_id.val(v.ar_id);
                        key_id.val(v.kw_id);
                        edit_id = v.ar_id;
                    });
                    
                    frmAr("edit",edit_id);
                });
            }
            //-------
            //----sumTemplate
            function sumTemplate(){
                var imgUrl = "https://lh3.googleusercontent.com/gkFIhr-OM6alofugspyklBlydNNzTil957XSSI6al_1d9oRUaBv86b4Zbdjpr5wb2-P__EHy-Kyt2tulYTpzvYoWF7fe1KFBdL_Emf5d-4cOFXj_uEENvlsmQTKxEvSXZN5ZX3ta3g=w2400";
                
                var tmp = ``;
                var need = 0;
                if(need_tmp.is(":checked",true)){
                    need = 1;
                    tmp = `<div class="row">
                                <div class="col-md-4">
                                    <img src="${imgUrl}" class="responsive">
                                    <p>Change the picture name</p>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="text-center">Change the title</h2>
                                    <p>Change the paragraph.</p>
                                </div>
                            </div>
                    `;

                }else{
                    tmp = `Please edit this text`;
                }
                ar_sum.val(tmp);
            }
            //------------
            //-----showSumResult
            function showSumResult(){
                sumResult.html("");
                var sum = ar_sum.val();
                sumResult.append(sum);
            }
            //------------
            //-----body template
            function bodyTemplate(){
                var b = 0;
                var tmp = ``;
                var imgUrl = "https://lh3.googleusercontent.com/1dq8UU1YLkYcYzjEHHUSfjJW7bmESlfBBke4VEy-z2s78GEaZbF-vyv-pSP6UFEfLKR8eB0adbDlKvTGlyX2FBUOZaNXGqjYzz-lgO6yQY1kyhogD3C0QkguVqwdoe7RkX2ORTok6g=w2400";
                if(body_tmp.is(":checked",true)){
                    tmp = `<!--container div.container start-->
                    <div class="container">
                        <div class="row"><!--div.row start-->
                            
                            <div class="col-lg-12"><!--1 div.col-lg-12 start-->
                                <h1 class="text-center">Edit this title</h1>
                            </div><!--1 div.col-lg-12 end-->

                            <div class="col-lg-12">
                                <div class="col-md-8">
                                    <img src="${imgUrl}" class="responsive"/>
                                </div>
                            </div>
                        </div><!--end div.row-->
                    </div>
                    <!--div.container end-->
                    `;
                }else{
                    tmp = `Will edit this part without html template code.`;
                }
                tinymce.activeEditor.setContent(tmp);
            }
            //----saveAr
            function saveAr(){
                btnSave.unbind();
                $f.submit(function(o){
                    o.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize();
                    $.post(url,data,function(e){
                        var rs = $.parseJSON(e);
                        //alert(rs.msg);
                        var edit_id = 0;
                        $.each(rs.get_ar,function(i,v){
                            edit_id = v.ar_id;
                        });
                        $fResult.html(rs.msg).show();
                        setTimeout(function(){
                            $fResult.html("loading...").fadeOut("slow");
                            frmAr("edit",edit_id);
                            getSummary();
                        },3000);
                    });
                });
            }
            //----------
            //---delAr
            function delAr(cmd,id){
                var title = "";
                var msg = "";
                switch(cmd){
                    case"delete":
                        var url = "<?php echo site_url("article/modDelAr/");?>"+id;
                        $.ajax({
                            url : url,
                            success : function(e){
                                alert(e);
                            }
                        });
                    break;
                    default:
                        msg = `you are about to delete ${id} this operation cannot be undo\n are your sure to delete ${id}?`;
                        
                        if(confirm(msg) === true){
                            delAr("delete",id);
                        }else{
                            return false;
                        }
                    break;
                }
                
                
                
            }//----end of delAr

            //--------------
            function getSummary(){
                //--call getAllAr
                getAllAr();
            }
            function getEvent(){
                getSummary();

                //---need_tmp
                need_tmp.on("change",function(){
                    sumTemplate();
                });

                //---body_tmp
                body_tmp.on("change",function(){
                    bodyTemplate();
                });

                //---show form
                lnCreate.on("click",function(){
                    frmAr();
                });

                //---title on blur
                ar_title.on("blur",function(){
                    firstSave();
                });

                //---summary on blur
                ar_sum.on("blur",function(){
                    showSumResult();
                });

                //---edit button
                $ar_list.delegate(".btnEdit","click",function(){
                    var id = $(this).attr("data-ar_id");
                    frmAr("edit",id);
                    
                });

                //---delete button
                $ar_list.delegate(".btnDel","click",function(){
                    var id = $(this).attr("data-ar_id");
                    delAr(null,id);
                });

                //---btnSave
                btnSave.on("click",function(){
                    saveAr();
                });
            }
            return{
                getEvent:getEvent
            }
        })();
        ar.getEvent();
    });
</script>
