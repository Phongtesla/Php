<?php
// Kiểm tra xem submit chưa
if (isset($_POST['btn_reg'])) {
    if (isset($_POST['rules'])) {
        $rules = $_POST['rules'];
        echo $rules;
    }else{
        echo "Không đồng ý cc";
    }
}

?>

<html>
    <head>
        <title>Lấy dữ liệu từ check box</title>
    </head>
    <body>
        <h1>Đăng kí</h1>
        <form action="" method="POST">
            <input id="rules" type="checkbox" name="rules" value="yes">
            <label for="rules">Nữ</label><br><br>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>