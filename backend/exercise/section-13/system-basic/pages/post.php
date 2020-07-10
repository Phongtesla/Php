<!-- CONTENT -->
<div id="content">
    <h1>Tin tức</h1>
    <?php
    if (!empty($list_post)) {
    ?>
        <ul class="list_post">
            <?php
            foreach ($list_post as $item) {
            ?>
                <li>
                    <a href=""><?php echo $item['post-title']; ?></a>
                    <p><?php echo $item['post-desc']; ?></p>

                </li>
            <?php
            }
            ?>
        </ul>
    <?php
    }
    ?>
</div>