<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-0">

                <div class="table-responsive">
                    <table class="table table-bordered">
<?php

    if($pagination):
        ?>
        <tr>
            <td colspan=5>
<?php 
echo $pagination; ?>
            </td>
        </tr>
<?php
        endif;
?>
                        <tr>
                            <th>No. from 
<?php

    $num_all = count($get_all);       
?>
                            </th>
                            <th>agent info
<?php echo $num_all; ?> item(s).
                            </th>
                            <th>month</th>
                            <th>year</th>
                            <th>date</th>
                        </tr>
<?php
    if($get_visitor):
        $num = 0;

        
        foreach($get_visitor as $row):

            $num++;
            ?>
        <tr>
            <td>
<?php
        echo $num;
?>
            </td>
            <td>
<?php
        $show = "<ul class='list-group'>
                <li class='list-group-item active'>
                   IP :  {$row->v_ip}
                </li>
                <li class='list-group-item'>
                   Browser :  {$row->v_browser}
                </li>
                <li class='list-group-item'>
                   OS :  {$row->v_os}
                </li>
            </ul>";
        echo $show;
?>
            </td>
            <td>
<?php
        echo $row->v_month;
?> 
            </td>
            <td>
<?php
        echo $row->v_year;
?> 
            </td>
            <td>
<?php
        echo $row->v_last_visit_time;
?>
            </td>
        </tr>    
<?php
        endforeach;

        if($pagination):
        ?>
        <tr>
            <td colspan=4>
<?php echo $pagination; ?>
            </td>
        </tr>
<?php
        endif;
    endif;
?>

                    </table>
                </div>
                
            </div>
        </div>
    </div>
</section>


