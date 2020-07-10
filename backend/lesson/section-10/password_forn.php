<?php
function show_array($data){
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// Kiểm tra xem submit chưa
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "Để trống cc";
    }else{
        $username = $_POST['username'];

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
        <title>Lấy dữ liệu từ text box</title>
    </head>
    <body>
        <h1>Tìm kiếm</h1>
        <form action="" method="POST">
            Tên đăng nhập: <input type="text" name="username">
            Mật khẩu: <input type="password" name="password" >
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>