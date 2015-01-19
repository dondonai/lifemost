jQuery(document).ready(function($) {
	
	var images = ['Solar-and-Renewable-Energy.jpg', 'Medical-Consumable.jpg', 'Medical-Consumable-1.jpg', 'Product-Sourcing-and-OEM.jpg'];
	$.backstretch(srh_custom.template_url + '/images/' + images[Math.floor(Math.random() * images.length)]);
	
	$(document).foundation(); // activate foundation-orbit

	var site_header = $('.site-header .title-area').height();
	var nav_height = $('.nav-primary').height();

	$(window).scroll( function() {
		
		window_scroll = $(this).scrollTop();
		blur_effect = window_scroll / 100;
		$('#fndtn-orbit li img').css( { '-webkit-filter': 'blur('+ blur_effect +'px)', '-o-filter': 'blur('+ blur_effect +'px)', 'filter': 'blur('+ blur_effect +'px)'} );

		if( window_scroll > site_header ) {
			$('.orbit-content .columns, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').css('opacity', '0');
			animate_menu_in();
		} else {
			$('.orbit-content .columns, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').css('opacity', '1');
			animate_menu_out();
		}
		
	});

	// Added the logo beside the home link
	var home_url = $('.menu-item-home a').attr('href');
	$('.menu-primary').prepend('<li class="menu-item title-area"><a href="'+ home_url +'"></a></li>');
	
	// Closing time
	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');
	$('.close, .featured-thumbnails .columns').on('click', function() {
		$('.featured-content').fadeOut( 'fast' );
		$('.spacer').remove();
	});

	// About us
	$('#about-us').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.about-us .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	// Solar and Renewable Energy
	$('#solar').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.solar .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	// Medical Consumable
	$('#medical').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.medical .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	// Product Sourcing and OEM
	$('#sourcing').on('click', function(target) {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.sourcing .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	// Contact Us
	$('#contact').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.contact .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	// Customer's Login
	$('#customer').on('click', function() {
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.customer .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset();
		});
	});

	updated_height = function(target) {
		featured_height = $(target).height();
		$('.spacer').css('height', featured_height + 'px');
	};
	updated_offset = function() {
		var spacer = $('.spacer').offset();
		$('.content-description').css('top', spacer.top + 'px');
		$('html, body').animate({scrollTop: $('.content-description').offset().top - nav_height }, 100 );
	};
	animate_menu_in = function() {
		$('.nav-primary').animate({
				top: 0,
				opacity: 1
			}, 100);
	};
	animate_menu_out = function() {
		$('.nav-primary').animate({
				top: '-' + nav_height + 'px',
				opacity: 0
			}, 1);
	};

	return animate_menu_out();

});