$(document).ready(function(){
	$("#icon-menu-respon").click(function(){
		$('#menu-respon').slideToggle();
		$('#icon-menu-respon').toggleClass('fa fa-navicon fa fa-times');
	});
	$(".has-sub-menu").click(function(){
		$('#sub-menu').slideToggle();
		return false;
	});
	$(window).resize(function(){
		if ($(document).width() >768) {
			$('#menu-respon').css('display',"none");
		}
	});
});