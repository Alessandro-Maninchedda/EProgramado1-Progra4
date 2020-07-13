<?php 
if($_POST){
  include 'Model/blog.php';
  $blog = new blog($_POST['owner'],$_POST['description'],$_POST['blog']);
  $blog->create();
  $rows = $blog->select();
  include "View/view_all_blogs.php";
}else{
  include "View/create_blog.php";
}
 