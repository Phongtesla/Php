<?php
    # Xuất một mảng số nguyên chẵn từ mảng số nguyên cho trc
    $list_number = array(1,2,3,4,5,6,6,7,8);
    $list_even = array();
    if (is_array($list_number) && !empty($list_number)) {
        foreach ($list_number as  $num){
            if ($num % 2 == 0) {
                $list_even[] = $num;
            }
        }
        print_r($list_even);
    }
?>