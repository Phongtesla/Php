<?php
if (isset($_POST['btn_upload'])) {
    $error = array();
    # Validation title
    if (empty($_POST['post_title'])) {
        $error['post_title'] = 'Không được để trống tiêu đề';
    } else {
        $post_title = $_POST['post_title'];
    }
    # Validation post_desc
    if (empty($_POST['post_desc'])) {
        $error['post_desc'] = 'Không được để trống mô tả ngắn';
    } else {
        $post_desc = $_POST['post_desc'];
    }
    # Validation post_detail
    if (empty($_POST['post_detail'])) {
        $error['post_detail'] = 'Không được để trống chi tiết';
    } else {
        $post_detail = $_POST['post_detail'];
    }
    #Xử lý upload file ảnh
    if (!empty($_FILES['post_avt']['name'])) {
        // Thư mục chứa file upload
        $upload_dir = "uploads/";
        // Đường dẫn của file sau khi upload
        $upload_post_avt = $upload_dir . $_FILES['post_avt']['name'];
        $type_allow = array('jpg', 'jpeg', 'gif', 'png');
        $type_avt = pathinfo($_FILES['post_avt']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type_avt), $type_allow)) {
            $error['post_avt'] = "Chỉ hỗ trợ định dạng jpg, jpeg, png, gif";
        } else {
            # Kiểm tra size file (<20MB)
            $file_size = $_FILES['post_avt']['size'];
            if ($file_size > 2900000) {
                $error['post_avt'] = "Chỉ được upload file dưới 20MB";
            }
            # Kiểm tra trùng file
            if (file_exists($upload_post_avt)) {
                # tự động đổi tên file
                // Tạo tên mới
                $file_name = pathinfo($_FILES['post_avt']['name'], PATHINFO_FILENAME);
                $new_file_name = $file_name . " - Copy.";
                // Đường dẫn mới
                $new_upload_post_avt = $upload_dir . $new_file_name . $type_avt;
                #Tiếp tục đổi tên nếu vẫn trùng
                $k = 1;
                while (file_exists($upload_post_avt)) {
                    $new_file_name = $file_name . " - Copy({$k})";
                    $k++;
                    $new_upload_post_avt = $upload_dir . $new_file_name . $type_avt;
                }
                $upload_post_avt = $new_upload_post_avt;
                if (move_uploaded_file($_FILES['post_avt']['tmp_name'], $upload_post_avt)) {
                    $post_thumb = "<a href='{$upload_post_avt}'><img src='{$upload_post_avt}' alt=''></a>";

                } else {
                    echo "Không upload được ảnh";
                }
            }

        }

    }
    // Kết Luận
    if (empty($error)) {

        $post = array(
            'post_title' => $post_title,
            'post_desc' => $post_desc,
            'post_detail' => $post_detail,
            'post_thumb' => $post_thumb,
        );

    } else {

    }
}

?>





<!-- CONTENT -->
            <div id="content">

                <h1>Tin tức</h1>
                <div class="post-feature">
                    <a href="#" class="post-title">
                        <?php echo set_value('post_title'); ?>
                    </a>
                    <?php echo set_value('post_thumb'); ?>
                    <p class="text-justify">
                        <?php echo set_value('post_desc'); ?>
                    </p>
                    <p class="text-justify">
                        <?php echo set_value('post_detail'); ?>
                    </p>
                </div>
                <form enctype="multipart/form_data" method="POST">
                    <label for="post_title">
                        Nhập tiêu đề bài viết
                    </label><br>
                    <input type="text" name="post_title" id="post_title" ><br><br>
 <?php echo form_error('post_title'); ?>


                    <label for="post_desc">
                        Nhập mô tả ngắn
                    </label><br>
                    <input type="text" name="post_desc" id="post_desc"><br><br>
                    <?php echo form_error('post_desc'); ?>


                    <label for="post_detail">
                        Nhập chi tiết bài viết
                    </label><br>
                    <textarea name="post_detail" id="post_detail" class="ckeditor" cols="30" rows="10">
                    </textarea><br><br>
                    <?php echo form_error('post_detail'); ?>


                    <input type="file" name="post_avt" id="post_avt"><br><br>
 <?php echo form_error('post_thumb'); ?>



                    <input type="submit" name="btn_upload" value="Upload">
                </form>

            </div>
