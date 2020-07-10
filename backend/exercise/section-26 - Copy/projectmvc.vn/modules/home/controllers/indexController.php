<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $list_phone = get_list_phone(1);
    $list_macbook = get_list_macbook(2);
    $phone_cat_info = get_phone_cat_info(1);
    $macbook_cat_info = get_phone_cat_info(2);
    $data['list_phone'] = $list_phone;
    $data['list_macbook'] = $list_macbook;
    $data['phone_cat_info'] = $phone_cat_info;
    $data['macbook_cat_info'] = $macbook_cat_info;
    load_view('index', $data);
}
function addAction()
{
}
function editAction()
{
}
