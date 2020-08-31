<section id="" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
<?php
    $frm = "MEMBER/ustd/_frm_ustd";
    $this->load->view($frm);
?> 
            </div>
            <div class="col-lg-12">
                <p class="pt-4">&nbsp;</p>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="frm">
                <h1 class="text-center">what's going on <?php echo $today; ?></h1>
                </div>

                <div class="st_pagin mt-5 mb-5">
                    
                </div>

                <div class="st_list">
                    
                </div>
                <div class="st_pagin mt-5 mb-5">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<script charset="utf-8">
        $(function(){
            const $USTD = (function(){


                let $page_status = getEl(".status");
                //-- use cookies 
                let ck_ustd_page = Cookies.get("ck_ustd_page");

                let $st_list = getEl(".st_list");
                let $st_pagin = getEl(".st_pagin");

                let $frm = getEl("#frmUstd");

                let my_id = "<?php echo $user_id; ?>";
                let my_name = "<?php echo $user_name; ?>";
                let pT = `What in your mind ${my_name}`;

                let st_user_id = getEl(".st_user_id");
                let st_id = getEl(".st_id");
                let show_pub = getEl(".show_pub");
                let st_title = getEl(".st_title");
                let st_body = new Jodit(".st_body",{"height":450,"placeholder":pT});
                let ustdBtnSave = getEl("#ustdBtnSave");
                let ustdBtnReset = getEl("#ustdBtnReset");

                //let get_tmp = getEl(".set_cat");
                let set_tmp = getEl(".set_tmp");

                function getTemplate(){
                    let option = "<option value=0>--Select--</option>";
                    let url = "<?php echo site_url("ustd/userGetTemplate/"); ?>";
                    $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(rs);

                        let num = 0;
                        
                        $.each(rs.get_tmp,(i,v)=>{
                            num++;
                            option = `<option value="${v.tmp_id}">${num} ${v.tmp_title}</option>`;
                            set_tmp.append(option);

                        });
                    }
                    });  
                
                    
                }

                function setTemplate(){
                    let tmp = set_tmp.val();
                    let url = "<?php echo site_url("ustd/userSetTemplate/"); ?>"+tmp;
                    $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        $.each(rs.get,(i,v)=>{
                            st_body.value = v.tmp_des;
                            st_title.val(v.tmp_title);
                        });
                    }
                    });
                }

                function getUstd(ck_ustd_page){
                    $st_list.html("");
                    let url = "<?php echo site_url("ustd/ustdUserGet/"); ?>"+ck_ustd_page;
                    $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        console.log(rs);
                        if(rs.pagination){
                            $st_pagin.html(rs.pagination);
                        }

                        $.each(rs.ustd_pub,(i,v)=>{
                        let edit = "";
                        
                        if(v.st_user_id === my_id){
                            edit = `<div class="float-right">
                                <div class="btn-group">
                                <a class="btn btn-primary lnEdit" data-st_id="${v.st_id}">Edit</a>
                                <a class="btn btn-danger lnDel" data-st_id="${v.st_id}">Delete</a>
                                </div>
                    </div>`;

                        }
                        let tmp = `
                            <div class="bg-faded pt-0 mb-5">
                            ${v.st_body}
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Post Title</th>
                                        <td>${v.st_title} ${edit}</td>
                                    </tr>
                                    <tr>
                                        <th>Post By</th>
                                        <td>${v.name}</td>
                                    </tr>
                                    <tr>
                                        <th>On</th>
                                        <td> create ${v.st_date_create} | update ${v.st_date_update}</td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                            <p>&nbsp;</p>`;
                            $st_list.append(tmp);
                        });

                    }
                    });

                }

                function ustdEdit(id){
                    let url = "<?php echo site_url("ustd/ustdUserEdit/"); ?>"+id;
                    $.ajax({
                        url : url,
                            success : (e)=>{
                            let rs = $.parseJSON(e);
                            $.each(rs.get,(i,v)=>{

                            if(parseInt(v.show_public) !== 0){
                                show_pub.prop("checked",true);
                            }
                                st_id.val(v.st_id);
                                set_tmp.prop("disabled",true);
                                st_body.value = v.st_body;
                                st_title.val(v.st_title);
                                st_title.focus();
                            });
                    }
                    });
                }

                function ustdDel(id){
                    let url = "<?php echo site_url("ustd/ustdUserDel/"); ?>"+id;
                    $.ajax({
                        url : url,
                            success : (e)=>{
                            let rs = $.parseJSON(e);
                            $page_status.html(rs.msg).show();
                            setTimeout(()=>{
                            $page_status.html("loading...").fadeOut("slow");
                            getSummary();
                            },1450);
                    }
                    });
                }

                function ustdSave(){

                    ustdBtnSave.unbind();
                    $frm.submit(function(e){
                        e.preventDefault();

                        let data = $(this).serialize()+"&st_user_id="+my_id;
                        let url = $(this).attr("action");
                        $.post(url,data,function(e){
                            let rs = $.parseJSON(e);
                            $page_status.html(rs.msg).show();
                            setTimeout(()=>{
                                $page_status.html("loading...").fadeOut("slow");
                                getSummary();
                            },1450);
                        });
                    });
                }
                function getSummary(){
                    if(ck_ustd_page === undefined){
                        ck_ustd_page = 1;
                    }
                    getUstd(ck_ustd_page);
                }

                function getEl(el){
                    return $(el);
                }
                function getEvent(){
                    getSummary();
                    
                    ustdBtnSave.prop("disabled",false);
                    
                    getTemplate();

                    //-- select template
                    set_tmp.on("change",function(){
                        setTemplate();
                    });


                    //--- btnSave
                    ustdBtnSave.on("click",function(){
                        ustdSave();
                    });

                    //--- btnReset
                    ustdBtnReset.on("click",function(){
                        $frm.trigger("reset");
                        st_id.val(0);
                        st_body.value = "";
                        set_tmp.prop("disabled",false);
                        set_tmp.focus();
                    });

                    //-- edit
                    $st_list.delegate(".lnEdit","click",function(e){
                        e.preventDefault();
                        let id = $(this).attr("data-st_id");
                        ustdEdit(id);
                    });

                    //-- delete
                    $st_list.delegate(".lnDel","click",function(e){
                        e.preventDefault();
                        let id = $(this).attr("data-st_id");
                        ustdDel(id);
                    });

                    //-- pagination
                    $st_pagin.delegate(".pagination a","click",function(e){
                        e.preventDefault();
                        let page = $(this).attr("data-ci-pagination-page");
                        Cookies.set("ck_ustd_page",page);
                        getUstd(page);
                    });
                }
                return{getEvent:getEvent}
            })();
            $USTD.getEvent();
        });
</script>


