<?php
function get_info_cat($cat_id)
{
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        return $list_product_cat[$cat_id];
    }
    return FALSE;
}
function get_list_product_by_cat_id($cat_id)
{
    global $list_product;
    // rà soát từng phần tử trong mảng xem phần tử nào có cat_id = 1 thì lấy ra riêng, =  2 thì lấy ra riêng.
    // lọc xong rồi thì nhét vào mảng result
    $result = array();
    foreach ($list_product as $item) {
        if ($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}"; //khi bấm vào sản phẩm thì chuyển đến trang detail
            $result[] = $item;
        }
    }
    return $result;
}
function get_product_by_id($id)
{
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}"; //bấm vào chuyển add.php 
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$id}"; //bấm vào chuyển qua trang chi tiết sản phẩm
        return $list_product[$id]; // lấy id của mảng $list_product, mỗi id là 1 sản phẩm, 6 cái id có 6 cái sản phẩm
    }
    return false;
}
