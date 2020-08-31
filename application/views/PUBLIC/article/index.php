<section id="article" class="page-section">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 pt-0 mb-4">
                
<?php

    //var_dump($get_all);
    if($get_all):
        $num = 0;
        foreach($get_ar as $row):
            $num++;

            ?>
    <div class="page-content bg-faded rounded pt-2 mb-2">
        <h2 class="text-center">
<?php
        echo"{$num} |  {$row->ar_title}";
?>
        </h2>
<?php
        echo $row->ar_des;
        
        $read_url = site_url("article/view/{$row->ar_uniq_id}");
?> 
        <div class="float-right">
        <a id="btnView" class="btn btn-primary lnView" style="color:white;" href="<?php echo $read_url; ?>" target="_blank">
                Read More
            </a>
        </div>
    </div>

<?php
        endforeach;
    endif;
?>
            </div>
            <div class="col-lg-12 pt-3 mb-4">
                
            </div>
        </div>
    </div>
    
</section>
