<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    //Phất cờ
    if (empty($_POST['username'])) {
        $error['username'] = "Bạn cần nhập họ và tên";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Username yêu cầu 6 - 32 ký tự";
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($partten, $_POST['username'], $matchs)) {
                $error['username'] = "Username cho dùng số chữ _ và . , từ 6 đến 32 kí tự";
            } else {
                $username = $_POST['username'];
                echo $username;
            }
        }
    }





    if (empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "Bạn cần nhập password";
    } else {
        $password = $_POST['password'];
        echo $password;
    }
}
?>



<html>

<head>
    <title>Chuẩn hóa dữ liệu form đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="gender">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <p>
            <?php
            if (!empty($error['username'])) {
                echo $error['username'];
            }
            ?>
        </p>
        <label for="gender">Password</label>
        <input type="password" name="password" id="password"><br><br>
        <p>
            <?php
            if (!empty($error['username'])) {
                echo "Bạn chưa nhập password";
            }
            ?>
        </p>
        <input type="submit" name="btn_reg" value="Register">

    </form>
</body>

</html>