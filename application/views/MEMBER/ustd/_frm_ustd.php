<div class="frm"> 
        <form class="frm" action="<?php echo site_url("ustd/ustdUserSave"); ?>" id="frmUstd">
                    <input type="hidden" name="st_id" id="st_id" class="st_id">
                    <input type="hidden" name="st_user_id" id="st_user_id" class="st_user_id">
                    <div class="row">

                    

                    <div class="col-lg-6">
                    <label for="set_tmp">Select Template</label>
                    <select class="form-control set_tmp">
                        <option value=0>--Select --</option>


                    </select> 
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="show_pub" class="checkbox-inline">
                            <input type="checkbox" name="show_pub" class="form-control show_pub"> Show as public
                            </label>
                        </div>
                    </div>
                    <div class="line">
                        <p class="pt-4">&nbsp;</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="st_title">Title</label>
                            <input type="text" name="st_title" id="st_title" class="st_title form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="st_body"></label>
                            <textarea name="st_body" id="st_body" class="form-control st_body"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-5">
                        <div class="float-right">
                            <div class="btn-group">
                                <button class="btn btn-primary btnSave" type="submit" form="frmUstd" id="ustdBtnSave">Post</button>
                                <button class="btn btn-warning btnReset" id="ustdBtnReset" type="button">Reset Form & Create new post</button>
                            </div>
                        </div>
                    </div>
                  
              </form>          

</div>
