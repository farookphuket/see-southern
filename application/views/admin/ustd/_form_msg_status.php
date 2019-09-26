<form id="usr_status" action="<?php echo site_url("ustd/adminSave"); ?>">
              <div class="form-group">
                <label for="img_url">Image url</label>
              <input type="text" name="img_url" class="form-control img_url" id="img_url" >
              </div>
              <div class="form-group">
                <textarea class="form-control st_body" rows="20" name="st_body"></textarea>
                <input type="hidden" name="st_user_id" class="st_user_id" >
                <input type="hidden" name="st_id" class="st_id" >
                <input type="hidden" name="uniq_id" class="uniq_id">
              </div>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input show_pub" type="checkbox" name="show_pub" id="show_pub" value="2">
                  <label class="form-check-label">Show As Public </label>
                </div>

                <!-- private only -->
                <div class="form-check form-check-inline">
                  <input class="form-check-input private_only" type="checkbox" name="private_only" id="private_only" value="2">
                  <label class="form-check-label"> Private Only </label>
                </div>

              <!-- friend only -->
              <div class="form-check form-check-inline">
                  <input class="form-check-input friend_only" type="checkbox" name="friend_only" id="friend_only" value="2">
                  <label class="form-check-label"> show Friend Only </label>
                </div>



              </div>
            </form>
            <div class="frm_status"></div>
 
