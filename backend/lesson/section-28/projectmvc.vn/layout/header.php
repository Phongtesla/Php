<html>

<head>
    <title>Hệ thống MVC</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div id="wrapper">
        <!-- HEADER  -->
        <div id="header">
            <a id="logo" href="">UNITOP</a>
            <div id="user_login">
                <p>Xin chào <strong><?php if (is_login())  echo $_SESSION['user_login']; ?></strong>(<a href="?mod=users&action=logout">Thoát</a>)</p>
            </div>
            <ul id="main-menu">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>