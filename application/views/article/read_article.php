<?php 
    foreach($get_ar as $row):
?>
<div class="container-fluid">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center">
                <?php echo $row->ar_title;?>
              </h2>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>Post By</th>
                    <td>
                    <strong>Name :</strong>
                    <?php echo $row->ar_post_by;?>&nbsp;
                    <strong>IP : </strong>
                    <?php echo $row->ar_post_ip;?>
                    </td>
                  </tr>
                  <tr>
                    <th>Date</th>
                    <td>
                    <strong>Create :</strong>
                    <?php echo $row->date_add;?>&nbsp;
                    <strong>Update :</strong>
                    <?php echo $row->date_edit;?>
                    </td>
                  </tr>
                </table>
              </div>
              <p>
              <?php 
                echo $row->ar_summary;
              ?>
              </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>
                <?php 
                  echo $row->ar_body;
                ?>
              </p>
              <div class="float-right">
                <button class="btn btn-danger lnClose">Close</button>
              </div>
            </div>
          </div>
        </div>
        <p>&nbsp;</p>
        <div class="col-lg-12">
          <?php 
            $comment = "comment/comment_index.php";
            $this->load->view($comment);
          ?>
        </div>
      </div>

</div>

<?php endforeach;?>
<script>
  $(function(){
    $(".lnClose").on("click",function(){
      window.close();
    });
  });

</script>