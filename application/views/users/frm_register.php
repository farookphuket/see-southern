<form class="form-horizontal" action="<?php echo site_url("register/regis_user");?>" id="frmRegis">


<div class="form-group">
    <label for="reg_email">E-Mail</label>
    <input type="email" class="form-control reg_email" name="reg_email" id="reg_email" required />
</div>

<div class="form-group">
    <label for="reg_name">User Name</label>
    <input type="text" class="form-control reg_name" name="reg_name" id="reg_name" required/>
</div>

<div class="form-group">
    <label for="passwd">Password</label>
    <input type="password" class="form-control passwd" name="passwd" id="passwd" required />
</div>
<div class="form-group">
    <label for="conf_pass">Confirm Password</label>
    <input type="password" class="form-control conf_pass" name="conf_pass" id="conf_pass" required />
</div>
<div class="forom-group">
<label>&nbsp;</label>
<div class="frmRes"></div>
</div>

<div class="form-group">
    <label>&nbsp;</label>
    <button class="btn btn-primary btnSave" type="submit">
    Register
    </button>
</div>

</form>


<script>
    $(function(){

        var $el = $("#users");
        var $page_status = $(".status");

        var regis = (function(){

            var $f = $el.find("#frmRegis");
            var rs_name = $el.find(".reg_name");
            var rs_email = $el.find(".reg_email");
            var pass = $el.find(".passwd");
            var conf_pass = $el.find(".conf_pass");
            var btnSave = $el.find(".btnSave");
            var frmRes = $el.find(".frmRes");
            
            function chk_email(){
                
                if(!rs_email.val()){
                    return false;
                }else{
                    var data = {reg_email : rs_email.val()};
                    var url = "<?php echo site_url("register/chk_email");?>";
                    $.ajax({
                        type : "post",
                        url : url,
                        data : data,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            if(parseInt(rs.error) !== 0){
                                $page_status.html(rs.msg).show();
                                setTimeout(function(){
                                    $page_status.html("loading...").fadeOut("slow");
                                    rs_email.focus();
                                },4000);
                            }
                        }
                    });
                }
            }
            //-----------
            //---check user name
            function chk_name(){
                if(!rs_name.val()){
                    return false;
                }else if(parseInt(rs_name.val().length) < 4){
                    alert("Error : user name is too short!");
                    setTimeout(function(){
                        rs_name.focus();
                    },400);
                }else{
                    //alert(`name is ${rs_name.val()}`);
                    var data = {reg_name:rs_name.val()};
                    var url = "<?php echo site_url("register/chk_name");?>";
                    $.ajax({
                        type : "post",
                        url : url,
                        data : data,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            if(parseInt(rs.error) !== 0){
                                $page_status.html(rs.msg).show();
                                setTimeout(function(){
                                    $page_status.html("loading...").fadeOut("slow");
                                    rs_name.focus();
                                },4000);
                            }
                        }
                    });
                }
            }


            //----------
            function chk_pass(){
                var p1 = pass.val();
                var p2 = conf_pass.val();
                
                if(p1 !== p2){
                    alert(`Error : password is not match!`);
                    setTimeout(function(){
                        conf_pass.focus();
                        btnSave.prop("disabled",true);
                    },500);
                    
                }else{
                    btnSave.prop("disabled",false);
                }
                return false;
            }
            //----
            //----createUser
            function createUser(){
                btnSave.unbind();
                $f.submit(function(e){
                    e.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize();
                    $.post(url,data,function(o){
                        var rs = $.parseJSON(o);
                        if(parseInt(rs.error) !== 0){
                            $page_status.html(rs.msg).show();
                        }else{
                            frmRes.html(`<div class="alert alert-success">${rs.msg}</div>`).show();
                        }
                        setTimeout(function(){
                            $f.trigger("reset");
                            frmRes.html("").fadeOut("slow");
                        },8000);
                    });
                });
            }
            //--------------
            function getEvent(){
                btnSave.prop("disabled",true);
                rs_email.on("blur",function(){
                    chk_email();
                });
                
                //---user lost focus name field
                rs_name.on("blur",function(){
                    chk_name();
                });
                //---user lost focus field pass confirm
                conf_pass.on("blur",function(){
                    chk_pass();
                });

                //---btnSave click 
                btnSave.on("click",function(){
                    createUser();
                });
            }
            return{getEvent: getEvent}
        })();
        regis.getEvent();
    });
</script>