<?php   
$list_prime = array(2, 3, 5, 7);
// B1: Tạo dữ liệu mảng
// B2: Tạo dữ liệu html
// B3: Duyệt mảng
// B4: Đổ dữ liệu
$list_users= array (
    1 => array(
        'id' => 1,
        'fullname' => 'Đào Văn Thư',
        'email' => 30
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Thừ Văn Đao',
        'email' => 20
    ),
);
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
?>

<html>
    <head>
        <title>
            Danh sách số nguyên tố
        </title>
    </head>
    <body>
        <h1>Danh sách số nguyên tố</h1>
        <?php
        if (!empty($list_users)) {
            ?>
        <table border="1"> 
            <thead>
                <tr>
                    <td width="20">Stt</td>
                    <td width="20">Id</td>
                    <td width="200">Họ và tên</td>
                    <td width="200">Email</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
            foreach ($list_users as $users) {
                show_array($users);
                $temp ++; ?>
                    <tr>
                        <td><?php echo $temp ?></td>
                        <td><?php echo $users['id'] ?></td>
                        <td><?php echo $users['fullname'] ?></td>
                        <td><?php echo $users['email'] ?></td>
                    </tr>
                    <?php
            } ?>
            </tbody>
        </table>
        <?php }else{
            ?>
                <p>Không tồn tại dữ liệu</p>
            <?php
        } ?>
    </body>
</html>
