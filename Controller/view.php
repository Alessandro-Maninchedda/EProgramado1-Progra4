<?php
  include "Model/blog.php";
  $blog = new blog();
  if(isset($_GET['id'])){
    $row = $blog->select($_GET['id'])[0];
    include "View/view_blog.php";
  }else{
    $rows = $blog->select();
    include "View/view_all_blogs.php";
  }
    