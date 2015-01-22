$(document).ready(function(){
	$(".vue").mouseenter(function(){
		$(this).addClass("effet");
	});
	$(".vue").mouseleave(function(){
		$(this).removeClass("effet");
	});
});