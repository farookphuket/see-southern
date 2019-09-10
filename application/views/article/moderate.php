<div class="page-header">
    <h1>Welcome &nbsp;
        <span class="label label-default">
            <?php echo $user_name;?>
        </span>
    </h1>
</div>
<!--end of page title-->

<!--div class row start-->
<div class="row">
    <div class="col-md-6">
        <div class="cat_title">
            <h1>Category
            &nbsp;<span class="label label-default show_num_cat">
            0
            </span>&nbsp;item(s).
            </h1>
        </div>
        <br style="clear:both"/>
        <div class="show-list show_cat_list">
            <!--dynamic category list -->
        </div>
        <div class="cat_list_pagin">
            <!--dynamic pagination-->
        </div>
    </div>

    <div class="col-md-6 ">
            <div class="c_title">
                <h1 class="label_cat_list">Recent Post by user
                &nbsp;
                <span class="label label-default rc_pub_num">0</span>
                &nbsp;item(s).
                </h1>
            </div>
            <br style="clear:both"/>
            <div class="show-list rc_pub_post">
                <!--dynamic-->
            </div>
            <div class="rc_pub_pagin">
                <!--dynamic-->
            </div>
    </div>
</div>
<!--end of div.row-->

<div class="page-header">
<span class="pull-right">
    <button class="btn btn-default btnAddAr" type="button">
        Create New Post
    </button>
</span>
<h1>My post
    &nbsp;<span class="label label-default mod_num_post">0</span>&nbsp; item(s).
</h1>
</div>
<br style="clear:both" />
<div class="show-list div_mod_post">
    <ul class="mod_post_list">
        <!--dynamic content list of post-->
    </ul>
    <div class="mod_post_pagin">
        <!--dynamic pagination-->
    </div>
</div>



<br style="clear:both" />

<!--modal edit category start-->
<div class="modal fade mdCategoryForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">
                &times;
                </button>
                <h1 class="modal-title mdCatTitle">
                    Edit category
                </h1>

            </div>
            <div class="modal-body">
            
            <!--form edit category start-->
            <form class="form-horizontal" id="frmEditCat" action="<?php echo site_url("article/modSaveCategory");?>">

                <div class="form-group">
                    <label class="label-control col-sm-4">Title</label>
                    <div class="col-sm-6">
                        <input type="text" name="cat_title" class="form-control cat_title">
                        <input type="hidden" name="edit_cat_id" class="edit_cat_id"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-control col-sm-4">Section</label>
                    <div class="col-sm-6">
                        <input type="text" name="cat_section" class="form-control cat_section">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-control col-sm-4">Description</label>
                    <div class="col-sm-6">
                        <textarea class="form-control cat_des" name="cat_des"></textarea>
                        
                    </div>
                </div>

               

            </form>
            <!--form edit category End-->

            </div>
            <div class="modal-footer">
                <div class="modal_status">
                <!--dynamic content-->
                </div>
                <button type="submit" form="frmEditCat" class="btn btn-primary btnSaveCat">
                    Save 
                </button>
                &nbsp;<button type="button" class="btn btn-danger btnCloseEditCat" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--modal edit category End-->


<!--modal post form start-->
    <div class="modal fade mdArForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title mdArTitle">Title</h1>
                </div>
                <div class="modal-body">
                    <!--form start-->
                    <form class="form-horizontal" id="frmAr" action="<?php echo site_url("article/modSaveAr");?>">

                        <div class="form-group">
                            <label class="label-control col-sm-4">Category</label>
                            <div class="col-sm-6">
                                <select name="cat_id" class="form-control cat_id" required>
                                    <option value="">--Please Select--</option>
                                    <?php 
                                        foreach($get_cat as $row):

                                            ?>
                                            <option value="<?php echo $row->cat_id;?>">
                                            <?php echo $row->cat_title; ?>
                                            </option>
                                            <?php
                                        endforeach;
                                    ?>
                                </select>

                                <input type="hidden" class="ar_id" name="ar_id" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-sm-4">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="ar_title" class="form-control ar_title" required minlength="2" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-sm-4">Summary</label>
                            <div class="col-sm-6">
                                <textarea name="ar_summary" class="form-control ar_summary" required minlength="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-sm-2">&nbsp;</label>
                            <div class="col-sm-6">
                                &nbsp;
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="ar_body" class="form-control tinymce ar_body"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control col-sm-4">Post Status</label>
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="ar_pub" class="ar_pub">
                                </span>
                                <span class="input-group-addon txt_ar_pub">Private Post | ตั้งเป็นส่วนตัว
                                </span>&nbsp;
                                <span class="input-group-addon">
                                    <input type="checkbox" name="ar_approve" class="ar_approve">
                                </span>
                                <span class="input-group-addon txt_ar_approve">Not Approve | ยังไม่ได้รับอนุญาต
                                </span>
                                &nbsp;
                                <span class="input-group-addon">
                                    <input type="checkbox" name="ar_index" class="ar_index">
                                </span>
                                <span class="input-group-addon txt_ar_index">Not Show on index page | ไม่แสดงในหน้าหลัก
                                </span>
                            </div>
                        </div>

                        

                    </form>
                    <!--form end-->
                    <br style="clear:both" />
                    <!--result from the form--> 
                    <div class="frm_result">
                        <!--dynamic content-->
                        <div class="well">
                            <h2>Please click the below button to create or save your post.</h2>
                        </div>
                    </div>

                    <!--end of the result-->
                </div>
                <div class="modal-footer">
                    <div class="modal_status"></div>
                    <button class="btn btn-primary btnSaveAr" type="submit" form="frmAr">Create New Post</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
<!--modal post form End-->

<!--modal confirm delete start-->
<div class="modal fade mdDelConf">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h1 class="mdConfTitle">Confirm Delete </h1>
            </div>
            <div class="modal-body">
                    <div class="show-list conf_result">
                    <!--dynamic-->
                    </div>
            </div>
            <div class="modal-footer">
                    <button class="btn btn-danger btnConfClose" data-dismiss="modal">
                        Close
                    </button>
            </div>
        </div>
    </div>
</div>
<!--modal confirm delete End-->

<?php

//---include javascript
require("moderateJS.php"); 