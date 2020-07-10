<?php
    if (isset($_POST['btn_login'])) {
        $error = array(); //Phất cờ
        if (empty($_POST['username'])) {
            // Hạ cờ
            $error['username'] = "Không được để trống trường username";
        }else{
            $username = $_POST['username'];
        }
        if (empty($_POST['password'])) {
            // Hạ cờ
            $error['password'] = "Không được để trống trường password";
        }else{
            $password = $_POST['password'];
        }
        // Kết luận
        if (empty($error)) {
            echo "Username: {$username} <br>Password: {$password}";
        }else{
            // echo "<pre>";
            // print_r($error);
            // echo "</pre>";
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
            <label for="usename">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <p class="error">
                <?php
                    if (!empty($error)) {
                        echo $error['username'];
                    }
                ?>
            </p>
            <label for="usename">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" name="btn_login" value="Login">
            <p class="error">
                <?php
                    if (!empty($error)) {
                        echo $error['password'];
                    }
                ?>
            </p>
        </form>
    </body>
</html>