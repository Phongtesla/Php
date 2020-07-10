<?php

function get_list_products($cat_id)
{
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$cat_id}");
    return $result;
}
function get_cat_info($cat_id)
{
    $info = db_fetch_row("SELECT * FROM `tbl_category` WHERE `cat_id` = {$cat_id}");
    return $info;
}
function get_product_by_id($id)
{
    $product = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    return $product;
}
