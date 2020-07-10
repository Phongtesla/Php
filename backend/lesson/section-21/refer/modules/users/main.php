<?php
get_header();

?>
<?php
// Xuất dữ liệu
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $list_user = array();
// $num_row = mysqli_num_rows($result);
// if ($num_row > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_user[] = $row;
//     }
// }
$list_user = db_fetch_array("SELECT * FROM `tbl_users`");
$num_rows = db_num_rows("SELECT * FROM `tbl_users`");
foreach ($list_user as &$user) {
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>

<div id="content">
    <a class="add" href="?mod=users&act=add">Thêm thành viên</a>
    <style>
        .table_data thead tr td{
            font-weight: bold;
            padding: 2px 8px;
        }
        .table_data tr td {
            border-bottom:1px solid #333;
            padding: 1px 8px;
        }
    </style>
    <h1>Danh sách thành viên</h1>
    <?php if (!empty($list_user)) {
    ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $temp = 0;
                foreach ($list_user as $user) {
                    $temp++;
                    ?>
                <tr>
                    <td><?php echo $temp ?></td>
                    <td><?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['fullname'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo show_gender($user['gender'])?></td>
                    <td><a href="<?php echo $user['url_update']; ?>">Sửa</a> | <a href="<?php echo $user['url_delete']; ?>">Xóa</a></td>
                </tr>
                    <?php
                }?>

            </tbody>
        </table>
        <p class="num_rows">Có <?php echo $num_rows ?> thành viên</p>
    <?php
}?>

</div>
