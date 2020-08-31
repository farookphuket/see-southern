<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-primary">
                    <h1><?php echo $sysName; ?></h1>
                    </div>
                    <div class="card-body">
                <p>System date <?php echo $sysDate; ?></p>
                </div>
                <div class="card-footer">
                <p><?php
echo"system info : {$sysName} version {$sysVersion} system date {$sysDate}";
?></p>
                </div>
            </div>

        
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="page-content">
    <!-- form -->
            
<?php
    $frm = "ADMIN/temp/_frm_temp";
    $this->load->view($frm);
?>
    <!-- End of form -->

             
        </div>
            <p class="line">&nbsp;</p>
        <div class="page-content">
            <h1 class="text-center" id="show_list">
            Template 
                <span class="badge badge-success tmp_num">0</span> item(s).
            </h1>
            <p>show the list of template</p>
            <p class="line">&nbsp;</p>

            <div class="tmp_pagin">
                
            </div>
            <p class="pt-4">&nbsp;</p>
            <div class="tmp_list">
                
            </div>
            <div class="tmp_pagin">
                <p>test here</p>
            </div>
            
        </div>


            

</section>
<script charset="utf-8">
    $(function(){
        const $TMP = (function(){

            //-- use cookie
            let ck_tmp_page = Cookies.get("ck_tmp_page");
            let $tmp_list = getEl(".tmp_list");
            let $tmp_pagin = getEl(".tmp_pagin");
            let $tmp_num = getEl(".tmp_num");

            let $page_status = getEl(".status");

            //-- the form 
            let $frm = getEl("#frmTmp");
            let tmp_id = getEl(".tmp_id");
            let tmp_user_id = getEl(".tmp_user_id");
            let cat_id = getEl(".cat_id");
            let tmp_show_pub = getEl(".tmp_show_pub");
            let tmp_title = getEl(".tmp_title");
            let tmp_body = new Jodit(".tmp_body",{"placeholder":"Template body detail","height":550});
            let tmp_des = new Jodit(".tmp_des",{"placeholder":"Description for this template","height":550});
            let set_cat = getEl(".set_cat");
            let btnSave = getEl(".btnSave");
            let btnReset = getEl(".btnReset");

            function getTmpList(ck_tmp_page = 1){
                $tmp_list.html("");
                let url = "<?php echo site_url("tmp/adminGetList/"); ?>"+ck_tmp_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $tmp_num.html(rs.get_all.length);
                    $tmp_pagin.html(rs.pagination);
                    $.each(rs.get_tmp,(i,v)=>{

                        let yes = `<span class="badge badge-success">Yes</span>`;
                        let no = `<span class="badge badge-danger">No</span>`;
                        let t_show = no;
                        if(parseInt(v.tmp_show_pub) !== 0){
                            t_show = yes;
                        }
                        let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.tmp_title}</h1>
    </div>
    <div class="card-body">
       ${v.tmp_des} 
       <p class="line">&nbsp;</p>
       <div class="table-responsive">
           <table class="table table-bordered">
               <tr>
                   <th>title</th>
                   <td>${v.tmp_title}</td>
               </tr>
                <tr>
                   <th>public</th>
                   <td>${t_show}</td>
                   </tr>
                <tr>
                   <th>by</th>
                   <td>${v.name}</td>
                </tr>
                <tr>
                   <th>date</th>
                   <td>${v.tmp_title}
                     <p>Create : ${v.tmp_date_create}
                    | update : ${v.tmp_date_update} 
                     </p>
                   </td>
               </tr>


           </table>
       </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <div class="btn-group">
                <button class="btn btn-primary lnEdit" data-tmp_id="${v.tmp_id}">edit</button>
                <button class="btn btn-danger lnDel" data-tmp_id="${v.tmp_id}">delete</button>
            </div>
        </div>
    </div>
</div><p class="pt-4">&nbsp;</p>`;

                        //-- render
                        $tmp_list.append(tmp);
                    });

                    
                }
                });            
            }

            function tmpSave(){
                btnSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();

                    let url = $(this).attr('action');
                    let data = $(this).serialize();
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        //console.log(rs);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                            $page_status.html("loading...").fadeOut("slow");
                            getSummary();
                            tmpEdit(rs.tmp_id);
                            location.href = "#frmTmp";
                            set_cat.focus();
                        },500);
                    });
                });
            }

            function tmpEdit(id){
                location.href = "#frmTmp";
                let url = "<?php echo site_url("tmp/tmpAdminEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        tmp_id.val(v.tmp_id);
                        tmp_title.val(v.tmp_title);
                        tmp_body.value = v.tmp_body;
                        tmp_des.value = v.tmp_des;
                        tmp_user_id.val(v.tmp_user_id);
                        set_cat.val(v.cat_id).focus();
                        if(parseInt(v.tmp_show_pub) !== 0){
                            tmp_show_pub.prop("checked",true);

                        } 

                    });
                }
                });
            }


            function tmpDel(id){
                let url = "<?php echo site_url("tmp/tmpAdminDel/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                        $page_status.html("loading...").fadeOut("slow");
                        getSummary();
                    },550);
                }
                });
            }


            function getSummary(){
                let num = 0;
                if(ck_tmp_page === undefined){
                    ck_tmp_page = 1;
                }
                let c_time = setInterval(()=>{
                    num++;
                    
                    getTmpList(ck_tmp_page);
                    if(num > 2){
                        clearTimeout(c_time);
                        location.href = "#show_list";
                    }
                },1500);
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                
                getSummary();

                
                
                
                btnSave.on("click",function(){
                    tmpSave();
                });

                btnReset.on("click",function(){
                    tmp_id.val(0);
                    tmp_des.value = "";
                    tmp_body.value = "";
                    $frm.trigger("reset");
                    set_cat.focus();

                });

                $tmp_list.delegate(".lnEdit","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-tmp_id");
                    tmpEdit(id);
                });

                $tmp_list.delegate(".lnDel","click",function(e){
                    e.preventDefault();
                    let id = $(this).attr("data-tmp_id");
                    tmpDel(id);
                });

                //-- pagination
                $tmp_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    if(page === undefined){
                        page = 1;
                    }
                    Cookies.set("ck_tmp_page",page);
                    getTmpList(page);
                });

            }
            return{ getEvent: getEvent }
        })();
        $TMP.getEvent();
    });
</script>
    
