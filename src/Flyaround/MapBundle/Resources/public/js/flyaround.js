$(document).ready(function(){
	$('.contenu').hide();
	$('.vue').mouseenter(function(){
		$('.contenu', this).fadeTo('slow', 1);
		$(this).mouseleave(function(){
			$('.contenu').hide();
		});
	});
});