<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h1><?php echo $sysName; ?></h1>
                    </div>
                    <div class="card-body">
                    <p><?php echo"System date {$sysDate}"; ?></p>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <p>&nbsp;</p>
            </div>
            <div class="col-lg-12">

<?php
    $frm = "ADMIN/category/_frm_cat";
    $this->load->view($frm);
?> 
            </div>
            <p class="pt-4">&nbsp;</p>


            <div class="col-lg-12">
            
                <h1 class="text-center">
                    Category 
                    <span class="badge badge-success numCat">0</span> item(s).
                </h1>
                
                
                    <div class="cat_pagin">
                        
                    </div>
                    <p class="pt-3">&nbsp;</p>
                    <div class="cat_list">
                    
                    </div>
                    <div class="cat_pagin">
                    
                    </div>     
                </div>
                
            </div>


        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){

        const $CAT = (function(){

            let $page_status = getEl(".status");
            let $cat_list = getEl(".cat_list");
            let $cat_pagin = getEl(".cat_pagin");
            let $numCat = getEl(".numCat");

            //-- use cookie
            let ck_cat_page = Cookies.get("ck_cat_page");

            //-- the form
            let $frm = getEl("#frmCategory");
            let cat_uri = getEl(".cat_uri");
            let cat_title = getEl(".cat_title");
            let cat_section = getEl(".cat_section");
            let cat_des = getEl(".cat_des");
            let c_pub = getEl(".c_pub");
            let c_allow_change = getEl(".c_allow_change");
            let cat_id = getEl(".cat_id");
            let cat_user_id = getEl(".cat_user_id");
            let btnSave = getEl(".btnSave");
            let btnReset = getEl(".btnReset");

            function getCatList(ck_cat_page = 1){
                $cat_list.html("");
                let url = "<?php echo site_url("category/adminGetCat/"); ?>"+ck_cat_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $numCat.html(rs.get_all.length);
                    $.each(rs.get_cat,(i,v)=>{

                    let yes = `<span class="badge badge-success">Yes</span>`;
                    let no = `<span class="badge badge-danger">No</span>`;

                    let show_pub = no;
                    if(parseInt(v.cat_show_public) !== 0){
                        show_pub = yes;
                    } 
                    let allow_change = no;
                    if(parseInt(v.allow_user_change) !== 0){
                        allow_change = yes;
                    }

                    let tmp = `<div class="card">
    <div class="card-header">
        <h2 class="text-center">${v.cat_title}</h2>
    </div>
    <div class="card-body">
        <pre>
            ${v.cat_des}
        </pre>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>title</th>
                    <td>${v.cat_title}</td>
                </tr>
                <tr>
                    <th>section</th>
                    <td>${v.cat_section}</td>
                </tr>
<tr>
                    <th>uri</th>
                    <td>${v.cat_uri}</td>
                </tr>

                <tr>
                    <th>by</th>
                    <td>${v.name}</td>
                </tr>

                <tr>
                    <th>date</th>
                    <td><p>create ${v.cat_date_create} | update ${v.cat_date_update}</p></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><p> Public ${show_pub} | Allow change ${allow_change} </p> </td>
                </tr>



            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <div class="btn-group">
                <a class="btn btn-primary lnEdit" data-cat_id="${v.cat_id}" style="font-weight:bold;color:white;" href="#category">Edit</a>
                <a class="btn btn-danger lnDel" data-cat_id="${v.cat_id}" style="font-weight:bold;color:white;" >Delete</a>
            </div>
        </div>
    </div>
</div><p>&nbsp;</p>`;
                        $cat_list.append(tmp);
                    });
                    if(rs.pagination){
                        $cat_pagin.html(rs.pagination);
                    }
                }
                });
            }

            function catEdit(id){

                let url = "<?php echo site_url("category/catAdminEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $.each(rs.get,(i,v)=>{
                        cat_uri.val(v.cat_uri);
                        cat_title.val(v.cat_title);
                        cat_section.val(v.cat_section);
                        cat_des.val(v.cat_des);
                        if(parseInt(v.cat_show_public) !== 0){
                            c_pub.prop("checked",true);
                        }
                        if(parseInt(v.allow_user_change) !== 0){
                            c_allow_change.prop("checked",true);
                        }
                        cat_id.val(v.cat_id);
                        cat_user_id.val(v.user_id);
                        location.href="#category";
                    });
                }
                });
            }

            function catSave(){
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
                            catEdit(rs.cat_id);
                        },1500);
                    });
                }); 
            }

            function catDel(id){
                let url = "<?php echo site_url("category/catAdminDel/") ?>"+id;
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
                let g_time = 0;
                let chk_page = setInterval(()=>{
                    g_time++;
                    console.log(`ck page is ${ck_cat_page} now the count is ${g_time} time`);

                    getCatList(ck_cat_page);
                    if(g_time > 3){
                        console.log(`the count is ${g_time} now Stop`);
                        clearInterval(chk_page);
                    }
                },500); 

            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){

                getSummary();

                //--- edit 
                $cat_list.delegate(".lnEdit","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-cat_id");

                    catEdit(id);
                });

                btnSave.on("click",function(){
                    catSave();
                });

                btnReset.on("click",function(){

                    cat_id.val(0);
                    $frm.trigger('reset');                   
                });

                //--- delete 
                $cat_list.delegate(".lnDel","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-cat_id");
                    catDel(id);
                });
                //-- pagination
                $cat_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    if(page === undefined){
                        page = 1;
                    }
                    Cookies.set("ck_cat_page",page);
                    getCatList(page);
                });
            }
            return{getEvent:getEvent}
        })();
        $CAT.getEvent();
    });
</script>
