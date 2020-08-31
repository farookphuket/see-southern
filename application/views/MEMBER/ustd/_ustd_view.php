

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-0 mb-4 bg-faded rounded">

<?php
    foreach($get_ustd as $row):
?>
        <?php echo $row->st_body; ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Post Title</th>
                    <td><?php echo $row->st_title; ?></td>
                </tr>
                <tr>
                    <th>Post By</th>
                    <td><?php echo $row->name; ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php 
                        $show_date = "Create {$row->st_date_create} | update {$row->st_date_update}"; 
                        echo $show_date; 

                    ?></td>
                </tr>
                
            </table>
        </div>
<?php
    endforeach;
?> 
            </div>
            
        </div>
    </div>
</section>
<?php
    $comment = "MEMBER/comment/_list_comment";
    $this->load->view($comment);
?>
