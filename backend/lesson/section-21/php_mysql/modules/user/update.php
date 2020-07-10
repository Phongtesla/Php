<?php
get_header();
?>
<?php
$id = (int) $_GET['id']; //Lấy id trên url
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id"; // Lọc ra bản ghi có user_id = id
$result = mysqli_query($conn, $sql); // Truy cập vào bảng $sql
$item = mysqli_fetch_assoc($result); // Chọn lấy giá trị của $result và trả về dưới dạng mảng
show_array($item);
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
    // Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = "Chọn giới tính, mắt mù hay gì";
    } else {
        $gender = $_POST['gender'];
    }
    // Kết luận
    if (empty($error)) {
        $sql = "UPDATE `tbl_users` SET `fullname` = '{$fullname}', `gender` = '{$gender}' WHERE `user_id` = $id ";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Cập nhật dữ liệu thành công";
        } else {
            echo "Lỗi" . mysqli_error($conn);
        }
    } else {
        show_array($error);
    }
}
?>

<div id="content">
    <h1>Thêm mới</h1>
    <?php
    if (!empty($alert['success'])) {
    ?>
        <p class="success"><?php echo $alert['success']; ?></p>
    <?php
    }
    ?>
    <form method="POST" id="update">
        <label for="fullname">Họ và tên:</label><br>
        <input type="text" value="<?php if (isset($item['fullname'])) echo $item['fullname'] ?>" name="fullname" id="fullname"><br><br>
        <?php
        if (!empty($error['fullname'])) {
        ?>
            <p class="error"><?php echo $error['fullname']; ?></p>
        <?php
        }
        ?>
        <select name="gender" id="gender">
            <option value="">--Chọn giới tính--</option>
            <option <?php if (isset($item['gender']) && $item['gender'] == 'male') echo "selected = 'selected'"; ?> value="male">Nam</option>
            <option <?php if (isset($item['gender']) && $item['gender'] == 'female') echo "selected = 'selected'"; ?> value="female">Nữ</option>
        </select><br><br>
        <?php
        if (!empty($error['gender'])) {
        ?>
            <p class="error"><?php echo $error['gender']; ?></p>
        <?php
        }
        ?>
        <input type="submit" name="btn_update" value="Cập nhật">
    </form>
</div>