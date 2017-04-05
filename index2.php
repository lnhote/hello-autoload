<?php
require_once __DIR__ .'/Autoloader.php';
use Service\Blog;
$ret = Blog::getByBlogId(123);
var_dump($ret);