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
            <input id="fullname" type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" placeholder="Fullname">
            <input id="username" type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
            <?php echo form_error('username'); ?>
            <input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
            <?php echo form_error('password'); ?>
            <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
            <?php echo form_error('email'); ?>
            <input id="btn-reg" type="submit" name="btn-reg" value="Đăng ký">
            <?php echo form_error('account'); ?>
        </form>
        <a href="?mod=users&controller=index&action=login">Đăng nhập</a>
    </div>
</body>

</html>