<form class="form-horizontal" id="frmComment" action="<?php echo site_url("comment/adminSaveComment");?>">

<div class="form-group">
    <label for="c_title">Title</label>
    <input type="text" id="c_title" class="c_title form-control" name="c_title" />
    <input type="hidden" name="c_id" class="c_id" />
</div>

<div class="form-group">
    <label for="c_body">Comment</label>
    <textarea class="tinymce c_body" name="c_body"></textarea>
</div>

<p>&nbsp;</p>
<div class="form-group">
    <label for="c_approve">Approve Status</label>&nbsp;
    <input type="checkbox" id="c_approve" class="c_approve" name="c_approve">&nbsp;<span class="txt_approve">Approve Status</span>
    &nbsp;|&nbsp;
    <label for="c_show">Show Comment Status </label>&nbsp;
    <input type="checkbox" id="c_show" class="c_show" name="c_show"/>&nbsp;
    <span class="txt_show">Comment Show</span>
</div>




</form>