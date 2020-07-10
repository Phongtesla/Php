<?php
session_start();
ob_start();
// Data 
require 'data/user.php';

// Funciton 
require 'lib/data.php';
require 'lib/url.php';
require 'lib/user.php';
require 'lib/template.php';
?>

<?php

// Kiểm tra login, nếu có cookie thì chuyển thẳng vào home, còn ko có thì vào login
if (isset($_COOKIE['is_login'])) {
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";
    if (file_exists($path)) {
        require $path;
    } else {
        require 'inc/404.php';
    }
} else {
    $page = !empty($_GET['page']) ? $_GET['page'] : 'login';
    $path = "pages/{$page}.php";
    if (!is_login() && $page != 'login') {
        redirect('?page=login');
    }
    if (file_exists($path)) {
        require $path;
    } else {
        require 'inc/404.php';
    }
}



?>