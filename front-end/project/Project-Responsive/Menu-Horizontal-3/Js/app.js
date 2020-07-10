$(document).ready(function(){
	$("#icon-menu-respon").click(function(){
		$('#icon-menu-respon').toggleClass('fa fa-navicon fa fa-times');
		$('#site').toggleClass('open-menu-respon');
		return false;
	});
	$(".has-sub-menu").click(function(){
		$('#sub-menu').slideToggle();
		return false;
	});
	$(window).resize(function(){
		if ($(document).width() >768) {
			$('#icon-menu-respon').removeClass('fa-times').addClass('fa-navicon');
			$('#site').removeClass('open-menu-respon');
		}
	});
});