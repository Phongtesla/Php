<?php
get_header();
?>




<!-- CONTENT -->
<div id="content">
    <h1>Trang chủ</h1>
    <?php
    show_array($_SESSION);
    show_array($_COOKIE);
    ?>
</div>
<?php
get_footer();
?>