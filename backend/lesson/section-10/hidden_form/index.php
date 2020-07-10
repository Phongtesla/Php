<?php
function show_array($data){
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show_array($_SERVER);
// Kiểm tra xem submit form chưa
if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'admin',
        'password' => "ahihi123"
    );
    $erro = array();
    if (empty($_POST['username'])) {
        $erro['username'] = "Để trống cc";
    }else{
        $username = $_POST['username'];

    }
    if (empty($_POST['password'])) {
        $erro['password'] = "Để trống cc";
    }else{
        $password = $_POST['password'];
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    // Kiểm tra dữ liệu
    if (empty($erro)) {
        if (($username == $info_user['username']) && ($password == $info_user['password'])) {
            $redirect_to = $_POST['redirect_to'];
            header("location:{$redirect_to}");// chuyển hướng 
        }else{
            $erro['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }
    if (!empty($erro)) {
        show_array($erro);
    }
}
?>
<html>
    <head>
        <title>Nhận dữ liệu từ Hidden Field</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Name: <input type="text" name="username" ><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="hidden" name="redirect_to" value="cart.php">
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>