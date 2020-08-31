<section id="article" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
<?php
    echo $sysName;
?>
                </h1>
            </div>
            <div class="line">
                
            </div>
            <div class="col-lg-12">
<?php
    foreach($get as $row):
?>
    <h1><?php echo $row->ar_title; ?></h1>

<div class="page-content">
<?php echo $row->ar_des; ?> 
    <p class="line"></p>
<?php
        echo $row->ar_body;
?>
</div>



<?php
    endforeach; 
?> 
            </div>
        </div>
        
    </div>
</section>
