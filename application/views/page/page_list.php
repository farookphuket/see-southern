<section id="page_list">
    <div class="container tm-container-2">
    
        <div class="row tm-section-mb">
            <div class="col-lg-12">
                
            
<?php 
    foreach($get as $row):
?>
            <div class="card">
                <div class="card-header">
                       <h1 class="text-center">
<?php echo $row->page_title; ?> 
</h1>
                </div>
                <div class="card-body">
<?php echo $row->page_body; ?>
                    <p>&nbsp;</p>
                    <div class="float-right">
                        <p class="badge badge-warning">
                        Create date :<?php echo $row->date_create; ?>
                        </p>                       
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
<?php
    endforeach;
?>
            </div>
        </div>
    </div> 
</section>
