<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">
<?php echo $sysName; ?>
                </h1>
<?php
    $frm = "ADMIN/article/_frm_article";
    $this->load->view($frm);
?>
            </div>
            <div class="line">
                
            </div>
            <div class="col-lg-12 pt-4 mb-4">
                <h1 class="text-center">All post 
                <span class="badge badge-success ar_num">0</span>
                </h1>
                <div class="ar_pagin pt-4 mb-5">
                    
                </div>
                <div class="ar_list">
                    
                </div>
                <div class="ar_pagin pt-3">
                    
                </div>
            </div>



        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){
        const $AR = (function(){



            //--- place 
            let $page_status = getEl(".status");
            let $ar_list = getEl(".ar_list");
            let $ar_pagin = getEl(".ar_pagin");
            let $ar_num = getEl(".ar_num");

            //-- form
            let $frm = getEl("#frmArticle");
                //--- hidden field
            let $ar_id = getEl(".ar_id");
            let $ar_user_id = getEl(".ar_user_id");
            let $kw_id = getEl(".kw_id");
                //--- seo
            let $og_url = getEl(".share_url");
            let $keyword = getEl(".keyword");
            let $keydes = getEl(".keydes");

                //-- dropdown select
            let $set_cat = getEl(".set_cat");
            let $set_tmp = getEl(".set_tmp");

                //-- checkbox
            let $show_pub = getEl(".show_pub");
            let $show_index = getEl(".show_index");
            let $is_approve = getEl(".is_approve");

                //-- text title
            let $ar_title = getEl(".ar_title");

                //--- textarea
            let $ar_des = new Jodit(".ar_des",{"height":350});
            let $ar_body = new Jodit(".ar_body",{"height":350});

                //--- button
            let $btnArSave = getEl("#btnArSave");
            let $btnArReset = getEl("#btnArReset");

            //-- END form element

            let ck_ar_page = Cookies.get("ck_ar_page");
            if(ck_ar_page === undefined){
                ck_ar_page = 1;
            }

            function arEdit(id){
                let url = "<?php echo site_url("article/adminEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        $ar_id.val(v.ar_id);
                        $ar_user_id.val(v.ar_user_id);
                        $set_cat.val(v.cat_id);
                        $set_cat.focus();

                        //-- checkbox
                        if(parseInt(v.ar_show_public) !== 0){
                            $show_pub.prop("checked",true);
                        }


                        if(parseInt(v.ar_is_approve) !== 0){
                            $is_approve.prop("checked",true);
                        }

                        if(parseInt(v.ar_show_index) !== 0){
                            $show_index.prop("checked",true);
                        }

                        //-- seo
                        $keyword.val(v.og_title);
                        $keydes.val(v.og_des);
                        let share_url = "<?php echo site_url("article/read/"); ?>"+v.ar_uniq_id;
                        $og_url.val(share_url);
                        $ar_title.val(v.ar_title);
                        $ar_des.value = v.ar_des;
                        $ar_body.value = v.ar_body;
                    });
                }
                });
            }

            function arSave(){
                $btnArSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();
                    let url = $(this).attr("action");
                    let data = $(this).serialize();
                    $.post(url,data,function(e){
                        console.log(e);
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            $page_status.html("loading...").fadeOut("slow");
                            arEdit(rs.ar_id);
                            getSummary();
                            
                        },1200);
                    });
                })
            }
            function arDel(id){

                let url = "<?php echo site_url("article/adminDel/"); ?>"+id;
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

            function getList(ck_ar_page){
                $ar_list.html("");
                let url = "<?php echo site_url("article/adminGet/"); ?>"+ck_ar_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $ar_num.html(rs.get_all.length);
                    if(rs.pagination){
                        $ar_pagin.html(rs.pagination);
                    }
                    $.each(rs.get_ar,(i,v)=>{

                        let read_url = "<?php echo site_url("article/view/"); ?>"+v.ar_uniq_id;

                        let yes = `<span class="badge badge-success">Yes</span>`;
                        let no = `<span class="badge badge-danger">No</span>`;

                        let sh_pub = no;
                        if(parseInt(v.ar_show_public) !== 0){
                            sh_pub = yes;
                        }
                        let sh_index = no;
                        if(parseInt(v.ar_show_index) !== 0){
                            sh_index = yes;
                        }

                        let appr = no;
                        if(parseInt(v.ar_is_approve) !== 0){
                            appr = yes;
                        }

                        let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.ar_title}</h1>
    </div>
    <div class="card-body">
        ${v.ar_des}
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Status</th>
                    <td>
                   Show Public ${sh_pub} | Show Index ${sh_index} | Approve ${appr}
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                    Create ${v.ar_date_create} | Update ${v.ar_date_update}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <div class="btn-group">
               <a class="btn btn-info lnView" data-ar_id="${v.ar_id}" target="_blank" href="${read_url}">Read</a> 
               <button class="btn btn-primary lnEdit" data-ar_id="${v.ar_id}">Edit</button> 
               <button class="btn btn-danger lnDel" data-ar_id="${v.ar_id}">Delete</button> 
            </div>
        </div>
    </div>
    </div><p>&nbsp;</p>`;
                        $ar_list.append(tmp);
                    });
                }
                });
            }

            function setCategory(){
                $set_tmp.html("");
                let opt = "<option value=0>--Select Template--</option>";
                let cat_id = $set_cat.val();
                let url = "<?php echo site_url("article/articleGetTmp/"); ?>"+cat_id;
                $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(rs);
                        $set_tmp.html(opt);
                        if(rs.get.length !== 0){
                            $set_tmp.focus();
                        }
                        $.each(rs.get,(i,v)=>{

                            opt = `<option value="${v.tmp_id}">${v.tmp_title}</option>`;
                           $set_tmp.append(opt); 
                        });
                }
                });
            }

            function setTemplate(){
                let tmp_id = $set_tmp.val();
                let url = "<?php echo site_url("article/articleSetTmp/"); ?>"+tmp_id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $.each(rs.get,(i,v)=>{
                        
                        $keyword.focus();
                        $keyword.val("the key word "+v.tmp_title);
                        $keydes.val("Description "+v.tmp_title);
                        $ar_title.val(v.tmp_title);
                        $ar_des.value = v.tmp_des;
                        $ar_body.value = v.tmp_body;

                    });
                }
                });


            }
            function getSummary(){
                getList(ck_ar_page);
            }

            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getSummary();


                $btnArSave.on("click",function(){
                    arSave();
                });

                //-- setCat
                $set_cat.on("change",function(){
                    setCategory();
                });

                //-- set_tmp
                $set_tmp.on("change",function(){
                    setTemplate();
                })
                //-- edit
                $ar_list.delegate(".lnEdit","click",function(){
                    let id = $(this).attr("data-ar_id");
                    arEdit(id);
                });
                //-- del
                $ar_list.delegate(".lnDel","click",function(){
                    let id = $(this).attr("data-ar_id");
                    arDel(id);
                });

                //--- pagination
                $ar_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    ck_ar_page = Cookies.set("ck_ar_page",page);
                    getList(page);
                });
            }
            return{getEvent:getEvent}
        })();
        $AR.getEvent();
    });
</script>
