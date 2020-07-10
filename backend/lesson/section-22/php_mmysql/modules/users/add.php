<?php
get_header();

?>
<?php

if (isset($_POST['btn_reg'])) {
    $error = array();
    // Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Điển tên của mày vào, đéo có tên à";
    } else {
        $fullname = $_POST['fullname'];
    }
    // Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Điền vào, chó lợn này";
    } else {
        $patern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($patern, $_POST['username'])) {
            $error['username'] = "Đéo đúng, nhập lại";
        } else {
            $username = $_POST['username'];
        }
    }
    // Kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "Điền vào, đùa tao à";
    } else {
        $patern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if (!preg_match($patern, $_POST['password'])) {
            $error['password'] = "Đéo đúng, nhập lại";
        } else {
            $password = $_POST['password'];
        }
    }
    // Kiểm tra email
    if (empty($_POST['email'])) {
        $error['email'] = "Nhập gmail vào";
    } else {
        $pattern_email = '/^[A-Za-z0-9_.]{6,32}@([A-Za-z0-9]{2,12})(.[a-zA-Z]{2,12})+/';
        if (!preg_match($pattern_email, $_POST['email'])) {
            $error['email'] = "Lỗi rồi, gõ lại";
        } else {
            $email = $_POST['email'];
        }
    }
    // Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = "Chọn giới tính, mắt mù hay gì";
    } else {
        $gender = $_POST['gender'];
    }
    // Kết luận
    if (empty($error)) {
        // $sql = "INSERT INTO `tbl_users` (`fullname`, `email`, `password`, `username`, `gender`)" . "VALUES ('{$fullname}', '{$email}', '{$password}', '{$username}', '{$gender}')";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "Thêm dữ liệu thành công";
        // } else {
        //     echo "Lỗi" . mysqli_errno($conn);
        // }
        $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'gender' => $gender,
        );
        $insert_id = db_insert('tbl_users', $data);
        if (isset($insert_id)) {
            redirect('?mod=users&act=main');
        }
        // echo $insert_id;
    }
}

?>


<div id="content">
    <h1>Thêm mới</h1>
    <form method="POST" id="reg">
        <label for="fullname">Họ và tên:</label><br>
        <input type="text" name="fullname" id="fullname"><br><br>
        <?php
        if (!empty($error['fullname'])) {
            ?>
                <p class="error"><?php echo $error['fullname']; ?></p>
                <?php
        }
        ?>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <?php
        if (!empty($error['username'])) {
            ?>
                <p class="error"><?php echo $error['username']; ?></p>
                <?php
        }
        ?>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <?php
        if (!empty($error['password'])) {
            ?>
                <p class="error"><?php echo $error['password']; ?></p>
                <?php
        }
        ?>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br><br>
        <?php
        if (!empty($error['email'])) {
            ?>
                <p class="error"><?php echo $error['email']; ?></p>
                <?php
        }
        ?>

        <select name="gender" id="gender">
            <option value="">--Chọn giới tính--</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select><br><br>
        <?php
        if (!empty($error['gender'])) {
            ?>
                <p class="error"><?php echo $error['gender']; ?></p>
                <?php
        }
        ?>

        <input type="submit" name="btn_reg" value="Đăng ký">

    </form>
</div>
