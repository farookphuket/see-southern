<section class="page-section" id="blog_view">
    <div class="container bg-faded rounded p-3">
        <div class="row">
<?php
        if($blog):
            foreach($blog as $row):
?>
            <div class="col-lg-12 pt-0 mb-3 bg-faded rounded">
                <h1 class="text-center">
<?php echo $row->bl_title; ?>
                </h1>
            </div>
            <div class="col-lg-12 bg-faded rounded pt-0 mb-4">
<?php
                echo $row->bl_des;
?> 
            </div>
            <div class="col-lg-12 pt-2 mb-4">
<?php
        echo $row->bl_body;
?> 
            </div>
<?php
                endforeach;
        endif;
?>

        </div>
    </div>

</section>
