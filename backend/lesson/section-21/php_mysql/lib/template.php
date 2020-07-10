<?php

function get_header($version = '')
{
    echo $version;
    if (!empty($version)) {
        $path_header = "inc/header-{$version}.php";
    } else {
        $path_header = "inc/header.php";
    }

    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}
function get_footer()
{
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require 'inc/footer.php';
    } else {
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
}
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
function redirect($url = "?page=home")
{
    if (!empty($url)) {
        header("Location: $url");
    }
}
