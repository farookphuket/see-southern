<section id="forgotpass">
    <div class="container tm-container-2">
        <div class="row tm-section-mb">
            <div class="col-lg-12">
                <h1 style="margin-left:10px;" class="welcome-text">Lost your password?</h1>
            </div>
            <p>&nbsp;</p>


        <div class="col-lg-4">
            <div class="alert alert-warning">
                <p>Forgot your password?</p>
                <p>type your e-mail then press "submit" button.</p>
            </div>
        </div>
        <div class="col-lg-6">
        <form id="forgPass" action="<?php echo site_url("login/uForgot"); ?>">
                <div class="form-group">
                    <label for="fg_email">your e-mail</label>
                    <input type="email" name="fg_email" id="fg_email" class="form-control fg_email" required>
                </div>
                <p class="float-right">
                <button class="btn btn-primary btnSubmit" type="submit" form="forgPass">Submit</button>
                </p>
            </form>
            <div class="fStatus">
                
            </div>
        </div>
        


        </div>
       

    </div>



</section>

<script charset="utf-8">
$(()=>{
    const $FPASS = $("#forgotpass");

    const $page_status = $(".status");
    const fpass = (()=>{

    let $frm = getEl("#forgPass");
    let $fStatus = getEl(".fStatus");
    let fg_email = getEl(".fg_email");
    let btnSubmit = getEl(".btnSubmit");

    function sentEmail(){
        btnSubmit.unbind();
        $frm.submit(function(e){
            e.preventDefault();
            let url = $(this).attr("action");
            let data = $(this).serialize();
            $.post(url,data,(e)=>{
                let rs = $.parseJSON(e);

                $fStatus.html(rs.msg).show();
                $page_status.html(rs.msg).show();
                setTimeout(()=>{
                $page_status.html("loading...").fadeOut("slow");
                $fStatus.html("loading...").fadeOut("slow");  
                },9000);
            });
        });
    }

    function getEl(el){
        return $FPASS.find(el);
    }
    function getEvent(){
        btnSubmit.on("click",()=>{
        sentEmail();
    }); 
    }
        return{getEvent:getEvent}
    })();
    fpass.getEvent();

});
</script>
