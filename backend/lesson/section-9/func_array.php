<?php
    #array_key_exists
    // $search_array = array('first' => 1, 'second' => 4);
    // if (array_key_exists('first', $search_array)) {
    //     echo "The 'first' element is in the array";
    // }

        #array_merge
    // $array1 = array("color" => "red", 2, 4);
    // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    // $result = array_merge($array1, $array2);
    // print_r($result);

    #count
    // $array1= array(2,3,4,2,23,3);
    // echo count($array1);

    #in_array
    // $os = array("Mac", "NT", "Irix", "Linux");
    // if (in_array("Irix", $os)) {
    //     echo "Got Irix";
    // }
    // if (in_array("mac", $os)) {
    //     echo "Got mac";
    // }
    #is_array
    // $my_var = 1;
    // $ahihi = array(2,3,3);
    // echo is_array($ahihi);
    #array_values
    // $array = array("size" => "XL", "color" => "gold");
    // print_r(array_values($array));
    #array_search
    $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

    $key_1 = array_search('green', $array); // $key = 2;
    $key_2 = array_search('red', $array);   // $key = 1;
    echo $key_2;
?>