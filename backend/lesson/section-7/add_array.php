<?php   
#Thêm phần tử mảng key xác định
    $info = array('id' => 1,
        'username' => 'Thư topzom',
        'email' => 
        'ahihi@gmail.com'
    );
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    $info['phone']= '0358114726';
    echo "<pre>";
    print_r($info);
    echo "</pre>";
#Thêm phần tử mảng key mặc định
    $list_odd = array(1, 3, 5, 7);
    echo "<pre>";
    print_r($list_odd);
    echo "</pre>";
    $list_odd[]= '11';
    echo "<pre>";
    print_r($list_odd);
    echo "</pre>";
?>