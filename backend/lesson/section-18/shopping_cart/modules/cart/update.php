<?php
/* Lấy thông tin số lượng sản phẩm theo id, mảng $POST['qty'] = (
        id => số lượng
)
*/
if (isset($_POST['btn_update'])) {
    update_cart($_POST['qty']);
    redirect("?mod=cart&act=show");
}
