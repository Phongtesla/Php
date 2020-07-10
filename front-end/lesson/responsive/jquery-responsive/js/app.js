$(document).ready(function(){
	$("#change_color").click(function(){
		$("h1").css('color', 'red');
		alert('Đã click');
		return false;
	})
})