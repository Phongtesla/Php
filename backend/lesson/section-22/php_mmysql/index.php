<?php
require 'db/config.php';
require 'db/database.php';

require 'lib/data.php';
require 'lib/pagging.php';
require 'lib/user.php';
require 'lib/url.php';
require 'lib/template.php';
?>
<?php
db_connect($config);
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
// echo path
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
