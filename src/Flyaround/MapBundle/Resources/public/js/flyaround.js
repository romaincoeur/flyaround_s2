$(document).ready(function(){
	$('.contenu').hide();
	$('.vue').mouseenter(function(){
		$('.contenu', this).fadeTo('slow', 1);
		$(this).mouseleave(function(){
			$('.contenu').hide();
		});
	});
	$('.slider').click(function(){
		$(this).hide(function(){
			$(this).add("<img class='img-slider' src=\"{{ asset('bundles/flyaroundmap/img/icone-53.png') }}\" ");
		});
	});
});