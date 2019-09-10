<section id="comment">
    <div class="row">
        <div class="col-lg-12">
            <p>&nbsp;</p>
            <h1 class="text-center">All comment
            
            <span class="badge badge-success num_right">0</span> item(s).
            </h1>
            <hr />
        </div>
        <p>&nbsp;</p>
        <div class="col-lg-12">
            <div class="container">
                <div class="c_list"></div>
                <div class="c_pagin"></div>
            </div>
        </div>
    </div>


    <div class="modal fade mdC">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title mdTitle">Admin 1.30</h1>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php 
                        $f = "comment/_frm_admin.php";
                        $this->load->view($f);
                    ?>
                    <div class="modal_status"></div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary btnSaveComment" form="frmComment">Save</button>
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $js = "comment/c_AdminJS.php";
    $this->load->view($js);
?>