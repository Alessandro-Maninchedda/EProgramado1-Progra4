<?php
   include "Model/blog.php";
   $blog = new blog();
   $rows = $blog->last5();
   include "View/view_last_5.php";