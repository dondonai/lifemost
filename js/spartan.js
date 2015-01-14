jQuery(document).ready(function($) {
	console.log('Spartan is ready!');
	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');
// 	About Us
	$('.about').on('click', function() {
		$('.featured-content').fadeOut();
		$("#featured-page-6").fadeIn();
		$('html, body').animate({scrollTop: $('#featured-page-6').offset().top });
	});
// 	Renewable Energy
	$('.renewable').on('click', function() {
		$('.featured-content').fadeOut();
		$("#featured-page-3").fadeIn();
		$('html, body').animate({scrollTop: $('#featured-page-3').offset().top });
	});
// 	Medical Consumables
	$('.medical').on('click', function() {
		$('.featured-content').fadeOut();
		$("#featured-page-4").fadeIn();
		$('html, body').animate({scrollTop: $('#featured-page-3').offset().top });
	});
// 	Product Sourcing and OEM
	$('.oem').on('click', function() {
		$('.featured-content').fadeOut();
		$("#featured-page-5").fadeIn();
		$('html, body').animate({scrollTop: $('#featured-page-3').offset().top });
	});
	$('.close').on('click', function() {
		$('.featured-content').fadeOut();
	});
});