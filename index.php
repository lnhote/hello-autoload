<?php
require_once __DIR__ .'/Autoloader.php';

$class       = "Service\\"."Blog";
$method      = "getByBlogId";
$param_array = [123];
$ret         = call_user_func_array(array($class, $method), $param_array);
var_dump($ret);
