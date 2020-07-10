$(document).ready(function(){
	$(".icon-menu-responsive").click(function(){
		$("#respon-menu").slideToggle(); //slideDown, slideUp.
		return false;
	});
	$(window).resize(function(){
		if ($(document).width() >= 768) {
			$("#respon-menu").css('display',"none");
		}
	});
		
});

  // $("#respon-menu").slideDown();
