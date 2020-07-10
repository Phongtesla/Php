<?php   
    function is_username($username){
        $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($partten, $_POST['username'], $matchs))
            return FALSE;
        return true;

    }
    function is_password($password){
        $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($partten, $_POST['password'], $matchs))
            return FALSE;
        return true;

    }
    function form_error($label_field){
        global $error;
        if(!empty($error[$label_field])) return "<p class='error'>{$error[$label_field]}</p>";
    }
    function set_value($label_field){
        global $$label_field;
        if (!empty($$label_field)) return $$label_field;
    }
    function redirect_to($url){
        if (!empty($url)) {
            header("Location: index.php");
        } else {
            return false;
        }
    }
?>