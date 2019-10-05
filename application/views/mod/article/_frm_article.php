<form id="frmArticle" action="<?php echo site_url("article/modSave"); ?>">

    <div class="col-lg-12">
        <h1 class="text-center">For SEO</h1>
    </div>
     <div class="form-group">
        <label for="og_url">URL</label>
        <input type="text" name="og_url" class="form-control og_url" id="og_url">
    </div>

    <div class="form-group">
        <label for="keyword">Keyword</label>
        <input type="text" name="keyword" class="form-control keyword" id="keyword">
    </div>
    <div class="form-group">
        <label for="keydes">Description</label>
        <input type="text" name="keydes" class="form-control keydes" id="keydes">
        <p>&nbsp;</p>
    </div>


    <div class="form-group">
    <select name="get_tmp" class="form-control get_tmp">
    <option value=0>--Select template--</option>
<?php 
        
    $title = "";
    $id = 0;
    foreach($get_tmp as $row):
        $title = $row->tmp_name;
        $id = $row->tmp_id;
?>
    <option value="<?php echo $id ?>">
        <?php echo $title; ?>

    </option>
<?php 
    endforeach; 
?>
    </select>
    </div>

    <div class="col-lg-12">
        <h1 class="text-center">Post body</h1>
    <p>&nbsp;</p>
    </div>
    <div class="form-group">
        <label for="ar_title">Title</label>
        <input type="text" name="ar_title" class="form-control ar_title" id="ar_title">
        <input type="hidden" name="ar_id" id="ar_id" class="ar_id">
        <input type="hidden" name="ar_user_id" id="ar_user_id" class="ar_user_id">
        <input type="hidden" name="kw_id" id="kw_id" class="kw_id">
        <input type="hidden" name="uniq_id" id="uniq_id" class="uniq_id">
    </div>
    
    
    <div class="form-group">
        <label for="ar_sum">Summary</label>
        <textarea name="ar_sum" id="ar_sm" class="form-control ar_sum" rows="8"></textarea>
        <p>&nbsp;</p>
    </div>

    <div class="form-group">
        <label for="ar_sum">Body</label>
        <textarea name="ar_body" id="ar_body" class="form-control ar_body tinymce" rows="8"></textarea>
        <p>&nbsp;</p>
    </div>

    <div class="form-group">
        <label class="checkbox-inline">
            <input type="checkbox" class="pub" name="pub"> show public
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" class="approve" name="approve"> Approve
        </label>
         <label class="checkbox-inline">
            <input type="checkbox" class="show_index" name="show_index"> show index
        </label>


        
        
    </div>
    

</form>
