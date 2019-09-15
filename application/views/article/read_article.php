
<?php 


      $ar_post_by = "";
      $ar_post_date = "";
      $ar_body = "";
      $ar_sum = "";
      $ar_title = "";
      foreach($get_ar as $row):
      
        $ar_post_by = $row->name;
        $ar_title = $row->ar_title;
        $ar_sum = $row->ar_summary;
        $ar_body = $row->ar_body;
      endforeach;
?>



<p>&nbsp;</p>

<section id="read">
  <div class="container">
    <p>
    <?php //var_dump($get_ar); ?>
    </p>
    <p>&nbsp;</p>
    <div class="card">
      <div class="card-header">
        <h1><?php echo $ar_title; ?></h1>
      </div>
      <div class="card-body"> 
      <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th>Post By</th>
              <td><?php echo $ar_post_by; ?></td>
            </tr>
          </table>
      </div>
      <p>
        <?php echo $ar_sum; ?>
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <?php echo $ar_body; ?>
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    </div>

  </div>





</section>

<script>
  $(function(){
    $(".lnClose").on("click",function(){
      window.close();
    });
  });

</script>
