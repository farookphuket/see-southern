<section class="page-section">
    <div class="container">
        <div class="row">




<div class="col-lg-12">
               <h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">Comment</span>
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

                <div class="cmt_pagin pt-5 mb-5">
                    
                </div>
                <div class="cmt_list pt-5 mb-5">
                    
                </div>

            </div>

        </div>
    </div>
</section>




<script charset="utf-8">
    $(function(){

        const $CMT = (function(){

            //-- use Cookies
            let ck_comment_view_page = Cookies.get("ck_comment_view_page");
            if(ck_comment_view_page === undefined){
                ck_comment_view_page = 1;
            }

            //-- myself 
            let my_id = "<?php echo $user_id; ?>";
            let my_name = "<?php echo $user_name; ?>";

            //-- place
            let $page_status = getEl(".status");
            let $num_comment = getEl(".num_comment");
            let $cmt_list = getEl(".cmt_list");
            let $cmt_pagin = getEl(".cmt_pagin");

            //-- the form
            let $frm = getEl("#frmComment");
            let $c_id = getEl("#c_id");
            let $c_user_id = getEl("#c_user_id");
            let $c_section_name = getEl("#c_section_name");
            let $c_item_id = getEl("#c_item_id");
            let $c_comment_title = getEl("#c_comment_title");
            let $c_comment_body = new Jodit("#c_comment_body",{"placeholder":"Add your comment"});
            let $btnCommentSave = getEl("#btnCommentSave");
            let $btnCommentReset = getEl("#btnCommentReset");


            function commentGet(ck_comment_view_page = 1){
                $cmt_list.html("");
                //-- get everything
                let url = "<?php echo site_url("comment/cmtUserGet/"); ?>"+ck_comment_view_page;
                let data = {
                    c_section_name : $c_section_name.val(),
                    c_item_id : $c_item_id.val(),
                }
                $.ajax({
                    type : "post",
                    data : data,
                    url : url,
                        success : (e)=>{

                        let rs = $.parseJSON(e);


                        if(rs.pagination){
                            $cmt_pagin.html(rs.pagination);
                        }

                        $num_comment.html(rs.get_comment_all.length);
                        $.each(rs.get_comment,(i,v)=>{
                            
                            let edit_link = "";
                            let del_link = "";                            

                            if(parseInt(v.c_user_id) === parseInt(my_id)){
                                edit_link = `<a class="lnEdit" href="#" data-c_id="${v.c_id}">${v.c_comment_title}</a>`;
                                del_link = `<a class="btn btn-danger lnDel" href="#" data-c_id="${v.c_id}">Delete Comment</a>`;
                            }else{
                                edit_link = v.c_comment_title;
                                
                            }

                            let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="">${edit_link}</h1>
    </div>
    <div class="card-body">
       ${v.c_comment_body} 
       <div class="table-responsive pt-2">
          <table class="table table-striped">
              <tr>
                  <th>By</th>
                  <td>${v.name}</td>
              </tr>
              <tr>
                  <th>Date</th>
                  <td>${v.c_date_create}</td>
              </tr>
              <tr>
              <td colspan=2>
                <div class="float-right">
                   ${del_link} 
                </div>
              </td>
              </tr>
          </table>
       </div>
    </div>
</div><p>&nbsp;</p>`;
                        $cmt_list.append(tmp);
                        });
                        
                }
                });

            }

            function commentEdit(id){
                $frm.trigger("reset");
                $c_comment_body.value = "";
                let url = "<?php echo site_url("comment/cmtMemberEdit/"); ?>"+id;
                $.ajax({
                    url : url,
                        success : (e)=>{
                    //console.log(e);
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        $c_comment_title.val(v.c_comment_title);
                        $c_comment_title.focus();
                        $c_id.val(v.c_id);
                        $c_user_id.val(v.c_user_id);
                        $c_comment_body.value = v.c_comment_body;
                    });
                }
                });
            }
            function commentSave(){
                $btnCommentSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();
                    let url = $(this).attr("action");
                    let data = $(this).serialize();
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            commentEdit(rs.c_id);
                            getSummary();
                            $page_status.fadeOut("slow");
                        },1500);

                    });
                });
            }

            function commentReset(){
                $frm.trigger("reset");
                $c_id.val(0);
                $c_comment_title.focus();
                $c_comment_body.value = "";
            }
            function commentDel(id){
                let url = "<?php echo site_url("comment/cmtMemberDel/"); ?>"+id;
                $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        console.log(rs);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            $page_status.html("Loading...").fadeOut("slow");
                            getSummary();
                        },1500);
                }
                });
            }


            function getSummary(){
                commentGet(ck_comment_view_page);
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){

                getSummary();
                $btnCommentSave.on("click",function(){
                    commentSave();
                });

                $btnCommentReset.on("click",function(){
                    commentReset();
                });

                $cmt_list.delegate(".lnEdit","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-c_id");
                    commentEdit(id);
                });

                $cmt_list.delegate(".lnDel","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-c_id");
                    commentDel(id);
                });

                $cmt_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    ck_comment_view_page = Cookies.set("ck_comment_view_page",page);
                    commentGet(page);
                });
            }
            return{getEvent:getEvent}
        })();

        $CMT.getEvent();
    });
</script>
