<div class="bg-faded mb-5 rounded">
    <h1 class="text-center mb-3 pt-3">Blog Post</h1>
<form id="frmBlog" action="<?php echo site_url("blog/blogMemberSave"); ?>" class="frm">

    <input type="hidden" name="bl_id" id="bl_id" class="bl_id">
    <input type="hidden" name="kw_id" id="kw_id" class="kw_id">
    <input type="hidden" name="bl_user_id" id="bl_user_id" class="bl_user_id">

    <div class="row pt-3 mb-4">
        <div class="col-lg-4">
            <label for="set_cat" class="p-2">Select Category</label>
            <select class="form-control set_cat" name="set_cat" id="set_cat">
                <option value=0>--Select--</option>
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
        <div class="col-lg-4">
            <label for="set_tmp" class="p-2">Select Template</label>
            <select class="form-control set_tmp" name="set_tmp" id="set_tmp">
                <option value=0>--Select--</option>
            </select>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <label for="show_pub" class="p-2"> Show As Public
                
                    </label>
                    
                        <input type="checkbox" name="show_pub" class="form-control show_pub" id="show_pub">
                    
                </div>
                <div class="col-lg-6">
                                        
                    <label for="show_pub_date" class="p-2 mb-2">Date of publish</label>
                    
                    <input type="text" name="show_pub_date" id="show_pub_date" class="form-control show_pub_date">
                </div>
            </div>
            

        </div>
    </div>
    
    

    <div class="row">
        <div class="col-lg-6">
            <label for="keyword" class="p-2">Keyword</label>
            <input type="text" name="keyword" id="keyword" class="keyword form-control">
            
        </div>
        <div class="col-lg-6">
            <label for="keydes" class="p-2">Description</label>
            <input type="text" name="keydes" id="keydes" class="keydes form-control" placeholder="80 character max!" maxlength="80">
            
        </div>
    </div>

    <div class="form-group">
        <label for="bl_title" class="p-2">Title</label>
        <input type="text" name="bl_title" id="bl_title" class="bl_title form-control">
    </div>
    <div class="form-group pt-2 mb-4">
        <label for="bl_des" class="p-2">Description</label>
        <textarea class="form-control bl_des" id="bl_des" name="bl_des"></textarea>
    </div>

    <div class="form-group pt-2 mb-4">
        <label for="bl_body" class="label-control p-1">Post Body</label>
        <textarea class="form-control bl_body" id="bl_body" name="bl_body"></textarea>
    </div>

    <div class="form-group pt-2 mb-4">
        <div class="float-right">
            <div class="btn-group">
               <button class="btn btn-primary btnBlogSave" id="btnBlogSave" type="submit">Save</button> 
               <button class="btn btn-danger btnBlogReset" id="btnBlogReset" type="reset">Reset & Create New Post</button> 
            </div>
        </div>

    </div>

</form>
</div>
