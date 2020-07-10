<?php
#Bài 1: Tạo mảng các số lẻ từ 3 - 150
    $list_odd = array();
    for ($i = 3; $i <= 150; $i+=2){
        $list_odd[] = $i;
    }
    // echo "<pre>";
    // print_r($list_odd);
    // echo "</pre>";
#Bài 2: Tạo mảng lưu trữ danh sách bài viết
    $list_post_cat = array(
        1 => array(
            'cat_id' => 1,
            'cat_title' => 'Xã hội'
        ),
        2 => array(
            'cat_id' => 2,
            'cat_title' => 'Thể thao'
        )
    );
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
    echo "<pre>";
    print_r($list_post_cat);
    echo "</pre>";
    echo "<pre>";
    print_r($list_post);
    echo "</pre>";
?>
<html>
    <head>
        <title>Danh sách bài viết</title>
    </head>
</html>
<body>
    <div>
        <h1>Danh sách bài viết</h1>
        <ul>
            <?php   
            if (!empty($list_post)) {
                foreach($list_post as $item){
                    ?>
                    <li>
                        <a href=""><?php echo $item['post_title'] ?></a>
                        <p><?php echo $item['post_desc'] ?></p>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</body>