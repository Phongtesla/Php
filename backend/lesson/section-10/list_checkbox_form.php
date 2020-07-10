<?php
// Kiểm tra xem submit chưa
if (isset($_POST['btn_add'])) {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    if (!empty($_POST['cat'])) {
        #cách 1
        foreach($_POST['cat'] as $item){
            echo $item."<br>";
        }
        #cách 2
        // $list_cat = implode(',', $_POST['cat']);
        // echo $list_cat;
    }
}

?>
<html>
    <head>
        <title>Lấy dữ liệu từ list check box</title>
    </head>
    <body>
        <h1>Chọn danh mục</h1>
        <form action="" method="POST">
            <input id="cat_1" type="checkbox" name="cat[]" value="1">
            <label for="cat_1">Thể thao</label><br><br>
            <input id="cat_2" type="checkbox" name="cat[]" value="2">
            <label for="cat_2">Xã hội</label><br><br>
            <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>