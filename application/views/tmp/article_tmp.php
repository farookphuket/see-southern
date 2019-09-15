<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $tag_head = "component/_tag_in_head.php";
        $this->load->view($tag_head);
    ?>
</head>
<body id="page-top">
    <div class="status"></div>
    <div class="container">
      <h1 class="text-center">This Template file name "tmp/article_tmp"</h1> 
      <p>
          The user name is <?php echo $user_name; ?>
      </p>
      <p> The user ID is <?php echo $user_id; ?>


    </div>
    <?php $this->load->view($subview); ?>
    <?php 
        $tag_tail = "component/_tag_in_tail.php";
        $this->load->view($tag_tail);
    ?>
</body>
</html>
