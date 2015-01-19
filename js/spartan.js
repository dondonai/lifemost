jQuery(document).ready(function($) {
	
	$(document).foundation();

	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');

	// Added the logo beside the home link
	var home_url = $('.menu-item-home a').attr('href');
	$('.menu-primary').prepend('<li class="menu-item title-area"><a href="'+ home_url +'"></a></li>');
	
	// Closing time
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

	// var orbit_height = $('.orbit-content').height();
	// $('.orbit-content').css('margin-top', '-' + orbit_height + 'px');
	
	// nav_height = $('.nav-primary').height();
	// $('.nav-primary').css('top', '-' + nav_height + 5 + 'px');
	
	$(window).scroll( function() {
		window_scroll = $(this).scrollTop();
		var site_header = $('.site-header .title-area').height();
		var the_offset = $('.site-header .title-area').offset().top + site_header;
		nav_height = $('.nav-primary').height();

		if( window_scroll > site_header ) {
			// $('.orbit-content, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').fadeOut();
			// $('.nav-primary').addClass('sticky-enabled');
			// $('.nav-primary').css('top', '0');
			animate_menu_in();
			// $('.home-slider').css( { '-webkit-filter': 'blur(10px)', '-o-filter': 'blur(10px)', 'filter': 'blur(10px)'} );
		} else {
			// $('.orbit-content, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').fadeIn();
			// $('.nav-primary').css('top', '-' + nav_height + 5 + 'px');
			animate_menu_out();
			// $('.home-slider').css( { '-webkit-filter': 'blur(0)', '-o-filter': 'blur(0)', 'filter': 'blur(0)'} );
		}
		
	});

	animate_menu_in = function() {
		$('.nav-primary').animate({
			top: 0,
			opacity: 1
		}, 500);
	}

	animate_menu_out = function() {
		$('.nav-primary').animate({
			top: '-' + nav_height + 'px',
			opacity: 0
		}, 500);
	}



	var images = ['Solar-and-Renewable-Energy.jpg', 'Medical-Consumable.jpg', 'Medical-Consumable-1.jpg', 'Product-Sourcing-and-OEM.jpg'];
	$.backstretch(srh_custom.template_url + '/images/' + images[Math.floor(Math.random() * images.length)]);

});