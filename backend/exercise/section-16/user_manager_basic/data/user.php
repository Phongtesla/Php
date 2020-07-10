<?php
    #Mảng dữ liệu user
    // Thông tin user
        // Họ và tên: fullname
        // Tên đăng nhập: username 
        // Mật khẩu: password 
        // email: email 
        // id: id 
    $list_users = array(
        1 => array(
            'id' => 1,
            'fullname' => 'Nguyễn Doãn Phong',
            'username' => 'Phongahihi',
            'password' => md5('Aloalo1412'),
            'email' => 'batcuamaiban@gmail.com'
        ),
        2 => array(
            'id' => 2,
            'fullname' => 'Đào Văn Thư',
            'username' => 'Thuahihi',
            'password' => md5('LLLLL0'),
            'email' => 'thudao@gmail.com'
        ),
        3 => array(
            'id' => 3,
            'fullname' => 'Võ Văn Chiến',
            'username' => 'Chienahihi',
            'password' => md5('Aloalo1414'),
            'email' => 'chientanker@gmail.com'
        )
    );
