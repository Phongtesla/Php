<?php
get_header();
$id = (int) $_GET['id'];

?>
<?php

if (isset($_POST['btn_update'])) {
    $error = array();
    $alert = array();
    // Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Điển tên của mày vào, đéo có tên à";
    } else {
        $fullname = $_POST['fullname'];
    }
    // Kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Điền vào, chó lợn này";
    } else {
        $patern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($patern, $_POST['username'])) {
            $error['username'] = "Đéo đúng, nhập lại";
        } else {
            $username = $_POST['username'];
        }
    }
    // Kết luận
    if (empty($error)) {
        // $sql = "UPDATE `tbl_users` SET `fullname` = '{$fullname}', `username` = '{$username}' WHERE `user_id` = {$id}";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "cập nhật dữ liệu thành công";
        // } else {
        //     echo "Lỗi" . mysqli_errno($conn);
        // }
        $data = array(
            'fullname' => $fullname,
            'username' => $username,
        );
        db_update('tbl_users', $data, "`user_id` = {$id}");
    }
}
// $sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$id}";
// $result = mysqli_query($conn, $sql);
// $item = mysqli_fetch_array($result);
// show_array($item);
?>


<div id="content">
    <h1>Cập nhật</h1>
    <?php
if (!empty($alert['success'])) {
    ?>
            <p class="success"><?php echo $alert['success']; ?></p>
            <?php
}
?>
    <form method="POST" id="reg">
        <label for="fullname">Họ và tên:</label><br>
        <input type="text" name="fullname" id="fullname"><br><br>
        <?php
if (!empty($error['fullname'])) {
    ?>
                <p class="error"><?php echo $error['fullname']; ?></p>
                <?php
}
?>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <?php
if (!empty($error['username'])) {
    ?>
                <p class="error"><?php echo $error['username']; ?></p>
                <?php
}
?>

        <input type="submit" name="btn_update" value="Cập nhật">

    </form>
</div>
