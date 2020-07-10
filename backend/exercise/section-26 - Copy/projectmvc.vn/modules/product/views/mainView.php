<?php
get_header();
?>


<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $cat_info['cat_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($list_products as $product) {
                        ?>
                            <li>
                                <a href="product/chi-tiet-san-pham-<?php echo $product['product_id'] ?>.html" title="" class="thumb">
                                    <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                </a>
                                <a href="product/chi-tiet-san-pham-<?php echo $product['product_id'] ?>.html" title="" class="title"><?php echo $product['product_title'] ?></a>
                                <p class="price"><?php echo currency_format($product['product_price'], 'VNĐ');  ?></p>
                            </li>
                        <?php
                        } ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>