$(document).ready(function () {
    $(".num-order").change(function () {
        //Lấy id và số lượng của sản phẩm mà mình đang thao tác
        var id = $(this).attr('data-id');
        var new_qty = $(this).val();
        // alert(new_qty);
        data = { id: id, new_qty: new_qty };
        $.ajax({
            url: "?mod=cart&act=update_ajax",
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                $(".sub-total-" + id).text(data.sub_total);
                $("#total-price span").text(data.total);
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr, status);
                alert(thrownError);
            }

        })
    })
})