<?php
$conn = mysqli_connect('localhost', 'root', '', 'unitop');
if (!$conn) {
    echo "Kết nối không thành công" . mysqli_connect_errno();
    die();
}
