<?php
// Lấy id và new_qty vừa đẩy lên POST ở js
$id = $_POST['id'];
$new_qty = $_POST['new_qty'];
//Lấy thông tin sản phẩm để cập nhật lại
$item = get_product_by_id($id);
// Kiểm tra giỏ hàng có tồn tại không và sản phẩm có tồn tại trong giỏ không    
if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    //Cập nhật lại số lượng sản phẩm
    $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
    //Cập nhật tổng giá sản phẩm
    $sub_total = $item['price'] * $new_qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
    // cập nhật cả giỏ hàng
    update_info_cart();
    //cập nhật tổng giá giỏ hàng
    $total = get_total_cart();
    //Giá trị trả về
    $data = array(
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total),
    );
    echo json_encode($data);
}
