<section id="user_share">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="float-right">
                    <a class="btn btn-primary lnAddPost">New Post</a>
                </span>
                
            </div>
            <div class="col-lg-12">
                <h1 class="text-center shareHead">My Post
                <span class="badge badge-success numShare">0</span> item(s).
                </h1>
            </div>

            <div class="col-lg-12">
                <div class="share_list"></div>
                <div class="share_pagin"></div>
            </div>
        </div>
    </div>



    <div class="modal fade mdShare">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Share new post</h1>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <?php 
                    $f = "article/_frm_arMember.php";
                    $this->load->view($f);
                ?>
                <div class="row">
                        <div class="col-md-12">
                        <select class="form-control show_pub" id="show_pub" name="show_pub">
                            <option value=0>Private</option>
                            <option value=1>Public</option>
                        </select>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btnSave" form="frmMember" type="submit">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    
    
    </div>


</section>
<script>
    $(function(){
        var $el = $("#user_share");
        var $page_status = $(".status");
        var share = (function(){
            var $shareHead = $el.find(".shareHead");
            var $numShare = $el.find(".numShare");
            var $share_list = $el.find(".share_list");
            var $share_pagin = $el.find(".share_pagin");

            //--lnAddPost
            var lnAddPost = $el.find(".lnAddPost");

            //--modal
            var $md = $el.find(".mdShare");
            var $showPub = $el.find(".show_pub");
            var btnSave = $el.find(".btnSave");

            //----form element
            var $f = $el.find("#frmMember");
            var $fResult = $el.find(".frmResult");
            var title = $el.find(".ar_title");
            
            var ar_id = $el.find(".ar_id");
            ar_id.val(0);
            var kw_id = $el.find(".kw_id");

            //---seo
            var meta_url = $el.find(".meta_url");
            var meta_keyword = $el.find(".meta_keyword");
            var meta_keydes = $el.find(".meta_keydes");
            //--checkbox 
            var sum_tmp = $el.find(".sum_tmp");
            //------
            var summary = $el.find(".ar_sum");
            var sumResult = $el.find(".sum_result");

            var body = $el.find(".ar_body");
            //---getMyPostList
            function getMyPostList(page=1){
                var url = "<?php echo site_url("article/uGetOwnPost/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        getPostTemplate(rs);
                    }

                });
            }
            //--------------
            //-----getPostTemplate
            function getPostTemplate(obj){
                //console.log(obj);
                var get_ar = obj.get_ar;
                var num_ar = obj.num_ar;
                $share_list.html("");
                $numShare.html(num_ar);
                $.each(get_ar,function(i,v){
                    var tmp = `
                        <div class="card">
                            <div class="card-header">
                                <h2>${v.ar_title}</h2>
                            </div>
                            <div class="card-body">
                                ${v.ar_summary}
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary lnView " data-ar_id="${v.ar_id}">View</button>
                                <button class="btn btn-warning lnEdit " data-ar_id="${v.ar_id}">Edit</button>
                                
                            </div>
                        </div>
                        <p>&nbsp;</p>
                    `;
                    $share_list.append(tmp);
                });
                
            }
            //-----------
            //-----viewPost
            function viewPost(id){
                var url = "<?php echo site_url("article/read/");?>"+id;
                var win = window.open(url,"_blank");
                if(win){
                    win.focus();
                }else{
                    alert("Please enable pop-up window");
                }
            }
            //-----showForm
            function showForm(cmd,id){
                tinymce.activeEditor.setMode("design");
                $f.trigger("reset");//--reset form
                ar_id.val(0);
                kw_id.val(0);
                $showPub.prop("disabled",true).val(0);
                switch(cmd){
                    case"edit":
                        $showPub.prop("disabled",false);
                        btnSave.html("Save Post");
                       var url = "<?php echo site_url("article/uEditPost/");?>"+id;
                       $.ajax({
                        url : url,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            $.each(rs.get_ar,function(i,v){
                                console.log(v);
                                
                                ar_id.val(v.ar_id);
                                kw_id.val(v.kw_id);
                                title.val(v.ar_title);
                                meta_url.val(v.og_url);
                                meta_keyword.val(v.kw_page_keyword);
                                meta_keydes.val(v.kw_page_des);
                                summary.val(v.ar_summary);
                                var b = tinymce.activeEditor.setContent(v.ar_body);
                                body.val(b);
                                $showPub.val(v.ar_show_public);
                            });
                            $($md).modal("show");
                        }
                       });
                    break;
                    default:
                        title.attr("placeholder","Post Title");
                        btnSave.html("Create New Post");

                        $($md).modal("show");
                    break;
                }
            }
            //---------------
            //-----show summary result
            function showSummaryResult(){
                var ar_sum = summary.val();
                sumResult.html(ar_sum);
            }
            //---
            //-----needSummaryTemplate
            function needSummaryTemplate(){
                summary.val(0);
                var need = 0;
                if(sum_tmp.is(":checked",true)){
                    need = 1;
                }
                var tmp = ``;
                var imgUrl = "https://img.etimg.com/thumb/msid-61740239,width-643,imgsize-251731,resizemode-4/heres-why-the-mclaren-720s-worth-280000-is-a-difficult-car-to-love.jpg";
                if(parseInt(need) !== 0){
                    tmp = `<div class="row">
                        <!--statrt column 4 for the image this text will not be shown-->
                        <div class="col-lg-4">
                            <img src="${imgUrl}" class="responsive" />
                            <p>Change your photo name here</p>
                        </div>

                        <div class="col-lg-8">
                            <h2 class="text-center">Your title here</h2>
                            <p>Your paragraph content all will be goes here</p>
                            <p>if you want to change the picture on the right just find the tag "src=" then change to your photo source</p>
                            <p>your result will show at the buttom of this text box after you click somewhere else </p>
                            <p>You can change the teext in between "&lt;p&gt;" tag.</p>
                        </div>
                    
                    </div>
                    `;
                    summary.val(tmp);
                }else{
                    summary.val(`Please edit the text here or click the checkbox "I want the html template" `);
                }
                
            }
            //-----
            //----firstSave
            function firstSave(){
                if(!title.val()){
                    return false;
                }else{
                    var url = "";
                    var data = "";
                    /*
                    
                    */
                    if(parseInt(ar_id.val()) === 0){
                        //alert(`will be create key`);
                        url = "<?php echo site_url("article/uFirstSave/");?>";
                        data = {ar_title:title.val()};
                        $.ajax({
                        type : "post",
                        url : url,
                        data : data,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            $fResult.html(rs.msg).show();
                            setTimeout(function(){
                                $fResult.html("loading...").fadeOut("slow");
                            },6000);
                            $.each(rs.get_ar,function(i,v){
                               ar_id.val(v.ar_id);
                               showForm("edit",v.ar_id); 
                            });
                            
                        }
                    });
                    }else{
                        return false;
                    }
                }
                
            }
            //-----savePost
            function savePost(){
                btnSave.unbind();
                $f.submit(function(o){
                    o.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize()+"&show_pub="+$showPub.val();
                    $.post(url,data,function(e){
                        var rs = $.parseJSON(e);
                        $fResult.html(rs.msg).show();
                        setTimeout(function(){
                            $fResult.html("loading...").fadeOut("slow");
                            getSummary();
                            showForm("edit",rs.ar_id);
                        },6000);
                    });
                });
            }

            //-----------
            function getSummary(){
                getMyPostList();
            }

            //------------
            function getEvent(){

                getSummary();
                //alert("test alert");
                lnAddPost.on("click",function(){
                    showForm();
                });

                //---title on blur
                title.on("blur",function(){
                    firstSave();
                });
                //---checkbox click
                sum_tmp.on("change",function(){
                    needSummaryTemplate();
                });

                //---show summary
                summary.on("blur",function(){
                    showSummaryResult();
                });

                //---view post
                $share_list.delegate(".lnView","click",function(){
                    var id = $(this).attr("data-ar_id");
                    viewPost(id);
                    
                });

                //---edit post
                $share_list.delegate(".lnEdit","click",function(){
                    var id = $(this).attr("data-ar_id");
                    showForm("edit",id);
                    
                });

                //---save post
                btnSave.on("click",function(){
                    savePost();
                });
            }
            return{getEvent : getEvent}
        })();
        share.getEvent();
    });

</script>