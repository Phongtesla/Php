<?php
    function redirect($url='home'){
        if (!empty($url)) {
            header("Location: {$url}");
        }
    }
?>