<?php
#Lấy id xuống để cho vào hàm xóa sản phẩm theo id
$id = (int) $_GET['id'];
delete_cart($id);
redirect("?mod=cart&act=show");
