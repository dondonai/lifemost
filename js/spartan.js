jQuery(document).ready(function($) {
	console.log('Spartan is ready!');
	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');
	
// 	Closing time
	$('.close, .featured-thumbnails .columns').on('click', function() {
		$('.featured-content').fadeOut( 'fast' );
		$('.spacer').remove();

	});

	$('#about-us').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.about-us .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
		
	});
	$('#solar').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.solar .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});		
	});
	$('#medical').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.medical .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#sourcing').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.sourcing .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#contact').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.contact .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});	
	});
	$('#customer').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.customer .featured-content').fadeIn( 'fast', function() {
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

		$('html, body').animate({scrollTop: $('.content-description').offset().top }, 'slow');
	};

	$(document).foundation({
	  orbit: {
	    animation: 'fade',
	    timer_speed: 5000,
	    slide_number: false,
	    pause_on_hover: true,
	    animation_speed: 500,
	    navigation_arrows: true,
	    bullets: false
	  }
	});

});