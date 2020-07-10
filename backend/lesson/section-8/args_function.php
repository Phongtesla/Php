<?php
                #Hàm có 1 tham số
function check_even($n){
    if ($n % 2 == 0) 
        echo "{$n} là số chẵn";
}
// check_even(7);
function show_array($data){
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
                #Hàm có nhiều tham số
function sum_multi_number(){
    // echo func_num_args();
    // $list_args = func_get_args();
    // $t = 0;
    // foreach ($list_args as $value){
    //     $t += $value;
    // }
    // show_array($list_args);
    // echo $t;
}
// sum_multi_number(5, 4,5,5, 8, 9);
$list_number = array(2, 4, 6);
function sum_multi_num($list_number){
    if (is_array($list_number)) {
        $t = 0;
        foreach($list_number as $value){
            $t += $value;
        }
        echo $t;
    }
}
// sum_multi_num($list_number);
    //Tạo thẻ input 
    // <input type = 'text' name = '' value = ''  id = '' class = '' />
    function creat_input_text($name, $value, $option = array()){
        $name = func_get_arg(0);
        $value = func_get_arg(1);
        $option = func_get_arg(2);
        if (!empty($option)) {
            $id = $option['id'];
            $class = $option['class'];
        }
        $input_tag = "<input type = 'text' name = '{$name}' value = '{$value}' id = '{$id}' class = '{$class}' />";
        echo $input_tag;
    }
    creat_input_text('username', '', $option = array('id' => 'username', 'class' => 'form_input'));
?>