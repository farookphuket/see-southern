<form class="frm" action="<?php echo site_url("users/userSaveUserInfo"); ?>" id="frmProfile">
    <input type="hidden" name="user_id" id="user_id" class="user_id">

        <div class="form-group">
        <label for="conf_pass">
            Confirm password
            <span class="badge badge-warning">
                please type your current password to confirm.
            </span>
        </label>
        <input type="password" name="conf_pass" class"form-control conf_pass" placeholder="confirm your password" id="conf_pass">
        <p class="">we need you to confirm your current password in order to make change to your profile</p>
    </div>


    <div class="form-group">
        <label for="user_name">Name</label>
        <input type="text" name="user_name" class="form-control user_name">
    </div>
    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" name="user_email" class="form-control user_email">
    </div>
    <div class="form-group">
        <label for="user_tel">Tel</label>
        <input type="number" name="user_tel" class="form-control user_tel">
    </div>
    <div class="form-group">
        <label for="about_user">about me</label>
        <textarea name="about_user" class="form-control about_user"></textarea>
        <p class="pt-4">&nbsp;</p>
    </div>

    <div class="form-group">
        <p>if you "DO NOT " want to change your password so just leave this field blank
            <span class="badge badge-warning">
ถ้าไม่เปลี่ยนรหัสผ่าน เว้นช่องนี้ไว้
            </span>
        </p>

        <label for="new_pass">new password</label>
        <input type="password" name="new_pass" class"form-control new_pass">
        <p class="pt-4">&nbsp;</p>
    </div>



    
    
</form>

