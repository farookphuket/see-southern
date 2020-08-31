<h1 class="text-center" id="formArea">Create New Post</h1>

<form class="frm" action="<?php echo site_url("blog/blogAdminSave"); ?>" id="frmBlog">
<!-- hidden field -->
<input type="hidden" name="bl_id" id="bl_id" class="bl_id">    
<input type="hidden" name="bl_user_id" id="bl_user_id" class="bl_user_id">    

    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="set_cat">Select category and Template</label>
               <select class="form-control set_cat" name="set_cat" id="set_cat">
                    <option value=0>--Select Category--</option>
<?php
    if($get_cat):
        $num = 0;
        foreach($get_cat as $row):
            $num++;
?>
    <option value="<?php echo $row->cat_id; ?>">
<?php
        echo"{$num} | {$row->cat_title}";
?>
    </option>
<?php
        endforeach;
    endif;
?>
                </select>

                
            </div>
            <div class="col-lg-4">
                <label for="set_tmp">Select Template</label>
               <select class="form-control set_tmp" name="set_tmp" id="set_tmp">
                    <option value=0>--select template--</option>
                </select> 
            </div>
            <div class="col-lg-4">
                <label for="show_pub" class="checkbox-inline">
                    <input type="checkbox" name="show_pub" id="show_pub" class="form-control show_pub">
                    <span class="badge badge-warning">
                    check for publish
                    </span>
                </label>
                
                <input type="text" name="show_pub_date" class="form-control show_pub_date" placeholder="set public date">
                <p>or you can select date to make this post publish later.</p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="bl_title">Title</label>
        <input type="text" name="bl_title" id="bl_title" class="form-control bl_title">
    </div>

    

    <div class="form-group">
        <label for="bl_des">Desscription</label>
        <textarea class="form-control bl_des" id="bl_des" name="bl_des"></textarea>
    </div>

    <div class="form-group">
        <label for="bl_body">Post body</label>
        <textarea class="form-control bl_body" id="bl_body" name="bl_body"></textarea>
    </div>

    <div class="float-right">
        <div class="button-group">
            <button id="btnSave" class="btn btn-primary" type="submit" form="frmBlog">Save</button>
            <button type="reset" id="btnReset" class="btn btn-danger btnReset">Reset & create New Post</button>
        </div>
    </div>
<p class="pt-4">&nbsp;</p>
    <div class="line">
        <p class="pt-4">&nbsp;</p>
    </div>

</form>
