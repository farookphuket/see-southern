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
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="pub" name="pub" id="pub" type="checkbox">
            <label class="form-check-label">Show Public</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="friend_only" name="friend_only" id="friend_only" type="checkbox">
            <label class="form-check-label">Friend Only</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="private_only" name="private_only" id="private_only" type="checkbox">
            <label class="form-check-label">Private Only</label>
        </div>

    </div>

</form>
