<?php
get_header();
?>
<?php
//Lệnh truy vấn
$sql = "SELECT  * FROM `tbl_users`"; // Chọn bảng tbl_users trong db
$result = mysqli_query($conn, $sql); // Truy cập vào bảng tbl_users
$list_users = array();
$num_rows = mysqli_num_rows($result); // Số lượng bản ghi
if (mysqli_num_rows($result) > 0) {  // Nếu bảng tbl_users có giá trị, tức là $result có giá trị, mysqli_num_rows là hàm đếm số bản ghi
    while ($row = mysqli_fetch_assoc($result)) { // trong khi $row có giá trị thì sẽ ở dưới, mysqli_fetch_assoc trả về mảng giá trị
        $list_users[] = $row; // thì thên các giá trị ấy vào mảng list_users

    }
}
foreach ($list_users as &$user) {
    $user['url_update'] = "?mod=user&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=user&act=delete&id={$user['user_id']}";
}
unset($user);
// show_array($list_uesrs);
?>
<div id="content">
    <a href="?mod=user&act=add">Thêm mới</a>
    <style>
        .table_user thead {
            border-bottom: 2px solid #333;
            font-weight: bold;
        }

        .table_user tr td {
            border-bottom: 1px solid #333;
            padding: 8px 15px;
        }
    </style>
    <?php if (!empty($list_users)) {
    ?>
        <table class="table_user">
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
                foreach ($list_users as $user) {
                    $temp++;
                ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo show_gender($user['gender']); ?></td>
                        <td><a href="<?php echo $user['url_update']; ?>">Sửa</a>|<a href="<?php echo $user['url_delete']; ?>">Xóa</a></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <p>Có <strong><?php echo $num_rows; ?></strong> thành viên trong hệ thống</p>
    <?php
    }  ?>

</div>