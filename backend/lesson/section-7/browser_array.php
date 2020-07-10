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
    #in ra các phần tử trong mảng
    // foreach($list_users as $item){
    //     echo "<pre>";
    //     print_r($item);
    //     echo "</pre>";
    // }
    #in ra các phần tử của phần tử trong mảng
    foreach($list_users as $item){
        echo $item['id']."<br>";
        echo $item['tên']."<br>";
        echo $item['tuổi']."<br>";
        echo "--------------------<br>";
    }







    // $list_odd=array(1,3,5,7);
    // $t=0;
    // foreach($list_odd as $key => $item){
    //     echo "{$key} => ".$item."<br>";
    //     $t+=$item;
    // }
    // echo $t;
?>