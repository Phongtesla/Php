<?php
function is_username($username)
{
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs)) {
        return FALSE;
    }

    return true;
}
function is_password($password)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($pattern, $password)) {
        return FALSE;
    }
    return true;
}
function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
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
