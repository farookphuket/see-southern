<section id="share_status" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h1><?php echo $sysName; ?></h1>
                    </div>
                </div>
            </div>

            <div class="page-content">
<?php
    $frm = "ADMIN/ustd/_frm_ustd";
    $this->load->view($frm);
?>
                <p class="line">&nbsp;</p>
                <h1 class="text-center">
                    <span class="badge badge-success st_num">0</span>
                </h1>
                <p class="line">&nbsp;</p>
                <div class="st_pagin">
                    
                </div>
                <p class="pt-3">&nbsp;</p>
                <div class="st_list">
                    
                </div>
                <div class="st_pagin">
                    
                </div>
            </div>

        </div>
    </div>
</section>
<script charset="utf-8">
$(function(){
    const $USTD = (function(){
        let $page_status = getEl(".status");

        let $st_list = getEl(".st_list");
        let $st_pagin = getEl(".st_pagin");
        let $st_num = getEl(".st_num");

        //--- use cookie
        let ck_ustd_page = Cookies.get("ck_ustd_page");

        //-- the form
        let $frm = getEl("#frmUstd");
        let set_tmp = getEl(".set_tmp");
        let st_id = getEl(".st_id");
        let st_user_id = getEl(".st_user_id");
        let st_title = getEl(".st_title");
        let my_name = "<?php echo $user_name; ?>";
        let pL = `Hi ${my_name} ,what is going on?`;
        let st_body = new Jodit(".st_body",{"height":450,"placeholder":pL});
        let show_public = getEl(".show_public");
        let btnSave = getEl(".btnSave");
        let btnReset = getEl(".btnReset");

        function ustdGet(page=1){
            $st_list.html("");
            let url = "<?php echo site_url("ustd/ustdAdminGet/"); ?>"+page;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                //console.log(rs);
                $st_num.html(rs.get_all.length);
                $.each(rs.get_st,(i,v)=>{
                    let yes = `<span class="badge badge-success">Yes</span>`;
                    let no = `<span class="badge badge-danger">No</span>`;
                    let show = no;
                    if(parseInt(v.show_public) !== 0){
                        show = yes;
                    }
                    let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.st_title}</h1>
    </div>
    <div class="card-body">
       ${v.st_body} 
       <div class="table-responsive">
           <table class="table table-bordered">
               <tr>
                   <th>By</th>
                   <td>${v.name}</td>
               </tr>
                <tr>
                   <th>Date</th>
                   <td>
                     <div class="text-center">
                         <p>Create : ${v.st_date_create}
                         | Update : ${v.st_date_update}</p>
                     </div>
                   </td>
                   </tr>
                   <tr>
                       <th>Show as Public</th>
                       <td>${show}</td>
                   </tr>

           </table>
       </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <div class="btn-group">
                <button class="btn btn-primary lnEdit" data-st_id="${v.st_id}">Edit</button>
                <button class="btn btn-danger lnDel" data-st_id="${v.st_id}">Del</button>
            </div>
        </div>
    </div>
</div><p class="pt-2">&nbsp;</p>`;
                    $st_list.append(tmp);
                });
                if(rs.pagination){
                    $st_pagin.html(rs.pagination);
                }
            }
            });
        }
        
        function ustdEdit(id){

            let url = "<?php echo site_url("ustd/ustdAdminEdit/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $.each(rs.get,(i,v)=>{
                    set_tmp.prop("disabled",true);
                    st_id.val(v.st_id);
                    st_user_id.val(v.st_user_id);
                    st_title.val(v.st_title);
                    st_title.focus();
                    st_body.value = v.st_body;
                    if(parseInt(v.show_public) !== 0){
                        show_public.prop("checked",true);
                    }

                });
            }
            });
        }

        function ustdSetTemplate(){
            if(st_id.val("")){
                let tm = set_tmp.val();
                let url = "<?php echo site_url("tmp/tmpAdminEdit/") ?>"+tm;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        st_title.val(v.tmp_title);
                        st_body.value = v.tmp_des;
                    });
                }
                });
            }
            
            
        }

        function ustdSave(){
            btnSave.unbind();
            $frm.submit(function(e){
                e.preventDefault();
                let url = $(this).attr("action");
                let data = $(this).serialize();
                $.post(url,data,function(e){
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                        $page_status.html('loading...').fadeOut("slow");
                        getSummary();
                        ustdEdit(rs.st_id);
                    },450);
                });
            });
        }

        function ustdDel(id){
            let url = "<?php echo site_url("ustd/ustdAdminDel/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $page_status.html(rs.msg).show();
                setTimeout(()=>{
                $page_status.html("loadin...").fadeOut("slow");
                getSummary();
                },2000);
            }
            });
        }
        function getSummary(){
            
            if(ck_ustd_page === undefined){
                ck_ustd_page = 1;
            }
            
            ustdGet(ck_ustd_page);
        }
        function getEl(el){
            return $(el);
        }
        function getEvent(){
            getSummary();

            //-- set template
            set_tmp.on("change",function(){
                ustdSetTemplate();
            });


            //-- onEdit
            $st_list.delegate(".lnEdit","click",function(){
                let id = $(this).attr("data-st_id");
                ustdEdit(id);
            });

            //-- onDel
            $st_list.delegate(".lnDel","click",function(){
                let id = $(this).attr("data-st_id");
                ustdDel(id);
            });

            //-- onsave
            btnSave.on("click",function(){
                ustdSave();
            });

            //-- on Reset
            btnReset.on("click",function(){
                $frm.trigger("reset");
                setTimeout(()=>{
                    st_body.value = "";
                    st_id.val(""); 
                    set_tmp.prop("disabled",false).focus();
                },450);
            });

            //--- pagination
            $st_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                let page = $(this).attr("data-ci-pagination-page");
                Cookies.set("ck_ustd_page",page);
                ustdGet(page);
            });
        }
        return{getEvent:getEvent}
    })();
    $USTD.getEvent();
});
</script>
