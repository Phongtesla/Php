<?php
session_start();
setcookie('is_login', true, time() - 60);
setcookie('user_login', 'ahihihi', time() - 60);
// unset($_SESSION['is_login']);
// unset($_SESSION['user_login']);
session_destroy();

header("Location: login.php");
