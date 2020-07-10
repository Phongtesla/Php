<?php
session_start();
ob_start();
#Dữ liệu
require 'db/pages.php';
require 'db/products.php';
#Thư viện
require 'lib/redirect_url.php';
require 'lib/cart.php';
require 'lib/number.php';
require 'lib/product.php';
require 'lib/page.php';
require 'lib/template.php';
require 'lib/data.php';

$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
// echo path
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
