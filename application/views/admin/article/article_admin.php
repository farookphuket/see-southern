<div class="jumbotron">
    <h1>Admin Page</h1>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="page-header">
            <div class="pull-right">
                <a href="#" class="btn btn-primary btnAddCat">
                    <span class="glyphicon glyphicon-plus"></span>
                        Create New Category
                </a>
            </div>
            <h1>category</h1>
        </div>
        <?php 
            if($num_cat == 0):
                ?>
                <div class="alert alert-danger">
                    <h2>There is no category yet!</h2>
                </div>
                <?php
            endif;
            $num=0;
            foreach($get_all_cat as $row):
                $num++;

                ?>
                <div class="show-list">
                    <ul>
                        <li>
                            <div class="content-wrap">
                                <h2>
                                    <?php 
                                    
                                    echo $row->cat_title;
                                    
                                    
                                    ?>
                                    &nbsp;
                                    
                                    &nbsp;
                                    <span class="label label-default">
                                        <?php echo $row->has_content;?>
                                    </span>    
                                </h2>
                                <p>
                                    <button type="button" class="btn btn-default btn-sm lnCat_edit" data-cat_id="<?php echo $row->cat_id;?>">
                                            <span class="glyphicon glyphicon-pencil"></span> Edit
                                    </button>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm lnCat_del" data-cat_id="<?php echo $row->cat_id;?>">
                                                <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                </p>
                            </div>
                            <br style="clear:both" />
                        </li>
                    </ul>
                </div>
                <?php
            endforeach;
            if($num_cat >= $per_page):
                ?>
                <div class="pagination">
                    <?php echo $this->pagination->create_links();?>
                </div>
                <?php
            endif;
        ?>

    </div>
    <!--end of cat list--> 

    <!--not approve list--> 
        <div class="col-md-12">
            <div class="page-header">
                <h1>Not Approve 
                &nbsp;<span class="label label-warning num_approve">0</span>&nbsp;item(s).
                </h1>
            </div>
            <div class="show-list div_ar_approve">
                <!--dynamic-->
            </div>
            <div class="div_approve_pagin">
                <!--dynamic-->
            </div>
        </div>
    <!--end of not approve list-->
</div>

<div class="row">
    <div class="col-md-12">
            <div class="page-header">
                <h1>Recent post by user&nbsp;
                    <span class="label label-info user_rc_num">
                        0
                    </span>&nbsp;item(s).
                </h1>
            </div>
            <div class="show-list user_rc_post">
            
            </div>
            <div class="user_rc_pagin">
            
            </div>
    </div>
    <div class="col-md-6">
            <div class="page-header">
                <div class="pull-right">
                    <a href="#" class="btn btn-primary btnAddAr">
                        <span class="glyphicon glyphicon-plus"></span>
                            Create New Post
                    </a>
                </div>
                <h1>Recent post by "<?php echo $user_name;?>"
                &nbsp;
                <span class="label label-info adm_rc_num">0</span>&nbsp; item(s).
                </h1>
            </div>
            <div class="show-list adm_rc_post">
            
            </div>
            <div class="adm_rc_pagin">
                <!--dynamic pagination-->
            </div>
    </div>
</div>






<!--modal form category-->
<div class="modal fade mdCat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;
                </button>
                <h1 class="modal-title mdCatTitle">
                    Create new cat
                </h1>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url("article/admin");?>" class="form-horizontal frmCat" id="frmCat">
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Title</label>
                        <div class="col-sm-6">
                        <input type="text" name="cat_title" class="form-control cat_title" required>
                        <input type="hidden" name="cat_id" class="cat_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Section</label>
                        <div class="col-sm-6">
                        <input type="text" name="cat_section" class="form-control cat_section" >
                        </div>
                    </div>

                    <!--description-->
                    <div class="form-group">
                        <label class="label-control col-sm-4">description</label>
                        <div class="col-sm-6">
                            <textarea class="form-control cat_des" name="cat_des"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="label-control col-sm-4">Category Status</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="cat_public" class="cat_public">
                            </span>
                            <span class="input-group-addon txt_cat_pub">
                                Do not show this category.
                            </span>
                            <span class="input-group-addon">
                                <input type="checkbox" name="allow_change" class="allow_change">
                            </span>
                            <span class="input-group-addon txt_allow_change">
                                Not Allow User to Change.
                            </span>
                            <span class="input-group-addon">
                                <input type="checkbox" name="allow_show" class="allow_show">
                            </span>
                            <span class="input-group-addon txt_allow_show">
                                Not Allow to show by Admin.
                            </span>
                            
                        </div>
                    </div>
                </form>
                <div class="modal_status label-info pull-right"></div>
            </div>
            <div class="modal-footer">
                
                <button class="btn btn-primary btnSaveCat" type="submit" form="frmCat">
                    Save
                </button>&nbsp;
                <button class="btn btn-danger btnCloseCat" type="button" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- end of modal cat form -->

<!--modal post form start-->
<div class="modal fade arForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title mdArTitle">Title</h1>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="frmAr"  method="post" action="<?php echo site_url("article/adminSaveAr");?>">
                    
                    <div class="form-group">
                        <label for="" class="col-sm-4 label-control">Category</label>
                        <div class="col-sm-6">
                        <input type="hidden" name="ar_id" class="ar_id">
                        
                                <select name="cat_id" id="" class="form-control cat_id" required>
                                    <option value="">--Select--</option>
                                    <?php 
                                            if($num_cat == 0):
                                                    ?> 
                                            <option value="">There is no Category</option>
                                                    <?php
                                            else:
                                                $num = 0;
                                                foreach($get_cat as $row):

                                                    $num++;
                                                ?> 
                                            <option value="<?php echo $row->cat_id;?>">
                                            <?php echo"{$num}-{$row->cat_title}"; ?> 
                                            </option> 
                                                <?php
                                                endforeach;
                                            endif;
                                    ?>
                                </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Title</label>
                        <div class="col-sm-6">
                            <textarea name="ar_title" id="" class="form-control ar_title" minlength="10" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Summary</label>
                        <div class="col-sm-6">
                            <textarea name="ar_summary" id="" class="form-control ar_summary" minlength="10"  required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="ar_body"  class="form-control tinymce ar_body"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="label-control col-sm-4">Aprove | Public | Index Status</label>
                        <div class="col-sm-6 input-group">
                                <span class="input-group-addon">
                                        <input type="checkbox" name="ar_approve" class="ar_approve">
                                        
                                </span>
                                <span class="input-group-addon approve_txt">
                                            NOT approve
                                </span>

                                <span class="input-group-addon">
                                        <input type="checkbox" name="ar_public" class="ar_public">
                                        
                                </span>
                                <span class="input-group-addon pub_txt">
                                            NOT Public
                                </span>

                                <span class="input-group-addon">
                                        <input type="checkbox" name="ar_index" class="ar_index">
                                        
                                </span>
                                <span class="input-group-addon index_txt">
                                            NOT index
                                </span>
                                
                        </div>
                    </div>
                </form>
                <div class="modal-ar-result">
                <!--dynamic-->
                </div>
            </div>
            <div class="modal-footer">
                <span class="modal_status"><!--dynamic cotent--></span>
                <button type="submit" class="btn btn-primary btnArSave" form="frmAr">
                    Save
                </button>&nbsp;
                <button type="button" class="btn btn-danger btnArClose" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>

</div>
<!--modal post form End-->

<!--modal del conf Start-->
<div class="modal fade mdDelConf">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header confTitle">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title mdConfTitle">Confirm to DELETE?</h1>
            </div>
            <div class="modal-body">
                    <div class="conf_result">
                    </div>
            </div>
            <div class="modal-footer">
                    <div class="modal_status"></div>
                    &nbsp;
                    <button class="btn btn-danger btnConfClose" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--modal del conf Start-->

<?php
    require("article_adminJS.php");
