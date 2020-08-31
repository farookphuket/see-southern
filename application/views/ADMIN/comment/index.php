<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-center">
                    <span class="badge badge-success num_cmt">0</span>
                </h1>
            </div>
            <div class="col-lg-12 pt-4 mb-4">
<?php
    $frm = "ADMIN/comment/_frm_comment";
    $this->load->view($frm);
?> 
            </div>
            <div class="col-lg-12 pt-4 mb-4">
                <div class="cmt_pagin pt-3 mb-3">
                    
                </div>
                <div class="cmt_list">
                    
                </div>
                <div class="cmt_pagin pt-3 mb-3">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
$(function(){
    const $CMT = (function(){


        let $page_status = getEl(".status");

        let ck_comment_page = Cookies.get("ck_comment_page");
        if(ck_comment_page === undefined){
            ck_comment_page = 1;
        }


        let $num_cmt = getEl(".num_cmt");
        let $cmt_list = getEl(".cmt_list");
        let $cmt_pagin = getEl(".cmt_pagin");

        //-- the form
       let  $frm = getEl("#frmComment");
        let $c_id = getEl("#c_id");
        let $c_user_id = getEl("#c_user_id");
        let $c_section_name = getEl("#c_section_name");
        let $c_item_id = getEl("#c_item_id");
        let $c_comment_title = getEl("#c_comment_title");
        let $c_comment_body = new Jodit("#c_comment_body");
        let $c_set_show = getEl("#c_set_show");
        let btnSave = getEl("#btnCommentSave"); 
        let btnReset = getEl("#btnCommentReset"); 


        function commentList(ck_comment_page){
            $cmt_list.html("");
            let url = "<?php echo site_url("comment/commentAdminList/"); ?>"+ck_comment_page;
            $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    if(rs.pagination){
                        $cmt_pagin.html(rs.pagination);

                    }
                    $num_cmt.html(rs.get_comment_all.length);
                    $.each(rs.get_comment,(i,v)=>{

                        let show = `<span class="badge badge-danger">No</span>`;

                        if(parseInt(v.c_set_show) !== 0){
                            show = `<span class="badge badge-success">Yes</span>`;
                        }
                        let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.c_comment_title}</h1>
    </div>
    <div class="card-body">
       ${v.c_comment_body} 
       <p class="">&nbsp;</p>
       <div class="table-responsive">
           <table class="table table-striped">
               <tr>
                   <th>show</th>
                   <td>${show}</td>
               </tr>
               <tr>
                   <th>By</th>
                   <td>${v.name}</td>
               </tr>
               <tr>
                   <th>date</th>
                   <td>
                   Create ${v.c_date_create}
                   </td>
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
            <div class="btn btn-group">
                <button class="btn btn-primary lnEdit" data-c_id="${v.c_id}">Edit</button>
                <button class="btn btn-danger lnDel" data-c_id="${v.c_id}">Delete</button>
            </div>
        </div>
    </div>
</div><p class="pt-2">&nbsp;</p>`;
                        $cmt_list.append(tmp);
                    });
            }
            })
        } 

        function commentEdit(id){
            let url = "<?php echo site_url("comment/commentAdminEdit/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $.each(rs.get,(i,v)=>{
                if(parseInt(v.c_set_show) !== 0){
                    $c_set_show.prop("checked",true);
                }
                    $c_id.val(v.c_id);
                    $c_item_id.val(v.c_item_id);
                    $c_section_name.val(v.c_section_name);
                    $c_user_id.val(v.c_user_id);
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
                    },1500);
                });
            });
        }
        function commentDel(id){
            let url = "<?php echo site_url("comment/commentAdminDel/"); ?>"+id;
            $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                        $page_status.html("loading...").fadeOut("slow");
                        getSummary();
                    },1520);
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


            //-- edit
            $cmt_list.delegate(".lnEdit","click",function(){
                let id = $(this).attr("data-c_id");
                commentEdit(id);
            });

            //-- save
            btnSave.on("click",function(){
                commentSave();
            });

            //-- reset
            btnReset.on("click",function(){
                $frm.trigger("reset");
                $c_id.val(0);
                $c_comment_body.value = "";
            });

            //-- delete
            $cmt_list.delegate(".lnDel","click",function(){
                let id = $(this).attr("data-c_id");
                commentDel(id);
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
    $CMT.getEvent();
});
</script>
