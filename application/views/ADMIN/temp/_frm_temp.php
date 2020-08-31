<form class="frm" action="<?php echo site_url("tmp/tmpAdminSave"); ?>" id="frmTmp">

<!-- input hidden -->
<input type="hidden" name="tmp_id" id="tmp_id" class="tmp_id">
<input type="hidden" name="cat_id" id="cat_id" class="cat_id">
<input type="hidden" name="tmp_user_id" id="tmp_user_id" class="tmp_user_id">

    <div class="form-group">
        <div class="row">
            <div class="col-lg-6">
                <select name="set_cat" class="set_cat form-control" required>
                <option value=0>--Select category--</option>
<?php
if($get_cat):
    $num = 0;
    foreach($get_cat as $row):
        $num++;
?>
    <option value="<?php echo $row->cat_id; ?>">
        <?php echo"{$num} {$row->cat_title}"; ?>
    </option>
<?php
    endforeach;
endif;

?>
                </select>
            </div>
            <div class="col-lg-6">
                <label for="tmp_show_pub" class="checkbox-inline">
                    <input type="checkbox" name="tmp_show_pub" class="form-control tmp_show_pub"> 
                    <span class="badge badge-success">show as public</span>
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="tmp_title">Title</label>
        <input type="text" name="tmp_title"  class="form-control tmp_title">
    </div>
    
    <div class="form-group">
        <label for="tmp_des">Description</label>
        <textarea class="form-control tmp_des" name="tmp_des"></textarea>
    </div>

    <div class="form-group">
        <label for="tmp_body">Body</label>
        <textarea class="form-control tmp_body" name="tmp_body"></textarea>
    </div>


    <div class="float-right">
        <div class="btn-group">
            <button class="btn btn-primary btnSave" type="submit" form="frmTmp">Save</button>
            <button class="btn btn-info btnReset" type="reset">Reset to create new</button>
        </div>
        
    </div>

</form>
