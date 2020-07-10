<?php
#strlen
    // $str = 'abcdef';
    // echo strlen($str); // 6
#uc_first
    // $str = "dao thu";
    // echo ucfirst($str);
#ucwords
    // $str = "dao thu";
    // echo ucwords($str);
#trim
    // $fullname = "Dao van thu   ";
    // echo trim($fullname);
#str_repeat
    // echo str_repeat("hi",3);
#md5
    // echo md5("ahihi");
#join
    // $list_id = array(2, 3, 5, 7);
    // echo join(',', $list_id);
#implode
    // $list_id = array(2, 3, 5, 7);
    // echo implode(',', $list_id);
#explode
    // $pizza = "pieces1 pieces2 pieces3 pieces4 pieces5";
    // $pieces = explode(' ', $pizza);
    // echo $pieces[3]."<br>";
    // print_r ($pieces);
#htmlspecialchars
    $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>