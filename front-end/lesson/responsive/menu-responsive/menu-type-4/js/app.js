$(document).ready(function(){
	$("#icon-menu-responsive").click(function(){
		$('#site').toggleClass('open-respon-menu');
		$('#icon-menu-responsive').toggleClass('fa-navicon fa-times');
		return false;
	});
	$(window).resize(function(){
		if ($(document).width() >= 768) {
			$('#site').removeClass('open-respon-menu');
			$('#icon-menu-responsive').removeClass('fa-times').addClass('fa-navicon');
		}
	})
});
