<?php
session_start();
echo "Trang chủ <br>";
print_r($_SESSION['is_login']);
// echo $is_login;
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php ");
} else {
    // echo $_SESSION['user_login'];
}

?>
<br>
<a href="logout.php">Đăng xuất</a>