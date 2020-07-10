<?php
    require "lib/validation.php";
    require "lib/data.php";
// b1: Xây dựng giao diện
// b2: Validation
//   2.1: Tạo hàm is_phone_number
//   2.2: Xử lý submit form
// b3: Xuất dữ liệu
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống Họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống Tên đăng nhập";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Không đúng định dạng";    
        } else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống Mật khẩu";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Không đúng định dạng";    
        } else {
            $password = md5($_POST['password']);
        }
    }
    if (empty($_POST['phone'])) {
        $error['phone'] = "Không được để trống Số điện thoại";
    } else {
        if (!is_phone_number($_POST['phone'])) {
            $error['phone'] = "Không đúng định dạng";    
        } else {
            $phone = $_POST['phone'];
        }
    }
    if (empty($error)) {
        $info = array(
            'fullname' => "$fullname",
            'username' => "$username",
            'password' => "$password",
            'phone' => "$phone"
        );
        show_array($info);
    }
}

?>
<html>
    <head>
        <title>Form đăng kí</title>
    </head>
    <body>
        <h1>Đăng kí tài khoản</h1>
        <form method="POST">
            <label for="fullname">Họ và tên</label><br>
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>"><br><br>
            <?php echo form_error('fullname'); ?><br>
            <label for="username">Tên đăng nhập</label><br>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>"><br><br>
            <?php echo form_error('username'); ?><br>
            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"><br><br>
            <?php echo form_error('password'); ?><br>
            <label for="phone">Số điện thoại</label><br>
            <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>"><br><br>
            <?php echo form_error('phone'); ?><br>
            <input type="submit" name="btn_reg" value="Đăng kí">
        </form>
    </body>
</html>