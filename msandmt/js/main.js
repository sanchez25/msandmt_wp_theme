jQuery(document).ready(function ($) {
	$('.contact-btn').click(function() {
		$('.modal').fadeIn();
		return false;
	  });	

	$('.close-modal').click(function() {
		$(this).parents('.modal').fadeOut();
		return false;
	});

	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.modal').fadeOut();
		}
	});
	
	/*$('.modal').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});*/
});