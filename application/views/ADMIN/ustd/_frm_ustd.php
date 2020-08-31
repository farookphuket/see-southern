<form id="frmUstd" action="<?php echo site_url("ustd/ustdAdminSave"); ?>" class="frm">
<!-- hidden field -->
<input type="hidden" name="kw_id" class="kw_id">
<input type="hidden" name="st_id" class="st_id">
<input type="hidden" name="st_user_id" class="st_user_id">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="set_tmp">Template</label>
                <select name="set_tmp"  class="form-control set_tmp">
                    <option value=0>--Select Template--</option>                 
<?php
    if($get_tmp):
        $num = 0;
        foreach($get_tmp as $row):
            $num++;
            ?>
                <option value="<?php echo $row->tmp_id; ?>">
<?php echo"{$num} {$row->tmp_title} "; ?>
                </option>
<?php
        endforeach;
    endif;
?>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="show_public" class="checkbox-inline">
                    <input type="checkbox" name="show_public" id="show_public" class="form-control checkbox-inline show_public"> show as PUBLIC
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="keyword" >Keyword</label>
                <input type="text" name="keyword" id="keyword" class="keyword forom-control">
            </div>

            
        </div>
        <div class="col-lg-6">
           <div class="form-group">
                <label for="keydes" >Description</label>
                <input type="text" name="keydes" id="keydes" class="keydes forom-control">
            </div> 
        </div>
    </div>
    <div class="form-group">
        <label for="st_title">Title</label>
        <input type="text" name="st_title" class="form-control st_title">
    </div>
    <div class="form-group">
        <label for="st_body">Body</label>
        <textarea name="st_body" class="form-control st_body"></textarea>
    </div>
    <div class="form-group">
    <div class="float-right">
        <div class="btn-group">
            <button class="btn btn-primary btnSave" type="submit" form="frmUstd">Save</button>
            <button class="btn btn-danger btnReset" type="reset">Reset & Create New Post</button>
        </div>
    </div>
    </div>
</form>
<p class="pt-4">&nbsp;</p>
