<?php 



foreach($get_ar as $row):

    ?>
<div class="jumbotron">
    <h2><?php echo $row->ar_title;?></h2>
</div>
<div class="row">
    <div class="col-sm-4">
    <h3>Post by 
        &nbsp;<span class="label label-info">
            <?php echo $row->ar_post_by;?>
        </span>
    </h3>
    </div>
    <div class="col-sm-4">
    <h4>Create Date 
        <span class="label label-info">
            <?php echo $row->date_add;?>
        </span>
    </h4>
    <h4>last Update
        <span class="label label-warning">
            <?php echo $row->date_edit;?>
        </span>
    </h4>
    </div>
</div>
<div class="container">
    
    
    <?php echo $row->ar_body;?>

    <?php $this->load->view("comment_index.php");?>
</div>


    <?php

endforeach;
