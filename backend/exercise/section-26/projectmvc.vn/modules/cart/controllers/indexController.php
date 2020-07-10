<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('lib', 'product');
    load('helper', 'format');
    load('helper', 'url');
}

function addAction()
{
    $id = (int) $_GET['id'];
    add_cart($id);
    // redirect("show.html");
}
function showAction()
{
    $list_products = get_list_products();
    $total_price = get_total_price();
    $data['list_products'] = $list_products;
    $data['total_price'] = $total_price;
    load_view('show', $data);
}
function checkoutAction()
{

    load_view('checkout');
}

function deleteAction()
{
    $id = (int) $_GET['id'];
    delete($id);
    redirect("show.html");
}
function update_ajaxAction()
{
    $id = $_POST['id'];
    $new_qty = $_POST['new_qty'];
    $product = get_product_by_id($id);
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        // cập nhật lại số lượng sản phẩm 
        $_SESSION['cart']['buy'][$id]['product_qty'] = $new_qty;
        //Cập nhật lại tổng giá sản phẩm
        $sub_total_price = $product['product_price'] * $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total_price'] = $sub_total_price;
        update_info_cart();
        $total_price = get_total_price();
        $num_order = get_num_order();
    }
    $data = array(
        'num_order' => $num_order,
        'sub_total_price' => currency_format($sub_total_price, 'VNĐ'),
        'total_price' => currency_format($total_price, 'VNĐ'),
    );
    echo json_encode($data);
}
