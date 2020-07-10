<?php
// Kiểm tra xem submit chưa
if (isset($_POST['btn_reg'])) {
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (empty($_POST['gender'])) {
        echo "Bạn chưa nhập giới tính";
    }else{
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}

?>

<html>
    <head>
        <title>Lấy dữ liệu từ radio</title>
    </head>
    <body>
        <h1>Đăng kí</h1>
        <form action="" method="POST">
            <input id="male" type="radio" name="gender" value="male">
            <label for="male">Nam</label><br>
            <input id="female" type="radio" name="gender" value="female" >
            <label for="female">Nữ</label><br><br>
            <input id="female" type="radio" name="gender" value="female" >
            <label for="female">Nữ</label><br><br>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>