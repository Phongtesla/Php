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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
}


?>



<html>
    <head>
        <title>Truyền dữ liệu by POST</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Name: <input type="text" name="username" ><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>