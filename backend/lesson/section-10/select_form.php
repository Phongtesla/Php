<?php
// Kiểm tra xem submit chưa
if (isset($_POST['pay'])) {
        if (empty($_POST['pay'])) {
            echo "Không chọn cc";
        }else{
            $pay = $_POST['pay'];
            echo $pay;
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
            <select name="pay" id="">
                <option value="">--Chọn--</option>
                <option value="cod">Thanh toán tại nhà</option>
                <option value="banking">Thanh toán qua Thẻ tín dụng</option>
            </select>
            <input type="submit" name="btn_order" value="Đặt hàng">
        </form>
    </body>
</html>