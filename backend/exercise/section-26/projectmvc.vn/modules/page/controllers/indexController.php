<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    load_view('index');
}
function detailAction()
{

    $id = (int) $_GET['id'];
    $page = get_page_by_id($id);
    $data['page'] = $page;
    load_view('index', $data);
}
