<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('helper', 'format');
}


function mainAction()
{
    $cat_id = (int) $_GET['cat_id'];
    $list_products = get_list_products($cat_id);
    $cat_info = get_cat_info($cat_id);
    $data['list_products'] = $list_products;
    $data['cat_info'] = $cat_info;
    load_view('main', $data);
}
function detailAction()
{
    $id = (int) $_GET['id'];
    $product = get_product_by_id($id);
    $data['product'] = $product;

    load_view('detail', $data);
}
function editAction()
{
}
