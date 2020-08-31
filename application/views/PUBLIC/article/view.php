<section id="article" class="page-section">
    <div class="container">
        <div class="row">
<?php
    foreach($get as $row):
?>
<div class="col-lg-12 bg-faded rounded pt-0 mb-4">
    <h1 class="text-center pt-3 mb-4">
    <?php echo $row->ar_title; ?>
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Post by</th>
                <td><?php echo $row->name; ?></td>
            </tr>
        </table>
    </div>
    <p class="line">&nbsp;</p>
<?php
        echo $row->ar_des;
?>
<p>&nbsp;</p>
<?php
    echo $row->ar_body;
?>
</div>

<?php
    endforeach;
?> 
        </div>
    </div>
</section>
