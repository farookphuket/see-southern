<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-0 mb-5">
<?php
    $frm = "MEMBER/blog/_frm_blog";
    $this->load->view($frm);
?>
            </div>
            <div class="col-lg-12">
                <p class="line">&nbsp;</p>
            </div>
            <div class="col-lg-12 bg-faded pt-3 mb-3 rounded">
                <h1 class="text-center">
                    My blog
                    <span class="badge badge-success num_my">0</span>
                    
                </h1>
                <div class="my_pagin pt-3 mb-5">
                    
                </div>
                <div class="my_list">
                    
                </div>
                <div class="my_pagin pt-3 mb-5">
                    
                </div>
            </div>
            <div class="col-lg-12 bg-faded rounded pt-2 mb-5">
              <h1 class="text-center">
                Public
                <span class="badge badge-success numPubBlog">0</span>
                </h1>  
                <div class="pub_pagin pt-5 mb-3">
                    
                </div>
                <div class="pub_list pt-2">
                    
                </div>
                <div class="pub_pagin pt-3 mb-3">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){
        const $BLOG = (function(){

            let $page_status = getEl(".status");

            let ck_blog_page = Cookies.get("ck_blog_page");
            let ck_myBlog_page = Cookies.get("ck_myBlog_page")
            if(ck_blog_page === undefined){
                ck_blog_page = 1;
            }

            if(ck_myBlog_page === undefined){
                
                ck_myBlog_page = 1;
            }

            //-- my blog
            let $num_my = getEl(".num_my");
            let $my_list = getEl(".my_list");
            let $my_pagin = getEl(".my_pagin");

            //--- the form
            let $frm = getEl("#frmBlog");
            let set_cat = getEl(".set_cat");
            let set_tmp = getEl(".set_tmp");
            let bl_title = getEl(".bl_title");
            let myBlog_name = "<?php echo $user_name; ?>";
            let myBlog_id = "<?php echo $user_id; ?>";
            let pHd = `What's going on with you ${myBlog_name}?`;
            let bl_des = new Jodit(".bl_des",{"placeholder":pHd,"height":450});
            let bl_body = new Jodit(".bl_body",{"placeholder":"please select the Category then select the template","height":450});

            let bl_id = getEl(".bl_id");
            let bl_user_id = getEl(".bl_user_id");
            let btnBlogSave = getEl("#btnBlogSave");
            let btnBlogReset = getEl("#btnBlogReset");

            let $num_pub = getEl(".numPubBlog");
            let $pub_list = getEl(".pub_list");
            let $pub_pagin = getEl(".pub_pagin");


            let postToday = new Date();
            postToday.setHours(0,0,0,0);
            let day = postToday.getDate();
            let month = postToday.getMonth()+1;
            let year = postToday.getFullYear();
            let show_day = month+"/"+day+"/"+year;
            let show_pub_date = getEl(".show_pub_date");
            show_pub_date.datepicker({minDate:0});

            let chk_show_pub = getEl(".show_pub");


            function myBlogList(ck_myBlog_page=1){
                $my_list.html("");
                let url = "<?php echo site_url("blog/blogMemberGet/"); ?>"+ck_myBlog_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs =$.parseJSON(e);
                    console.log(rs);
                    $num_my.html(rs.get_all.length);
                    $.each(rs.get_my,(i,v)=>{
                        let yes = `<span class="badge badge-success">Yes</span>`;
                        let no  = `<span class="badge badge-danger">No</span>`;
                        let show_my = no;
                        if(parseInt(v.show_pub) !== 0){
                            show_my = yes;
                        }
                        let tmp = `<div class="bg-faded pt-2 mb-3">
                            ${v.bl_des}
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Blog Title</th>
                <td>${v.bl_title}</td>
            </tr>
            
            <tr>
                <th>Category</th>
                <td>${v.cat_title}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>
                create ${v.bl_date_create}  | update ${v.bl_date_update}
                </td>
            </tr>
            <tr>
                <th>Show As Public</th>
                <td>${show_my}</td>
            </tr>

            
        </table>
            <div class="float-right mb-2">
                <div class="btn-group">
                    <button class="btn btn-primary lnEdit" data-bl_id="${v.bl_id}">Edit</button>
                    <button class="btn btn-danger lnDel" data-bl_id="${v.bl_id}">Delete</button>
                </div>
            </div>


    </div>                           
            
</div>`;
    $my_list.append(tmp);
                    });
                }
                });
            }
            function myBlogEdit(id){
                let url = "<?php echo site_url("blog/blogMemberEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        bl_user_id.val(v.bl_user_id);
                        bl_id.val(v.bl_id);
                        bl_title.val(v.bl_title);
                        bl_des.value = v.bl_des;
                        bl_body.value = v.bl_body;
                        if(parseInt(v.show_pub) !== 0){
                            chk_show_pub.prop("checked",true);
                        }else{
                            chk_show_pub.prop("checked",false);
                        }
                        set_cat.val(v.cat_id);
                        set_cat.focus();
                        set_tmp.prop("disabled",true);
                    });
                }
                });
            }

            function myBlogSave(){
                btnBlogSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();
                    let url = $(this).attr("action");
                    let data = $(this).serialize();
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            $page_status.html("loading...").fadeOut("slow");
                            myBlogEdit(rs.bl_id);
                            getSummary();
                        },1500);
                    });
                });
            }

            function myBlogDel(id){
                let url = "<?php echo site_url("blog/blogMemberDel/"); ?>"+id;
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

            function myBlogGetTmp(){
                let tmp_group = set_cat.val();
                let url = "<?php echo site_url("blog/blogGetTmp/"); ?>"+tmp_group;
                let op1 = `<option value=0>--Select Template--</option>`;

                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    if(rs.get_all.length != 0){
                        set_tmp.focus();
                        let num = 0;
                        $.each(rs.get_all,(i,v)=>{
                            num++;
                            op1 = `<option value="${v.tmp_id}">${num} ${v.tmp_title}</option>`;
                            set_tmp.append(op1);
                        });
                    }else{
                        set_cat.focus();
                    }
                }
                });
            }

            function myBlogSetTmp(){
                let tmp = set_tmp.val();
                let url = "<?php echo site_url("blog/blogSetTmp/"); ?>"+tmp;
                

                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    console.log(rs);
                    $.each(rs.get,(i,v)=>{
                        bl_title.val(v.tmp_title);         
                        bl_des.value = v.tmp_des;
                        bl_body.value = v.tmp_body;
                    });
                }
                });
            }

            function myBlogReset(){
                $frm.trigger("reset");
                setTimeout(()=>{
                    show_pub_date.val(show_day);
                    //console.log(`the show day is ${show_day}`);
                    set_cat.focus();
                    bl_id.val(0);
                    bl_des.value = "";
                    bl_body.value = "";
                    set_tmp.prop("disabled",false);

                },800);
                
            }

            function blogPubList(ck_blog_page){

                $pub_list.html("");

                
                let url  = "<?php echo site_url("blog/blogGet/"); ?>"+ck_blog_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $num_pub.html(rs.get_all.length);
                    //console.log(rs);
                    if(rs.pagination){
                        $pub_pagin.html(rs.pagination);
                    }
                    $.each(rs.get_pub,(i,v)=>{

                        let tmp = `<div class="bg-faded pt-2 mb-2">
        ${v.bl_des}

    </div>`;
                        $pub_list.append(tmp);
                    });
                }
                });

            }


            
            function getSummary(){
                show_pub_date.val(show_day);
                blogPubList(ck_blog_page);
                myBlogList(ck_myBlog_page);
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                
                getSummary();
                //blogPublishToday();
                show_pub_date.on("change",function(){
                    let d1 = new Date(show_pub_date.val());
                    let d2 = new Date();
                    if(d2.setHours(0,0,0,0) === d1.setHours(0,0,0,0)){
                        chk_show_pub.prop("checked",true);
                    }else{
                        chk_show_pub.prop("checked",false);
                    }
                });

                //--- on Save
                btnBlogSave.on("click",function(){
                    myBlogSave();
                });

                //--- on Reset
                btnBlogReset.on("click",function(){
                    myBlogReset();
                });

                //-- get tmp
                set_cat.on("change",function(){
                    myBlogGetTmp();
                });

                //-- set tmp
                set_tmp.on("change",function(){
                    myBlogSetTmp();
                });

                //-- on edit 
                $my_list.delegate(".lnEdit","click",function(){
                    let id = $(this).attr("data-bl_id");
                    myBlogEdit(id);
                });
                
                //-- on delete 
                $my_list.delegate(".lnDel","click",function(){
                    let id = $(this).attr("data-bl_id");
                    myBlogDel(id);
                });

                //-- on pagination
                $my_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    Cookies.set("ck_myBlog_page",page);
                    myBlogList(page);
                });

                //-- pagination
                $pub_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    Cookies.set("ck_blog_page",page);
                    blogPubList(page);
                });

            }
            return{getEvent:getEvent}
        })();

        $BLOG.getEvent();
    });
</script>
