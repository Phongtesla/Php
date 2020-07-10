<?php
ob_start();
session_start();
// $is_login = true;

require 'lib/validation.php';
if (isset($_POST['btn_reg'])) {
    $error = array();
    #check username
    if (empty($_POST['username'])) {
        // H? c?
        $error['username'] = "Nhập tài khoản vào";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Username y?u c?u t? 6-32 k� t?";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username cho ph�p d?ng k� t?, s?, _,";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    #check password
    if (empty($_POST['password'])) {
        $error['password'] = "Bạn cần nhập password";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "password không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }
}
//Kết luận
if (empty($error)) {
    $data = array(
        'username' => 'ahihihi',
        'password' => 'LLLLL0',
    );
    if (($username == $data['username']) && ($password == $data['password'])) {
        if (isset($_POST['remember_me'])) {
            // setcookie('is_login', true, time() + 10);
            // setcookie('user_login', 'ahihihi', time() + 10);
        }
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = 'user';
        header("Location: index.php");
    } else {
        echo "Thông tin tài khoản hoặc mật khẩu ngu";
    }
}
?>
<html>

<head>
    <title>COOKIE</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <?php echo form_error('username') ?><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>
        <?php echo form_error('password') ?><br>
        <label for="remember_me">Ghi nhớ đăng nhập</label><br>
        <input type="checkbox" name="remember_me" id="remember_me"><br>
        <input type="submit" name="btn_reg" value="Login">

    </form>
</body>

</html>