<?php
ob_start();
session_start();
// $is_login = true;

require 'lib/validation.php';
if (isset($_POST['btn_reg'])) {
        $error = array(); //Ph?t c?
        if (empty($_POST['username'])) {
            // H? c?
            $error['username'] = "B?n c?n nh?p h? v? t?n";
        }else{
            if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
                $error['username'] = "Username y?u c?u t? 6-32 ký t?";
            } else {
                if (!is_username($_POST['username'])) {
                    $error['username'] = "Username cho phép d?ng ký t?, s?, _,";
                }else{
                    $username = $_POST['username'];
                    echo $username;
                }
            }
            
        }

        
        if (empty($_POST['password'])) {
            // H? c?
            $error['password'] = "B?n c?n nh?p password";
        }else{
            if (!is_password($_POST['password'])) {
                $error['password'] = "password s? d?ng ch? cái, ch? s?, ký t? ð?c bi?t, b?t ð?u b?ng ký t? vi?t hoa v? có 6-32 ký t?";
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
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'Th?';
            header("Location: index.php");
        } else {
            echo "Thông tin ho?c t?i kho?n không t?n t?i tr?n h? th?ng";
        }
    }
?>
<html>
    <head>
        <title>Chu?n hóa d? li?u form ðãng nh?p</title>
    </head>
    <body>
        <h1>Ðãng nh?p</h1>
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