
<div class="container">
    <div class="row">
        <?php
            if(!$num_tour):
        ?>
        <div class="alert alert-danger">
            <h2>There is no tour program yet!</h2>
        </div>
        <?php 
            endif;
            $num = 0;
            foreach($get_tour as $row):
                $num++;
                
                $full_price = $row->full_price;
                $half_price = $full_price/2;
                $min_price = $half_price/2;
        ?>
        
        <div class="card">
            <div class="card-heading">
                <h1 class="bg-primary">
                <?php echo $row->t_name;?>&nbsp;
                    <a href="<?php echo site_url("tour/detail/{$row->t_id}");?>" class="btn btn-default btn-sm" target="_blank">
                        <span class="glyphicon glyphicon-new-window"></span> Read More?
                    </a>
                </h1>
            </div>
            <div class="card-body">
                <?php echo $row->t_summary;?>
            </div>
            <div class="card-footer">
                <h4>
                    Price Per Person <span class="label label-default"><?php echo $full_price;?></span>
                </h4>
                <h4>
                    Deposite Per Person <span class="label label-default"><?php echo $min_price;?></span>
                </h4>
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php
            endforeach;
        ?>
    </div>
</div>