<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center"><?php echo $sysName; ?></h1>
                    </div>
                    <div class="card-body">
                      <p>
                        system version <?php echo $sysVersion; ?> | system date <?php echo $sysDate; ?>
                        </p>  
                    </div>
                    <div class="card-footer">
<div class="float-right">
    <p class="badge badge-success">
<?php echo"{$user_type_text} | {$user_name}"; ?> 
    </p>
</div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <p class="line">&nbsp;</p>
<?php
$frm = "ADMIN/blog/_frm_blog";
$this->load->view($frm);
?>
                </div>

                 

                <div class="col-lg-12">
                    <h1 class="text-center">
                        <span class="badge badge-success bl_num">
                        0
                        </span>
<?php echo $this->uri->segment(1); ?>
                    </h1>
                    <p class="pt-4">&nbsp;</p>
                    <div class="bl_pagin"></div>
                    <p class="pt-4">&nbsp;</p>
                    <div class="bl_list">
                        
                    </div>
                    <p class="pt-4">&nbsp;</p>
                    <div class="bl_pagin"></div>
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

        //--
        let $bl_num = getEl(".bl_num");
        let $bl_list = getEl(".bl_list");
        let $bl_pagin = getEl(".bl_pagin");


        //--- 
        let $frm = getEl("#frmBlog");
        let set_cat = getEl(".set_cat");
        let set_tmp = getEl(".set_tmp");
        let bl_title = getEl(".bl_title");
        let bl_des = new Jodit(".bl_des",{"height":450,"placeholder":"start new blog description"});
        let bl_body = new Jodit(".bl_body",{"height":450,"placeholder":"your blog body detail"});
        let bl_id = getEl(".bl_id");
        let kw_id = getEl(".kw_id");
        let keyword = getEl(".keyword");
        let keydes = getEl(".keydes");
        let bl_user_id = getEl(".bl_user_id");
        let show_pub = getEl("#show_pub");
        let show_pub_date = getEl(".show_pub_date");

        let btnSave = getEl("#btnSave");
        let btnReset = getEl("#btnReset");


        function getBlog(ck_blog_page){
            //console.log(`ck blog is ${ck_blog_page}`);
            $bl_list.html("");
            let url = "<?php echo site_url("blog/blogAdminGet/"); ?>"+ck_blog_page;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                if(rs.get_all.length !== 0){
                    $bl_num.html(rs.get_all.length);
                    if(rs.pagination){
                        $bl_pagin.html(rs.pagination);
                    }
                    $.each(rs.get_bl,(i,v)=>{
                    let no = `<span class="badge badge-danger">No</span>`;
                    let yes = `<span class="badge badge-success">Yes</span>`;
                    let sh_pub = no;
                    if(parseInt(v.show_pub) !== 0){
                        sh_pub = yes;
                    }

                        let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.bl_title}</h1>
    </div>
    <div class="card-body">
       ${v.bl_des} 
       <p class="pt-2">&nbsp;</p>
       <div class="table-responsive">
           <table class="table table-bordered">
               <tr>
                   <th>Post by</th>
                   <td>${v.name}</td>
               </tr>
               <tr>
                    <th>date</th>
                    <td>
                    <p>Create : ${v.bl_date_create} | update : ${v.bl_date_update}</p>
                    </td>
               </tr>
               <tr>
                   <th>show</th>
                   <td>${sh_pub}</td>
               </tr>
           </table>
       </div>
       
    </div>
    <div class="card-footer">
           <div class="float-right">
               <div class="btn-group">
                   <button class="btn btn-primary lnEdit" data-bl_id="${v.bl_id}">Edit</button>
                   <button class="btn btn-danger lnDel" data-bl_id="${v.bl_id}">Delete</button>
               </div>
           </div>
    </div>

</div><p class="pt-2">&nbsp;</p>`;

                        $bl_list.append(tmp);
                    });

                }
            }
            });
        }

        function getTmp(){
            let opt = `<option value=0>--select--</option>`;
            set_tmp.html(opt);
            let tm = set_cat.val();
            let url = "<?php echo site_url("blog/blogGetTmp/"); ?>"+tm;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                let num = 0;
                //console.log(rs);

                if(rs.get_all.length !== 0){
                    $.each(rs.get_all,(i,v)=>{
                        num++;
                     opt = `<option value="${v.tmp_id}">${num} | ${v.tmp_title}</option>`; 

                        set_tmp.append(opt);
                        set_tmp.focus();
                    });
                }else{
                    opt = `<option value=0>There is no template</option>`;
                    set_tmp.html(opt);
                    set_cat.focus();
                    //console.log('no template ha ha ');
                }
                    
            }
            });
        }

        function setTmp(){
            let tmp = set_tmp.val();
            let url = "<?php echo site_url("blog/blogSetTmp/"); ?>"+tmp;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $.each(rs.get,(i,v)=>{
                    keyword.val(v.tmp_title);
                    keydes.val("add or edit description for "+v.tmp_title);
                    bl_title.val(v.tmp_title);
                    bl_des.value = v.tmp_des;
                    bl_body.value = v.tmp_body;
                });
            }
            });
        }

        function blogSave(){
            btnSave.unbind();
            $frm.submit(function(e){
                e.preventDefault();
                let url = $(this).attr("action");
                let data = $(this).serialize();
                $.post(url,data,function(e){
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                    $page_status.html("loading...").fadeOut("slow");
                    getSummary();
                    blogEdit(rs.bl_id);
                    },1500);
                });
            }); 
        }

        
        function blogEdit(id){

            let url = "<?php echo site_url("blog/blogAdminEdit/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                console.log(rs);
                $.each(rs.get,(i,v)=>{
                    bl_user_id.val(v.bl_user_id);
                    bl_id.val(v.bl_id);
                    bl_title.val(v.bl_title);
                    kw_id.val(v.kw_id);
                    keyword.val(v.og_title);
                    keydes.val(v.og_des);
                    bl_des.value = v.bl_des;
                    bl_body.value = v.bl_body;
                    if(parseInt(v.show_pub) !== 0){
                        show_pub.prop("checked",true);
                    }
                    if(parseInt(v.show_pub_date) !== 0){
                        show_pub_date.val(v.show_pub_date);
                    }else{
                        show_pub_date.val("");
                    }
                    set_cat.val(v.bl_cat_id);
                    set_tmp.prop("disabled",true);

                    set_cat.focus();
                });
            }
            });
        }

        function blogDel(id){

            let url = "<?php echo site_url("blog/blogAdminDel/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $page_status.html(rs.msg).show();
                setTimeout(()=>{
                    $page_status.html("loading...").fadeOut("slow");
                    getSummary();
                },1500);
            }
            });
        }


        function getSummary(){

            getBlog(ck_blog_page);
        }
        function getEl(el){
            return $(el);
        }
        function getEvent(){
            if(ck_blog_page === undefined){
                ck_blog_page = 1;
            }

            getSummary();

            //-- date picker
            show_pub_date.datepicker({minDate:0,dateFormat:"yy-mm-dd"});
            show_pub_date.on("change",function(){

                let sel_day = new Date(show_pub_date.val());
               let today = new Date(); 

                if(today.setHours(0,0,0,0) === sel_day.setHours(0,0,0,0)){
                    show_pub.prop("checked",true);

                }else{
                    
                    show_pub.prop("checked",false);
                }

            });

            // show_pub_date.on("change",function(){
            //     
            // });

            //--- set_cat
            set_cat.on("change",function(){
                getTmp();
            });

            //-- set
            set_tmp.on("change",function(){
                setTmp();
            });

            btnSave.on("click",function(){
                blogSave();
            });

            btnReset.on("click",function(){
                $frm.trigger("reset");
                set_cat.focus();
                bl_id.val(0);
            });

            $bl_list.delegate(".lnEdit","click",function(){
                let id = $(this).attr("data-bl_id");
                blogEdit(id);
            });

            $bl_list.delegate(".lnDel","click",function(){
                let id = $(this).attr("data-bl_id");
                blogDel(id);
            });

            //--- pagination 
            $bl_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                let page = $(this).attr("data-ci-pagination-page");
                ck_blog_page = Cookies.set("ck_blog_page",page);
                getBlog(page);

            });

        }
        return{getEvent:getEvent}
    })();
    $BLOG.getEvent();
});

</script>
