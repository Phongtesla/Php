<?php
function  redirect($url = "?home")
{
    if (!empty($url)) {
        header("location: {$url}");
    }
}
