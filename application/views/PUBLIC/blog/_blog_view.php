<section class="page-section" id="blog_view">
    <div class="container bg-faded rounded p-3">
        <div class="row">
<?php

        $bl_id = 0;
        if($blog):
            foreach($blog as $row):
                $bl_id = $row->bl_uniq_id;
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
            <div class="col-lg-12 pt-2 mb-4 bg-faded rounded">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Post By</th>
                            <td>
                    <?php echo $row->name; ?>
                                  
                            </td>
                        </tr>
                        <tr>
                            <th>Publish</th>
                            <td>
<?php 
        $day_create = $row->bl_date_create;
        $day_update = $row->bl_date_update;
        echo"Create {$day_create} | updated {$day_update}";
?>
                            </td>
                        </tr>
                        <tr>
                            <th>Read</th>
                            <td>
 <i class="fa fa-eye" style="font-size:24px;"></i> 
<span class="badge badge-success num_read">
<?php echo $row->bl_view_count; ?> 
</span>&nbsp; 
time(s).
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
<?php
                endforeach;
        endif;
?>

        </div>
    </div>

</section>
<script charset="utf-8">
        $(function(){

            const $INFO = (function(){

                let $num_read = getEl(".num_read");


                let $bl_id = "<?php echo $bl_id; ?>";



                function getReadInfo(){
                    $num_read.html("");    
                    let url = "<?php echo site_url("blog/blogGetReadInfo/"); ?>"+$bl_id;
                    $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        $.each(rs.get,(i,v)=>{
                            let tmp = `${v.bl_view_count}`;
                            $num_read.html(tmp);
                        });
                    }
                    });

                }

                function getEl(el){
                    return $(el);
                }
                function getEvent(){
                   getReadInfo(); 
                }
                return{getEvent:getEvent}
            })();
            $INFO.getEvent();
        });
</script>
