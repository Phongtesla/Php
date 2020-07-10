<?php
// Get data bằng URL
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

echo "{$mod} - {$act} - {$id}";

function show_array($data){
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// Kiểm tra xem submit chưa
if (isset($_GET['btn_search'])) {
    show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}

?>

<html>
    <head>
        <title>Truyền dữ liệu by GET</title>
    </head>
    <body>
        <a href="?mod=product&act=detail&id=1242">Sản phẩm</a>
        <h1>Tìm kiếm</h1>
        <form action="" method="GET">
            Tìm kiếm: <input type="text" name="q" >
            <input type="submit" name="btn_search" value="Search">
        </form>
    </body>
</html>