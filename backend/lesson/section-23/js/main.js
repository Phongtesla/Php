$(document).ready(function () {
    $("#num_order").change(function () {
        var price = $("#price").text();
        var num_order = $("#num_order").val();
        var data = { num_order: num_order, price: price };
        // console.log(data);
        $.ajax({
            url: 'process.php', //Trang xử lý, mặc định trang hiện tại
            method: 'POST', // Phương thức POST hoặc GET, mặc định GET
            data: data, // dữ liệu truyền lên server
            dataType: 'json', //html , text, json, ...
            success: function (data) {
                console.log(data);
                $("#total").html("<strong>" + data.total + "</strong>");

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr, status);
                alert(thrownError);
            }
        })
    })
})
