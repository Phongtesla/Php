<?php
#mảng 1 chiều
$list_even= array(0 => 0, 1 => 2, 2 => 4, 3 => 6);
#mảng nhiều chiều
/*
    Id:
    Tên:
    Tuổi:
*/
$list_users= array (
    1 => array(
        'Id' => 1,
        'Tên' => 'Thư',
        'Tuổi' => 30
    ),
    2 => array(
        'Id' => 2,
        'Tên' => 'Phong',
        'Tuổi' => 30
    ),
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
?>