<?php
$x=false;

function check_even($x) {
    if ($x % 2 == 0)
        return TRUE;
    return FALSE;
}

if (!check_even(6)){
    echo "OK";
}