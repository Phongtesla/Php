<?php
// Hàm lấy danh sách các sp
function get_list_product()
{
    $result = db_fetch_array("SELECT * FROM `tbl_products`");
    return $result;
}
//Lấy sp
function get_product_by_id($id)
{
    $product = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    return $product;
}
