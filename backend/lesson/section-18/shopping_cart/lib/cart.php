<?php
# thêm sản phẩm vào giỏ
function add_cart($id)
{
    global $list_product;
    #Lấy thông tin sản phẩm

    $item = get_product_by_id($id);
    # Lưu thông tin sản phẩm vào giỏ hàng
    /* Khi bấm vào nút Thêm vào giỏ:
    Kiểm tra xem giỏ tồn tại chưa và cái sản phẩm vừa thêm có trong giỏ chưa
    Có: thì $qty + 1;
    */
    $qty = 1; // số lượng của 1 sản phẩm
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    #Giỏ hàng chứa danh sách sản phẩm đã mua
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => $item['url'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'code' => $item['code'],
        'product_thumb' => $item['product_thumb'],
        'qty' => $qty,
        'sub_total' => $qty * $item['price']
    );
    update_info_cart();
}
// update thông tin cart
function update_info_cart()
{
    #Info giỏ hàng, num_order: số lượng sản phẩm , total: tổng giá tất cả sản phẩm
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['qty'];
        $total     += $item['sub_total'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total
    );
}
#Lấy danh sách sản phẩm đã mua để đổ vào chỗ giỏ hàng
function get_list_buy_cart()
{
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete'] = "?mod=cart&act=delete&id={$item['id']}"; //Bấm vào để xóa sản phẩm
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}
# Lấy số lượng sản phẩm đã mua để đổ vào cái icon giỏ hàng
function get_num_order_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
}
#lấy tổng giá của giỏ hàng
function get_total_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
}
#Xóa sản phẩm hoặc cả giỏ hàng
function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        if (isset($id)) {
            unset($_SESSION['cart']['buy'][$id]);
        } else {
            unset($_SESSION['cart']['buy']);
        }
        update_info_cart();
    }
}
#Update giỏ hàng sau khi bấm cập nhật
function update_cart($qty)
{
    //Cập nhật số lượng sản phẩm và tổng giá của sản phẩm đó. 
    foreach ($qty as $id => $new_qty) { // rà soát từng phần phần tử trong mảng $qty  = array(id=>qty)
        // thay cái new_qty vào qty cũ. 
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
