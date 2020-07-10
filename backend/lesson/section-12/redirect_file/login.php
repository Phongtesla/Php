<?php
ob_start();
require 'lib/validation.php';
if (isset($_POST['btn_reg'])) {
        $error = array(); //Phất cờ
        if (empty($_POST['username'])) {
            // Hạ cờ
            $error['username'] = "Bạn cần nhập họ và tên";
        }else{
            if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
                $error['username'] = "Username yêu cầu từ 6-32 ký tự";
            } else {
                if (!is_username($_POST['username'])) {
                    $error['username'] = "Username cho phép dùng ký tự, số, _,";
                }else{
                    $username = $_POST['username'];
                    echo $username;
                }
            }
            
        }

        
        if (empty($_POST['password'])) {
            // Hạ cờ
            $error['password'] = "Bạn cần nhập password";
        }else{
            if (!is_password($_POST['password'])) {
                $error['password'] = "password sử dụng chữ cái, chữ số, ký tự đặc biệt, bắt đầu bằng ký tự viết hoa và có 6-32 ký tự";
            }else{
                $password = $_POST['password'];
                echo $password;
            }
        }
        
    }
    if (empty($error)) {
        $data = array(
            'username' => 'ahihihi',
            'password' => 'Teslaaa'
        );
        if (($username == $data['username']) && ($password == $data['password'])) {
            header("Location: index.php");
        } else {
            echo "Thông tin hoặc tài khoản không tồn tại trên hệ thống";
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
            <label for="username">Username</label>
            <input type="text" name="username" id="username" ><br><br>
            <?php echo form_error('username') ?><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br><br>
            <?php echo form_error('password') ?><br>
            <input type="submit" name="btn_reg" value="Register">
            
        </form>
    </body>
</html>