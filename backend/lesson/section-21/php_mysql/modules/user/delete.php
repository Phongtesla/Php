<?php
$id = (int) $_GET['id']; //Lấy id trên url
$sql = "DELETE FROM `tbl_users` WHERE `user_id` = $id"; // Đây chỉ là 1 câu lệnh, chứ chưa thực thi
if (mysqli_query($conn, $sql)) {
    // echo "XÓa thành công";
    redirect("?mod=user&act=main");
}
