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
    //sau khi cập nhật
    $info['id']= '87';
    echo "<pre>";
    print_r($info);
    echo "</pre>";
?>