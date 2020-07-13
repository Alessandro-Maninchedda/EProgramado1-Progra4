<?php
  include "Model/blog.php";
  if($_POST){
    $blog = new blog($_POST['owner'], $_POST['description'], $_POST['blog'], $_POST['id']);
    $blog->update();
    $rows = $blog->select();
    include 'View/view_all_blogs.php';
  }elseif (isset($_GET['id'])) {
    echo "entro";
    $blog = new blog();
    $row = $blog->select($_GET['id'])[0];
    include 'View/update_blog.php';
  }
  