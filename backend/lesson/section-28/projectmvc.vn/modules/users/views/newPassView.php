<html>

<head>
    <title>Hệ thống điều hướng cơ bản</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1>Mật khẩu mới</h1>
        <form id="form-login" method="POST" action="">
            <input id="password" type="password" name="password" value="" placeholder="New password">
            <?php echo form_error('password'); ?>
            <input id="btn-login" type="submit" name="btn-updatePass" value="Lưu thay đổi">
            <?php echo form_error('account'); ?>
        </form>
        <a href="?mod=users&controller=index&action=reg">Đăng ký</a> | <a href="?mod=users&controller=index&action=login">Đăng nhập</a>
    </div>
</body>

</html>