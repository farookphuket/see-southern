<form class="frm" id="frmArticle" action="<?php echo site_url("article/adminSave"); ?>">


    <input type="hidden" name="ar_id" id="ar_id" class="ar_id">
    <input type="hidden" name="kw_id" id="kw_id" class="kw_id">
    <input type="hidden" name="ar_user_id" id="ar_user_id" class="ar_user_id">

    <div class="row pt-2 mb-3">
        <div class="col-lg-6 form-group ">
            <label for="set_cat">Select Category</label>
            <select class="form-control set_cat" name="set_cat">
                <option value=0>--Select--</option>
                    <?php 
 if($get_cat):
     //var_dump($get_cat);
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
        <div class="col-lg-6 form-group ">
            <label for="set_tmp">Select Template</label>
            <select class="form-control set_tmp" name="set_tmp">
                <option value=0>--Select--</option>
            </select>
        </div>

        <div class="col-lg-4 pt-2 mb-3">
            <label for="" class="checkbox-inline">
            <input type="checkbox" name="show_pub" id="show_pub" class="form-control show_pub">  Show As Public
            </label>
        </div>
        <div class="col-lg-4 pt-2 mb-3">
            <label for="" class="checkbox-inline">
            <input type="checkbox" name="show_index" id="show_index" class="form-control show_index">  Show Index Page
            </label>
        </div>
        <div class="col-lg-4 pt-2 mb-3">
            <label for="" class="checkbox-inline">
            <input type="checkbox" name="is_approve" id="is_approve" class="form-control is_approve">  Approve
            </label>
        </div>


        <div class="col-lg-6 form-group">
            <label for="keyword">Page keyword</label>
            <input type="text" name="keyword" id="keyword" class="form-control keyword">
        </div>
        <div class="col-lg-6 form-group">
            <label for="keydes">Page Description</label>
            <input type="text" name="keydes" id="keydes" class="form-control keydes">
        </div>



    </div>
    <div class="form-group mb-3">
        <label for="share_url">Share URL</label>
        <input type="text" name="share_url" id="share_url" class="form-control share_url" placeholder="You do not have to type anything here">
    </div>
    <div class="form-group mb-3">
        <label for="ar_title">Title</label>
        <input type="text" name="ar_title" id="ar_title" class="form-control ar_title">
    </div>
    <div class="form-group">
        <label for="ar_des">Article Description</label>
        <textarea class="form-control ar_des" name="ar_des" id="ar_des"></textarea>
    </div>
    <div class="form-group">
        <label for="ar_body">Article Body</label>
        <textarea class="form-control ar_body" name="ar_body" id="ar_body"></textarea>
    </div>
    <div class="form-group pt-5 mb-3">
        <div class="float-right">
            <div class="btn-group">
               <button class="btn btn-primary btnArSave" id="btnArSave" type="submit" form="frmArticle">Save</button> 
               <button class="btn btn-danger btnArReset" id="btnArReset" type="reset">Reset & Create New Post</button> 
            </div>
        </div>
    </div>
</form>
