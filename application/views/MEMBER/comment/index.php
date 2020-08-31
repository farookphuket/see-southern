<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">My Comment</span>
  <span class="site-heading-lower num_comment">
        0
    </span>
                </h1>
 
            </div>
            <div class="col-lg-12 pt-4 mb-4 bg-faded rounded">
                <h1 class="text-center">Before you type anything!</h1>
                <p style="color:red;font-weight:bold;">please read our policy!</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        - we will delete your post without any warning if your post contain rude
                    </li>
                </ul>
            </div>
            <div class="col-lg-12 bg-faded rounded pt-3 mb-3">
<?php
    $frm = "MEMBER/comment/_frm_comment";
    $this->load->view($frm);
?> 
            </div>
            
            <div class="col-lg-12 pt-5">

                <div class="cmt_pagin pt-5 mb-4">
                    
                </div>

                <div class="cmt_list mb-3">
                    
                </div>
                <div class="cmt_pagin pt-5 mb-5">
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){

        const $CM = (function(){

            let ck_comment_page = Cookies.get("ck_comment_page");
            if(ck_comment_page === undefined){
                ck_comment_page = 1;
            }

            let my_name = "<?php echo $user_name; ?>";
            let show_msg = `${my_name} please select the comment you want to edit ,if you create comment from this page there will not show on anywhere!`;
            let $frm = getEl("#frmComment");

            let $c_id = getEl("#c_id");
            let $c_comment_title = getEl("#c_comment_title");
            let $c_comment_body = new Jodit("#c_comment_body",{"placeholder":show_msg});
            let btnSave = getEl("#btnCommentSave");
            let btnReset = getEl("#btnCommentReset");

            let $page_status = getEl(".status");
            let $cmt_list = getEl(".cmt_list");
            let $num_comment = getEl(".num_comment");
            let $cmt_pagin = getEl(".cmt_pagin");

            function commentList(ck_comment_page){
                $cmt_list.html("");

                let url = "<?php echo site_url("comment/commentMemberGet/"); ?>"+ck_comment_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $num_comment.html(rs.get_comment_all.length);
                    if(rs.pagination){
                        $cmt_pagin.html(rs.pagination);
                    }
                    $.each(rs.get_comment,(i,v)=>{
                        let tmp = `<div class="card">
    <div class="card-header">
    <h1 class="text-center">
    <a href="#" data-c_id="${v.c_id}" class="lnEdit">
        ${v.c_comment_title}
    </a>
    </h1>
    </div>                           
    <div class="card-body">
       ${v.c_comment_body} 
       <p class="pt-2">&nbsp;</p>
       <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Date</th>
                <td>${v.c_date_create}</td>
            </tr>
            <tr>
            <td colspan=2>
             ${v.c_full_url}
            </td>
            </tr>
        </table>
           
       </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
           <button class="btn btn-danger lnDel" data-c_id="${v.c_id}">Delete</button> 
        </div>
    </div>
</div><p class="pt2">&nbsp;</p>`;
                        $cmt_list.append(tmp);
                    });
                }
                });
            }


            function commentEdit(id){
                //alert('edit '+id);
                let url = "<?php echo site_url("comment/cmtMemberEdit/"); ?>"+id;
                $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        $.each(rs.get,(i,v)=>{
                            $c_id.val(v.c_id);
                            $c_comment_title.val(v.c_comment_title);
                            $c_comment_body.value = v.c_comment_body;
                            $c_comment_title.focus();
                        });
                }
                });
            }


            function commentSave(){
                btnSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();
                    let data = $(this).serialize();
                    let url = $(this).attr("action");
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            $page_status.html("loading...").fadeOut("slow");
                            commentEdit(rs.c_id);
                            getSummary();
                        },1520);
                    });
                });
            }


                function commentDel(id){
                    let url = "<?php echo site_url("comment/cmtMemberDel/"); ?>"+id;
                    $.ajax({
                        url : url,
                            success : (e)=>{
                            let rs = $.parseJSON(e);
                            $page_status.html(rs.msg).show();
                            setTimeout(()=>{
                                $page_status.html("loading...").fadeOut("slow");
                                getSummary();
                            },1200);
                    }
                    });
                }


            function getSummary(){
                commentList(ck_comment_page);
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getSummary();

                $cmt_list.delegate(".lnEdit","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-c_id");
                    commentEdit(id);
                });

                $cmt_list.delegate(".lnDel","click",function(){
                    let id = $(this).attr("data-c_id");
                    commentDel(id);
                });

                btnSave.on("click",function(){
                    commentSave();
                });
                btnReset.on("click",function(){
                    $frm.trigger("reset");
                    $c_comment_body.value = "";
                    $c_id.val(0);
                    $c_comment_title.focus();
                });

                //-- pagination
                $cmt_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    ck_comment_page = Cookies.set("ck_comment_page",page);
                    commentList(page);
                });
            }
            return{getEvent:getEvent}
        })();
        $CM.getEvent();
    });
</script>

