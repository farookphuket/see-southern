<form class="form-horizontal" action="<?php echo site_url("article/adminSaveAr");?>" id="frmAr">

<div class="col-lg-12">
    <h2 class="text-center">For seo</h2>
</div>
<div class="form-group">
    <label for="og_url">share Url</label>
    <input type="text" name="og_url" id="og_url" class="form-control og_url" />
</div>
<div class="form-group">
    <label for="og_title">meta keyword</label>
    <input type="text" name="og_title" id="og_title" class="form-control og_title" />
</div>
<div class="form-group">
    <label for="og_des">meta description</label>
    <input type="text" name="og_des" id="og_des" class="form-control og_des" />
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="col-lg-12">
    <h2 class="text-center">Article</h2>
    <hr class="my-4" />
</div>
<div class="form-group">
    <label for="ar_title">Title</label>
    <input type="text" name="ar_title" id="ar_title" class="form-control ar_title" />
    <input type="hidden" name="ar_id" class="ar_id" />
    <input type="hidden" name="uniq_id" class="uniq_id" />
    <input type="hidden" name="ar_user_id" class="ar_user_id" value="<?php echo $user_id ?>"/>
    <input type="hidden" name="key_id" class="key_id" />
</div>
<p>&nbsp;</p>
<div class="form-group">
    <div class="float-right">
        <input type="checkbox" class="need_tmp" id="need_tmp"> I want html
    </div>
    <label for="ar_body">Summary</label>
    <textarea class="form-control ar_sum" name="ar_sum" id="ar_sum" rows=15 cols=8></textarea>
</div>
<p>&nbsp;</p>
<div class="sum_result">

</div>
<p>&nbsp;</p>
<div class="form-group">
    <div class="float-right">
    <input type="checkbox" class="body_tmp" id="body_tmp" /> Add html template
    </div>
    <label for="ar_body">Body</label>
    <textarea class="tinymce ar_body" name="ar_body" id="ar_body"></textarea>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="fResult">
    
</div>
<p>&nbsp;</p>
<div class="form-group">
    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" name="ar_pub" class="ar_pub" id="ar_pub">
                </div>
            </div>
            <input type="text" class="form-control col-sm-4" placeholder="Public">
        
            
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" name="ar_approve" class="ar_approve" id="ar_approve">
                </div>
            </div>
            <input type="text" class="form-control col-sm-4" placeholder="Approve">

            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" name="show_index" class="show_index" id="show_index">
                </div>
            </div>
            <input type="text" class="form-control col-sm-4" placeholder="Show in Homepage">

        </div>

    </div>
</div>




</form>
