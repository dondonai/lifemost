jQuery(document).ready(function($) {
	console.log('Spartan is ready!');
	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');
	
// 	Closing time
	$('.close, .featured-thumbnails .columns').on('click', function() {
		$('.featured-content').fadeOut();
		$('.spacer').remove();

	});

	$('#about-us').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.about-us .featured-content').fadeIn( function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
		
	});
	$('#renewable-energy').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.renewable-energy .featured-content').fadeIn(function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});		
	});
	$('#medical-consumables').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.medical-consumables .featured-content').fadeIn(function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#product-sourcing').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.product-sourcing .featured-content').fadeIn( function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#contact-us').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.contact-us .featured-content').fadeIn( function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#customer-login').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.customer-login .featured-content').fadeIn( function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	var updated_height = function(target) {
		featured_height = $(target).height();
		console.log(featured_height);
		$('.spacer').css('height', featured_height + 'px');
	},
	updated_offset = function() {
		var spacer = $('.spacer').offset();
		$('.content-description').css('top', spacer.top + 'px');
	};

	
});