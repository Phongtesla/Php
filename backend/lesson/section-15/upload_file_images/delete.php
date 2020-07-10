<?php
    $file_url = "uploads/pic-1.jpg";
    if (@unlink($file_url)) {
        echo "Xóa file {$file_url} thành công";
    } else {
        echo "File {$file_url} không tồn tại trên hệ thống";
    }

?>