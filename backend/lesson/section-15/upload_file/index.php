<?php
    require 'lib/data.php';
    if (isset($_FILES['file'])) {
        show_array($_FILES);
    
        // Thư mục chứa file upload
        $upload_dir = 'uploads/';
        // Đường dẫn của file sau khi upload
        $upload_file = $upload_dir.$_FILES['file']['name'];

        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";
        } else {
            echo "Upload file không thành công";
        }
    }
?>

<html>
    <head>
        <title>Upload file lên server với php</title>
    </head>
    <body>
        <h1>Upload file</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            CHọn file: <br> <input type="file" name="file"> <br><br>
            <input type="submit" value="Upload File">
        </form>
    </body>
</html>