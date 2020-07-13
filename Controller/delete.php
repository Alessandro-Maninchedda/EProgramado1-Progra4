<?php
  include "Model/blog.php";
  $blog = new blog();
  if(isset($_GET['id'])){
    $blog->delete($_GET['id']);
  }
  $rows = $blog->select();
  include 'View/view_all_blogs.php';