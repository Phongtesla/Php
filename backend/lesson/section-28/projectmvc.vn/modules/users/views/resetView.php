<html>

<head>
    <title>Hệ thống điều hướng cơ bản</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1>Khôi phục mật khẩu</h1>
        <form id="form-login" method="POST" action="">
            <input id="email" type="text" name="email" value="" placeholder="email">
            <?php echo form_error('email'); ?>
            <input id="btn-login" type="submit" name="btn-reset" value="Gửi yêu cầu">
            <?php echo form_error('account'); ?>
        </form>
        <a href="?mod=users&controller=index&action=reg">Đăng ký</a> | <a href="?mod=users&controller=index&action=login">Đăng nhập</a>
    </div>
</body>

</html>