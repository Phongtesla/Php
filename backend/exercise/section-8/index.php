<?php
                #Bài 1: Kiểm tra số chẵn
    // function check_even($n){
    //     if ($n % 2 == 0)
    //         return true;
    //     return false;
    // }
    // if (check_even(5)) {
    //     echo "Đây là số chẵn";
    // }else{
    //     echo "Đây là số lẻ";
    // }
                #Bài 2: Tính tổng số nguyên tố từ 2 - n
    //xây dựng hàm check prime
    function check_prime($n){
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    // xây dựng hàm tính tổng
    function total_prime($n){
        $t = 0;
        for ($i=2; $i < $n; $i++) { 
            if (check_prime($i)) {
                $t += $i;
            }
        }
        return $t;
    }
    echo total_prime(1);
                # Bài 3: Lấy thông tin bài viết theo id trong mảng
    $list_post = array(
        1 => array(
            'post_id' => 1,
            'post_title' => 'Bài viết 1',
            'post_content' => 'Bài viết chi tiết 1',
            'post_desc' => 'Mô tả ngắn 1',
            'cat_id' => 1
        ),
        2 => array(
            'post_id' => 2,
            'post_title' => 'Bài viết 2',
            'post_content' => 'Bài viết chi tiết 2',
            'post_desc' => 'Mô tả ngắn 2',
            'cat_id' => 2
        )
    );
    function get_post_by_id($id){
        global $list_post;
        // c1:
        foreach ($list_post as $key => $item){
            if ($key == $id) {
                return $list_post[$id];
            }
        }
        return false;
    }
    $item = get_post_by_id(2);
    echo "<pre>";
    print_r($item);
    echo "</pre>";
