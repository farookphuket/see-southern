<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    $tag_head = "component/_tag_in_head.php";
    $this->load->view($tag_head);
  ?>
</head>
<body>
  <div class="status"></div>
  
    
  <?php 
    $this->load->view($subview);
  ?>


  <?php 
      $tail = "component/_tag_in_tail.php";
      $this->load->view($tail);
  ?>
</body>
</html>