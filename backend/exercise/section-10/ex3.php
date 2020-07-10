<?php
#bài 3: Láy dl từ url
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $cat_id = $_GET['cat_id'];
    echo "Module: {$mod} <br>Action: {$act}<br>cat_id: {$cat_id}<br>";
?>




<html>
    <head>
        <title>ahihi</title>
    </head>
    <body>
        <a href='?mod=product&act=main&cat_id=1'>Áo</a>
    </body>
</html>