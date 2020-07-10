<?php
function get_list_phone($cat_id)
{
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$cat_id}");
    return $result;
}
function get_list_macbook($cat_id)
{
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$cat_id}");
    return $result;
}
function get_phone_cat_info($cat_id)
{
    $info = db_fetch_row("SELECT * FROM `tbl_category` WHERE `cat_id` = {$cat_id}");
    return $info;
}
function get_macbook_cat_info($cat_id)
{
    $info = db_fetch_row("SELECT * FROM `tbl_category` WHERE `cat_id` = {$cat_id}");
    return $info;
}
