<?php
if(isset($_POST['btn_add'])){
    echo $_POST['post_content'];
}
?>

<html>
    <head>
        <title>Tích hợp trình soạn thào bài viết trên website</title>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <div id="content" style="width: 960px;margin: 0px auto">
        <h1>Tích hơp CKEditor trên website</h1>
        <form method="post">
            <textarea class="ckeditor" name="post_content"></textarea>
            <input type="submit" name="btn_add" value="Thêm dữ liệu">
        </form>
    </div>
</html>
