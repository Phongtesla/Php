<?php
#bài 1: Lấy thông tin form đăng nhập
    // Kiểm tra submit chưa
    if (isset($_POST['btn_login'])) {
        if (empty($_POST['username'])) {
            echo "Để trống cc";
        }else{
            $username = $_POST['username'];
            echo $username."<br>";
        }
        if (empty($_POST['password'])) {
            echo "Để trống cc";
        }else{
            $password = $_POST['password'];
            echo $password;
        }
    }

?>




<html>
    <head>
        <title>ahihi</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Tên đăng nhập:<input type="text" name="username"><br>
            Mật khẩu:<input type="password" name="password"><br><br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>