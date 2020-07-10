<?php
$a=10;
#if...else 1 2 3 4 5 6 7 8 9 10
// if($a <4){
//     echo 'F';
// }elseif($a < 5){
//     echo 'E';
// }elseif($a < 7){
//     echo 'D';
// }elseif($a < 9){
//     echo 'C';
// }else{
//     echo 'A';
// }
# if lồng nhau
$point=789;
if (($point >= 1) && ($point<=10)){
    if($point <4){
        echo 'F';
    }elseif($point < 5){
         echo 'E';
    }elseif($point < 7){
        echo 'D';
    }elseif($point < 9){
        echo 'C';
    }else{
        echo 'A';
    }
}else{
    echo 'Bạn là 1 người thích đùa giỡn';
}