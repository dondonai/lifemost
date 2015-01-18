jQuery(document).ready(function($) {
	console.log('Spartan is ready!');
	$('.featured-content').prepend('<div class="close label"><i class="fa fa-times-circle"></i> close</div>');
	
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
		console.log(featured_height);
		$('.spacer').css('height', featured_height + 'px');
	};

	updated_offset = function() {
		var spacer = $('.spacer').offset();
		$('.content-description').css('top', spacer.top + 'px');
		$('html, body').animate({scrollTop: $('.content-description').offset().top - nav_height }, 'slow');
	};

	var orbit_height = $('.orbit-content').height();
	$('.orbit-content').css('margin-top', '-' + orbit_height + 'px');

	$(document).foundation();
	
	nav_height = $('.nav-primary').height();
	$('.nav-primary').css('top', '-' + nav_height + 5 + 'px');
	
	$(window).scroll( function() {
		window_scroll = $(document).scrollTop();
		site_header = $('.site-header .title-area').height();
		the_offset = $('.site-header .title-area').offset().top + site_header;
		nav_height = $('.nav-primary').height();
			console.log(site_header);
		if( window_scroll > the_offset ) {
			$('.orbit-content, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').fadeOut();
			$('.nav-primary').addClass('sticky-enabled');
			$('.nav-primary').css('top', '0');
		} else {
			$('.orbit-content, .orbit-container .orbit-prev, .orbit-container .orbit-next, .orbit-bullets').fadeIn();
			$('.nav-primary').css('top', '-' + nav_height + 5 + 'px');

		}
		
	});

	$('.menu-primary').prepend('<li class="menu-item title-area"><a href="#"></a></li>');

	var images = ['Solar-and-Renewable-Energy.jpg', 'Medical-Consumable.jpg', 'Medical-Consumable-1.jpg', 'Product-Sourcing-and-OEM.jpg'];
	$.backstretch(srh_custom.template_url + '/images/' + images[Math.floor(Math.random() * images.length)])

});