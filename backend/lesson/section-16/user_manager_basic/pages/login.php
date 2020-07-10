<?php
    if (isset($_POST['btn-login'])) {
        $error = array();
        # Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            $parrten = '/^[A-Za-z0-9_\.]{6,32}$/';
            if (!preg_match($parrten, $_POST['username'],$matchs)) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        # Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            $parrten = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($parrten, $_POST['password'],$matchs)) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = $_POST['password'];
            }
        }
        #Kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                // Lưu trữ phiên đăng nhập 
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                // Chuyển hướng vào trong hệ thống 
                redirect("?page=home");
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
?>
            
<html>
    <head>
        <title>Hệ thống điều hướng cơ bản</title>
        <link rel="stylesheet" href="public/css/reset.css">
        <link rel="stylesheet" href="public/css/login.css">
    </head>
    <body>
       <div id="wp-form-login">
           <h1>Đăng nhập</h1>
           <form id="form-login" method="POST" action="">
                <input id="username" type="text" name="username" value="" placeholder="Username">
                <?php if (!empty($error['username'])) {
                    ?>
                    <p class="error"><?php echo $error['username']; ?></p>
                    <?php
                } 
                ?>
                <input id="password" type="password" name="password" value="" placeholder="Password">
                <?php if (!empty($error['password'])) {
                    ?>
                    <p class="error"><?php echo $error['password']; ?></p>
                    <?php
                } 
                ?>
                <input id="btn-login" type="submit" name="btn-login" value="Đăng nhập">
                <?php if (!empty($error['account'])) {
                    ?>
                    <p class="error"><?php echo $error['account']; ?></p>
                    <?php
                } 
                ?>
           </form>
           <a href="">Quên mật khẩu?</a>
       </div>
    </body>
</html>  


            .
         