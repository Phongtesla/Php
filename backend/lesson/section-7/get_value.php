<?php  
#Lấy value key mặc định
$list_odd=array(1,3,5);
echo $list_odd[1];
#Lấy value key xác định
    $info = array(
        'id' => 1,
        'username' => 'Thư topzom',
        'email' => 'ahihi@gmail.com'
    );
?>
<html>
    <head>
        <title>Lấy dữ liệu trong mảng</title>
    </head>
</html>
<body>
    <p>Id: <strong><?php echo $info['id'] ?></strong></p>
    <p>Họ và tên: <strong><?php echo $info['username'] ?></strong></p>
    <p>Email: <strong><?php echo $info['email'] ?></strong></p>
</body>