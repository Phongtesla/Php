<?php
session_start();
    echo "Trang ch? <br>";
    print_r($_SESSION);
    // echo $is_login;
    if (!isset($_SESSION['is_login'])) {
        header("Location: login.php");
    }else{
        echo $_SESSION['user_login'];
    }

?>  
<br>
<a href="logout.php">??ng xu?t</a>