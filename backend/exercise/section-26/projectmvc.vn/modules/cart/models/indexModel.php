<?php

function add_cart($id)
{
    $product = get_product_by_id($id);
    # Lưu thông tin sản phẩm vào giỏ hàng
    /* Khi bấm vào nút Thêm vào giỏ:
    Kiểm tra xem giỏ tồn tại chưa và cái sản phẩm vừa thêm có trong giỏ chưa
    Có: thì $qty + 1;
    */
    $qty = 1;
    if (isset($_SESSION['cart']['buy'][$id])) {
        $qty = $_SESSION['cart']['buy'][$id]['product_qty'] + 1;
    }
    // Giỏ hàng chứa sản phẩm đã mua
    $_SESSION['cart']['buy'][$id] = array(
        'product_id' => $product['product_id'],
        'product_title' => $product['product_title'],
        'product_price' => $product['product_price'],
        'product_code' => $product['product_code'],
        'product_thumb' => $product['product_thumb'],
        'product_qty' => $qty,
        'sub_total_price' => $qty * $product['product_price']
    );
    update_info_cart();
}
//Cập nhật Thông tin giỏ hàng
function update_info_cart()
{
    $num_order = 0;
    $total_price = 0;
    foreach ($_SESSION['cart']['buy'] as $product) {
        $num_order += $product['product_qty'];
        $total_price += $product['sub_total_price'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total_price' => $total_price,
    );
}
//Lấy danh sách sản phẩm đã mua
function get_list_products()
{
    if (isset($_SESSION['cart']['buy'])) {
        return $_SESSION['cart']['buy'];
    }
}
//Lấy thông tin tổng giá
function get_total_price()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total_price'];
    }
}
// Lấy thông tin số lượng sản phẩm để gán vào icon giỏ hàng bằng ajax
function get_num_order()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
}
//Xóa sản phẩm
function delete($id)
{
    if (isset($_SESSION['cart'])) {
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
        } else {
            unset($_SESSION['cart']);
        }
    }
    update_info_cart();
}
