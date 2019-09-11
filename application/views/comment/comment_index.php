<div class="container">

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Comment version 1.3
            </h1>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="list-group-item">
                    <p>
                    Please Note dear&nbsp; 
                        <span class="label label-warning">
                            "<?php echo $this->user_type;?>"
                        </span>&nbsp;
                        : your comment will be appear at the below list after it has approve by admin.
                    </p>
                </div>
            </div>

            <h1>&nbsp;</h1>
            <!--form start--> 
            <form class="form-horizontal" action="<?php echo site_url("comment/saveComment");?>" id="commentForm">
                <!--comment user name-->
                <div class="form-group">
                    <label for="c_user_name">User Name
                    </label>
                    <input type="text" name="c_user_name" class="form-control c_user_name" required id="c_user_name" minlength="4">
                    <input type="hidden" class="c_id" name="c_id">
                    <input type="hidden" class="comment_url" name="comment_url" value="<?php echo current_url();?>"> 
                    
                </div>

                <!--comment user email-->
                <div class="form-group">
                    <label for="c_user_email">User Email</label>
                    <input type="email" id="c_user_email" name="c_user_email" class="form-control c_user_email" required>
                    <p>&nbsp;</p>
                    <p>Your email will not show to public | email ของคุณจะไม่แสดงต่อสาธารณะ</p> 
                    
                </div>


                <!--comment title-->
                <div class="form-group">
                    <label for="c_title">Title</label>
                    <input type="text" id="c_title" name="c_title" class="form-control c_title" required>
                </div>
                            
                <!--comment body-->
                <div class="form-group">
                    <label for="c_body">Comment</label>
                    <textarea id="c_body" name="c_body" class="form-control c_body" required minlength="30" rows=10></textarea>
                </div>
                            
                <br />
                <div class="form-group">
                    <label>&nbsp;</label>
                    <div class="float-right">
                        <button class="btn btn-primary btn-sm btnSave" type="submit" form="commentForm">
                            Comment
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <h1>&nbsp;</h1>
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">All Comment
            &nbsp;<span class="num_comment">0</span> item(s).
            </h2>
        </div>
        <div class="card-body">
            <div class="comment_list"></div>
            <div class="comment_pagination"></div>
        </div>
    </div>


<!--end of content-->
</div>

<?php 
   require("comment_mainJS.php");

