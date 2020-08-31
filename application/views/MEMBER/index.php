
<!-- ustd 28-Apr-2020 -->
<?php
    $ustd = "MEMBER/ustd/index";
    $this->load->view($ustd);
?>
<!-- End of ustd -->
<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">
<?php echo $user_name; ?>'s info
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody class="u_info">
                                    
                                </tbody>
                                
                            </table>
                        </div>
<?php
    $frm = "MEMBER/profile/_frm_profile";
    $this->load->view($frm);
?>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <div class="btn-group">
                                <button class="btn btn-primary btnSave" type="submit" form="frmProfile" id="infoBtnSave">Save</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){
        const $USR = (function(){


            let $u_info = getEl(".u_info");

            let $page_status = getEl(".status");
            let is_confirm = 0;

            //--- the form
            let $frm = getEl("#frmProfile");
            let $u_name = getEl(".user_name");
            let $email = getEl(".user_email");
            let $tel = getEl(".user_tel");
            let $about_user = new Jodit(".about_user",{"height":450});
            let $conf_pass = getEl("#conf_pass");
            let $new_pass = getEl(".new_pass");
            let btnSave = getEl("#infoBtnSave");
            
            $u_name.val("");
            $new_pass.val("");
            $conf_pass.val("");

            let my_id = "<?php echo $user_id; ?>";
            let my_name = "<?php echo $user_name; ?>";

            function getMyInfo(){
                $u_info.html("");
               
                let url = "<?php echo site_url("users/userEditInfo/"); ?>";

                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    //console.log(rs);
                    $.each(rs.get,(i,v)=>{
                        $email.val(v.email);
                        $about_user.value = v.about_user;
                        $u_name.val(v.name);
                        $tel.val(v.tel);
                    let tmp = `<tr>
                        <th>Name</th>
                        <td>${v.name}</td>
                        </tr>
                <tr>
                        <th>Email</th>
                        <td>${v.email}</td>
                </tr>
                <tr>
                        <th>tel</th>
                        <td>${v.tel}</td>
                </tr>
                <tr>
                <td colspan=2>
                ${v.about_user}
                </td>
                </tr>
`;
                        $u_info.append(tmp);

                    });

                }
                });
            }

            function userCheckPass(){
                let vvi = $conf_pass.val();

                if(vvi.length > 2){
                    let url = "<?php echo site_url("users/userIsConfirmPassword"); ?>";
                    let data = {conf_pass : vvi,user_id : my_id};
                    $.ajax({
                    url : url,
                        type : "post",
                        data : data,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(`the confirm is ${is_confirm}`);
                        if(rs.is_confirm !== 0){
                            //console.log(`the confirm is ${rs.is_confirm}`);
                            $u_name.focus();
                            btnSave.prop("disabled",false);
                            is_confirm = 1;

                        }else{
                            console.log(`there is 0`);
                            $page_status.html(`Sorry : incorrect password!`).show();
                            setTimeout(()=>{
                                $page_status.fadeOut("slow");
                                $conf_pass.focus();
                                btnSave.prop("disabled",true);

                            },1500);
                        }
                    }
                    }); 
                }


                

            }


            
            function userSave(){
                btnSave.unbind();
                $frm.submit(function(e){
                    e.preventDefault();

                    let url = $(this).attr("action");
                    let data = $(this).serialize()+"&action_id="+my_id;
                    $.post(url,data,function(e){
                        let rs = $.parseJSON(e);
                        $page_status.html(rs.msg).show();
                        setTimeout(()=>{
                        $page_status.html("loading...").fadeOut("slow");
                        getSummary();
                        },1500);
                    });
                });
            }


            function getSummary(){
                setTimeout(()=>{
                $frm.trigger("reset");

                getMyInfo();
                    $conf_pass.focus();
                },1500);
            }
            function getEl(el){
                return $(el);
            }

            function getEvent(){
                getSummary();

                //-- check password
                $conf_pass.on("blur",function(){
                    btnSave.prop("disabled",true);
                    userCheckPass();
                });


                btnSave.on("click",function(){
                    userSave();
                });

            }
            return{getEvent:getEvent}
        })();
        $USR.getEvent();
    });
</script>
