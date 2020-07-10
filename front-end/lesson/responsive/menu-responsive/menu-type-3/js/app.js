$(document).ready(function(){
	$(".icon-menu-responsive").click(function(){
		$('#site').toggleClass('open-respon-menu');
		return false;
	});
	$(window).resize(function(){
		if ($(document).width() >= 768) {
			
		}
	})
});
