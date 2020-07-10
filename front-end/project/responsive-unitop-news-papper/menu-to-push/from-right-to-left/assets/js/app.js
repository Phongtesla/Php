$(document).ready(function(){
        // click vào icon-menu-respon thì hiện menu-respon
        $("#icon-menu-responsive").click(function(){
            $("#site").toggleClass('open-menu-respon');
        });
        // nếu width >850 thì ẩn menu respon
        $(window).resize(function(){    
            if($(this).width()>845){
                $('#respon-menu').css('display','none');
                $("#site").removeClass('open-menu-respon');
            }
        });
        // click vào body web thì ẩn menu-respon
        $("#wrapper").click(function(){
            $("#site").removeClass('open-menu-respon');
        });
        // khi scroll trình duyệt thì ẩn menu-respon đi
        $(window).scroll(function(){
            $("#site").removeClass('open-menu-respon');
        });
        // hiện nút back to top
        $(window).scroll(function(){
            if($(this).scrollTop()!=0){
                $('#back-to-top').stop().fadeIn(100);
            }
            else{
                $('#back-to-top').stop().fadeOut(100);
            }
        });
        // click vào nút back-to-top
        $("#back-to-top").click(function(){
            $("body, html").stop().animate({scrollTop : 0},500);
        });
});