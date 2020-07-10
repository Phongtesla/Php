<?php
    require "lib/validation.php";
    if (isset($_POST['btn_reg'])) {
        $error = array(); //Phất cờ
        if (empty($_POST['username'])) {
            // Hạ cờ
            $error['username'] = "Bạn cần nhập họ và tên";
        }else{
            $username = $_POST['username'];
        }
        if (empty($_POST['gender'])) {
            // Hạ cờ
            $error['gender'] = "Bạn cần chọn giới tính";
        }else{
            $gender = $_POST['gender'];
        }
        // Kết luận
        if (empty($error)) {
            echo "Gender: {$gender}";
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
            <label for="gender">Họ và tên</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>"><br><br>
            <p>
                <?php
                    if (!empty($error['username'])) {
                        echo "Bạn chưa nhập họ và tên";
                    }
                ?>
            </p>
            <label for="gender">Giới tính</label>
            <select name="gender" id="gender">
                <option value="">--Chọn--</option>
                <option <?php if (!empty($gender) && $gender=='male') {
                                    echo "selected='selected'";
                                } 
                        ?> value="male">
                        Nam
                </option>
                <option <?php if (!empty($gender) && $gender=='female') {
                                    echo "selected='selected'";
                                } 
                        ?> value="female">
                        Nữ
                </option>
            </select><br><br>
            <?php if (!empty($error['gender'])) {
                echo "<p class='error'> {$error['gender']}</p>";
            } ?><br>
            <input type="submit" name="btn_reg" value="Register">
            
        </form>
    </body>
</html>