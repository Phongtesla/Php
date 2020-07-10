$(document).ready(function () {
    $(".num-order").change(function () {
        // Lấy  id và số lượng của sản phẩm mà ta đang thao tác
        var id = $(this).attr('data-id');
        var new_qty = $(this).val();
        data = { id: id, new_qty: new_qty };
        $.ajax({
            url: "?mod=cart&controller=index&action=update_ajax",
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                $("#num").text(data.num_order);
                $(".sub-total-price-" + id).text(data.sub_total_price);
                $("#total-price span").text(data.total_price);

                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr, status);
                alert(thrownError);
            }

        })
    })
})