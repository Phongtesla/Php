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
            <?php echo form_error('username'); ?>
            <input id="password" type="password" name="password" value="" placeholder="Password">
            <?php echo form_error('password'); ?>
            <input id="btn-login" type="submit" name="btn-login" value="Đăng nhập">
            <?php echo form_error('account'); ?>
        </form>
        <a href="?mod=users&controller=index&action=reg">Đăng ký</a> | <a href="?mod=users&controller=index&action=reset">Quên mật khẩu?</a>
    </div>
</body>

</html>