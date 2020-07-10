<?php

function is_username($username)
{
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs))
        return FALSE;
    return true;
}
function is_password($password)
{
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $password, $matchs))
        return FALSE;
    return true;
}
function is_phone_number($number)
{
    $partten = "/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
    if (!preg_match($partten, $number, $matchs))
        return FALSE;
    return true;
}







function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field])) return "<p class='error'>{$error[$label_field]}</p>";
}
function set_value($label_field)
{
    global $$label_field;
    if (!empty($$label_field)) return $$label_field;
}
