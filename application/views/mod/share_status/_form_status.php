<form id="frmStatus" action="<?php echo site_url("ustd/modSave") ?>">


    <div class="form-group">
        <label for="st_title">Title</label>
        <input type="text" name="st_title" class="form-control st_title" id="st_title">
        <input type="hidden" name="st_user_id" class="st_user_id">
        <input type="hidden" name="st_id" class="st_id">
        <input type="hidden" name="uniq_id" class="uniq_id">
    </div>

    <div class="form-group">
        <label for="st_body">what new</label>
        <textarea  name="st_body" class="form-control st_body tinymce" id="st_body"></textarea>
    </div>

</form>
