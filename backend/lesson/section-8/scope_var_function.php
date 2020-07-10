<?php 
$a = 4;
$b = 4;
function sum(){
    return $GLOBALS['a'] + $GLOBALS['b'];
}
echo sum();