<?php
get_header();
?>


<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php if (!empty($list_products)) {
        ?>
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <form method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_products as $product) {
                                ?>
                                    <tr>
                                        <td><?php echo $product['product_code'] ?></td>
                                        <td>
                                            <a href="?mod=product&controller=index&action=detail&id=<?php echo $product['product_id'] ?>" title="" class="thumb">
                                                <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?mod=product&controller=index&action=detail&id=<?php echo $product['product_id'] ?>" title="" class="name-product"><?php echo $product['product_title'] ?></a>
                                        </td>
                                        <td><?php echo currency_format($product['product_price'], 'VNĐ');  ?></td>
                                        <td>
                                            <input type="number" data-id="<?php echo $product['product_id']  ?>" name="num-order" min="1" value="<?php echo $product['product_qty'] ?>" class="num-order">
                                        </td>
                                        <td class="sub-total-price-<?php echo $product['product_id'];  ?>"><?php echo currency_format($product['sub_total_price'], 'VNĐ');  ?></td>
                                        <td>
                                            <a href="?mod=cart&controller=index&action=delete&id=<?php echo $product['product_id'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format($total_price, 'VNĐ');  ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                                <a href="?mod=cart&controller=index&action=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>

                </div>
            </div>
        <?php
        } else {
        ?>
            <p>Không có sản phẩm nào trong giỏ</p>
        <?php
        } ?>

        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                <a href="?mod=cart&controller=index&action=delete" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>