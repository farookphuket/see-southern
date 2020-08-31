<form id="frmComment" action="<?php echo site_url("comment/cmtMemberSave"); ?>" class="frm">
    
    <!-- input hidden -->
    <input type="hidden" name="c_id" id="c_id" class="c_id">
    <input type="hidden" name="c_user_id" id="c_user_id" class="c_user_id">


    <input type="hidden" name="c_section_name" id="c_section_name" class="c_section_name" value="<?php echo $this->uri->segment(1); ?>">
    <input type="hidden" name="c_item_id" id="c_item_id" class="c_item_id"  value="<?php echo $this->uri->segment(3); ?>">
    <input type="hidden" name="c_full_url" id="c_full_url" class="c_full_url" value="<?php echo current_url(); ?>">
        
    <div class="form-group">
        <label for="" class="checkbox-inline">
            <input type="checkbox" name="c_set_show" class="form-control c_set_show" id="c_set_show">  show public
        </label>
    </div>

    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="c_comment_title" id="c_comment_title" class="form-control c_comment_title" maxlength="100">
    </div>
    <div class="form-group">
        <label for="">Comment</label>
        <textarea class="form-control c_comment_body" name="c_comment_body" id="c_comment_body"></textarea>
    </div>
    <div class="form-group pt-2">
        <div class="float-right">
            <div class="btn-group mb-3">
               <button class="btn btn-primary btnCommentSave" id="btnCommentSave" type="submit" form="frmComment">Save</button> 
               <button class="btn btn-danger btnCommentReset" id="btnCommentReset" type="reset" >Reset</button> 
            </div>
        </div>
    </div>
</form>
