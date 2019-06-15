<form id="frmMember" action="<?php echo site_url("article/uSavePost");?>">
    <div class="col-lg-12">
        <h2 class="text-center">for SEO</h2>
    </div>
    <div class="form-group">
        <label for="meta_url">Meta url</label>
        <div>
            <input type="text" name="meta_url" id="meta_url" class="form-control meta_url">
        </div>
    </div>
    <div class="form-group">
        <label for="meta_keyword">Meta Keyword</label>
        <div>
            <input type="text" name="meta_keyword" id="meta_keyword" class="form-control meta_keyword">
        </div>
    </div>
    <div class="form-group">
        <label for="meta_keydes">Meta Description</label>
        <div>
            <input type="text" name="meta_keydes" id="meta_keydes" class="form-control meta_keydes">
        </div>
    </div>
    <div class="col-lg-12">
        <h1 class="text-center">Post content</h1>
        <hr class="my-4" />
    </div>
    <div class="form-group">
        <label for="ar_title">Title</label>
        <input type="text" class="form-control ar_title" id="ar_title" name="ar_title" />
        <input type="hidden" class="ar_id" name="ar_id" id="ar_id"/>
        <input type="hidden" class="kw_id" name="kw_id" id="kw_id" />
        
    </div>
    <p>&nbsp;</p>
    <div class="form-group">
        <label for="ar_sum">Summary</label>
        <div class="float-right">
            <input type="checkbox" id="sum_tmp" class="sum_tmp"> I want the html template
        </div>
        <textarea name="ar_sum" class="form-control ar_sum" id="ar_sum" rows="15"></textarea>
    </div>
    <p>&nbsp;</p>
    <div class="sum_result"></div>
    <p>&nbsp;</p>
    <div class="form-group">
        <label for="ar_body">Post Content</label>
        <textarea class="tinymce ar_body" id="ar_body" name="ar_body"></textarea>
        
    </div>
    <p>&nbsp;</p>
    <div class="frmResult">
    
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</form>