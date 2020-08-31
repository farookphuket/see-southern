<section class="admin_index">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center"><?php echo $sysName; ?></h1>
                    </div>
                    <div class="card-body">
                    <p>System date <?php echo $sysDate; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="pt-4">&nbsp;</p>
            </div>
            <div class="col-lg-12">
            <form class="frm" action="<?php echo site_url("ustd/adminSave"); ?>" id="frmUstd">
                <div class="form-group">
                <label for="lnCreate">What is going on</label>
               <textarea class="form-control lnCreate"></textarea> 
                </div>
                <div class="form-group">
                    <div class="float-right">
                        <div class="btn-group">
                            <button class="btn btn-primary btnSave" type="submit" form="frmUstd">Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
$(function(){
    const $USTD = (function(){

        let me = "<?php echo $user_name; ?>";
        let lnCreate = new Jodit(".lnCreate",{"placeholder":`What is in your mind ${me}?`,height:550});

        function getEvent(){
            //alert('test');
        }
        return{getEvent : getEvent}
    })();
    $USTD.getEvent();
});
</script>
