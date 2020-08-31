<div class="container" id="frmArea">
<h2 class="text-center">category form</h2>
<form class="frm" action="<?php echo site_url("category/catAdminSave"); ?>" id="frmCategory">
        <!-- input hidden -->
        <input type="hidden" name="cat_id" class="cat_id">
        <input type="hidden" name="cat_user_id" class="cat_user_id">
        <div class="form-group">
            <label for="cat_uri">cat uri</label>
            <input type="text" name="cat_uri" class="form-control cat_uri" required>
        </div>
        <div class="form-group">
            <label for="cat_title">cat title</label>
            <input type="text" name="cat_title" class="form-control cat_title" required>
        </div>

        <div class="form-group">
            <label for="cat_section">cat section</label>
            <input type="text" name="cat_section" class="form-control cat_section" required>
        </div>
        <div class="form-group">
            <label for="cat_des">cat description</label>
            <input type="text" name="cat_des" class="form-control cat_des">
        </div>
        <div class="form-group">
            <label for="c_pub" class="checkbox-inline">
            <input type="checkbox" name="c_pub" class="form-control c_pub"> 
            <span class="badge badge-success">Show public</span>
            </label>
            <label for="c_allow_change" class="checkbox-inline">
            <input type="checkbox" name="c_allow_change" class="form-control c_allow_change"> 
            <span class="badge badge-danger">Allow change by user</span>
            </label>


        </div>



        <div class="float-right">
        <div class="btn-group">
            <button class="btn btn-primary btnSave" type="submit" form="frmCategory">Save</button>
            <button class="btn btn-danger btnReset" type="reset">Reset to Create New</button>
        </div>
        </div>
    </form>
</div>
