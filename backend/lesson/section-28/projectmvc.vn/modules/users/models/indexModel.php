<?php
function update_pass($data, $reset_token)
{

    db_update('tbl_users', $data, "`reset_token`='{$reset_token}'");
}
function check_reset_token($reset_token)
{

    $check_reset_token = db_num_rows("SELECT * FROM `tbl_users` WHERE `reset_token`='{$reset_token}'");
    echo $check_reset_token;
    if ($check_reset_token > 0) {
        return true;
    }
    return false;
}
function update_reset_token($data, $email)
{
    db_update('tbl_users', $data, "`email` = '$email'");
}
function check_email($email)
{
    $check_email = db_num_rows("SELECT * FROM `tbl_users` WHERE `email`='{$email}'");
    if ($check_email > 0) {
        return true;
    }
    return false;
}
#Thêm user
function add_user($data)
{
    return db_insert('tbl_users', $data);
}
#Kiểm tra user xem tồn tại hay chưa
function user_exists($data)
{
    global $email, $username;
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `email`='{$email}' OR `username`='{$username}'");
    echo $check_user;
    if ($check_user > 0) {
        return true;
    }
    return false;
}
#Kiểm tra token xem tồn tại không

function check_active_token($active_token)
{
    $check_token = db_num_rows("SELECT * FROM `tbl_users` WHERE `active_token`='{$active_token}' AND `is_active` = '0'");
    if ($check_token > 0) {
        return true;
    }
    return false;
}
#active user
function active_user($active_token)
{
    return db_update('tbl_users', array('is_active' => 1), "`active_token` = '{$active_token}'");
}
#check login
function check_login($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `username`='{$username}' AND `password`='{$password}'");
    echo $check_user;
    if ($check_user > 0) {
        return true;
    }
    return false;
}
#lấy danh sách người dùng
function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}
#Lấy user
function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}
