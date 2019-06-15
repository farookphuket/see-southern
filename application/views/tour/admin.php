<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading ">Manage Tour Program</h2>
            <hr class="my-4">
        </div>
        <div class="col-lg-12">
            <a href="<?php echo site_url("tour");?>" class="btn btn-primary">Go to page</a>

            <button class="btn btn-primary lnAddTour float-right">Add new Tour</button>
        </div>
    </div>
    
    <div class="row">
        
        
        <div class="col-lg-12">
            <div class="float-right">
                    
                    <br style="clear:both"/>
            </div>
            <br style="clear:both"/>

            <div class="tour_list">
                <!--dynamic content list-->
            </div>
            <div class="tour_pagin">
                <!--dynamic content pagination-->
            </div>

        </div>

    </div>

</div>

<div class="modal fade mdTourForm">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title frmHead">Add new Tour</h1>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>

                <div class="modal-body">
                
                    <?php 
                        $frm = "tour/_frm_admin_tour_form.php";
                        $this->load->view($frm);
                    ?>
                </div>

                <div class="modal-footer">
                    <div class="input-group">
                        <select class="custom-select mark_draft" id="mark_draft" name="mark_draft">
                            <option selected>Choose...</option>
                            <option value=0>Public</option>
                            <option value=1>Save as draft</option>
                            
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-outline-secondary btnSave" type="submit" form="frmTour">Save</button>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>


<?php 
    $tJS = "tour/adminJS.php";
    $this->load->view($tJS);