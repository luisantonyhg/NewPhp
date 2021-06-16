<?php

require "Admin/Blog.php";
require "Blog.php";

Use Admin\Blog as AdminBLog;
$adminBlog = new AdminBlog;
echo "<br>";
$blog = new Blog;