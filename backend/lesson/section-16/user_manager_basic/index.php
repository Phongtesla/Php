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
$page = !empty($_GET['page']) ? $_GET['page'] : 'login';
$path = "pages/{$page}.php";
// Kiểm tra login 
if (!is_login() && $page != 'login') {
    redirect('?page=login');
}
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}

?>
         