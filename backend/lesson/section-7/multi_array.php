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
echo "<pre>";
print_r($list_users);
echo "</pre>";
//Thêm phần tử
// c1 thường dùng:
$list_users[3] = array(
    'id' => 3,
    'tên' => 'Tesla',
    'tuổi' => 20
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
// c2 ít dùng:
$list_users[3]['id']="3";
$list_users[3]['tên']="Tesla";
$list_users[3]['tuổi']="19";
echo "<pre>";
print_r($list_users);
echo "</pre>";
        // Lấy phần tử trong mảng
// c1:
$info=$list_users[3];
print_r($info);
echo "<br>";
// c2:
print_r($list_users[3]['id']); // hoặc print_r($info['id']);
?>