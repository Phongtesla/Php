<?php
$list_users= array (
    1 => array(
        'id' => 1,
        'tên' => 'Thư',
        'tuổi' => 30
    ),
    2 => array(
        'id' => 2,
        'tên' => 'Phong',
        'tuổi' => 30
    ),
);
$info= array (
    'id' => 1,
    'tên' => 'Thư',
    'tuổi' => 30
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
//Xóa phần tử trong mảng
unset($list_users[2]);
echo "<pre>";
print_r($list_users);
echo "</pre>";
                //Xóa cả mảng
echo "<pre>";
print_r($info);
echo "</pre>";
//Thực hiện xóa
unset($info);
echo "<pre>";
print_r($info);
echo "</pre>";
?>
