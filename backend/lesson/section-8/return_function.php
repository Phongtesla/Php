<?php   
    # Hàm trả dữ liệu trong nội bộ hàm
    function show_array($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    // function sum($a, $b){
    //     $t = $a + $b;
    //     echo $t; // $t này h phế vật ko có tác dụng
    // }
    // sum(5, 5);
    # Hàm trả dữ liệu thông qua return
    function sum($a, $b){
        $t = $a + $b;
        echo $t; // $t này h phế vật ko có tác dụng
    }
    $t = sum(3, 4);
    echo $t;
?>