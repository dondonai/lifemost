jQuery(document).ready(function($) {
	
	var images = ['Solar-and-Renewable-Energy.jpg', 'Medical-Consumable.jpg', 'Medical-Consumable-1.jpg', 'Product-Sourcing-and-OEM.jpg'];
	var doc_height = $(document).height();
	$.backstretch(srh_custom.template_url + '/images/' + images[Math.floor(Math.random() * images.length)]);
	$('.images').height(doc_height); // fix for height issue
	$('.slide-1').backstretch(srh_custom.template_url + '/images/Solar-and-Renewable-Energy.jpg');
	$('.slide-2').backstretch(srh_custom.template_url + '/images/Medical-Consumable.jpg');
	$('.slide-3').backstretch(srh_custom.template_url + '/images/Product-Sourcing-and-OEM.jpg');
	
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
		$('.spacer, .current-column-arrow').remove();
	});

	// About us
	$('#about-us').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.about-us .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	// Solar and Renewable Energy
	$('#solar').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.solar .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	// Medical Consumable
	$('#medical').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.medical .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	// Product Sourcing and OEM
	$('#sourcing').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.sourcing .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	// Contact Us
	$('#contact').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.contact .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	// Customer's Login
	$('#customer').on('click', function(nanay, target) {
		var nanay = $(this);
		$(this).find('.p-caption').after('<div class="spacer"></div>');
		$('.customer .featured-content').fadeIn( 'fast', function() {
			var target = $(this);
			updated_height(target);
			updated_offset(nanay);
		});
	});

	updated_height = function(target) {
		featured_height = $(target).height();
		$('.spacer').css('height', featured_height + 'px');
		$('.spacer').before('<div class="current-column-arrow"></div>');
	};
	updated_offset = function(nanay) {
		console.log(nanay);
		var spacer = $('.spacer').offset();
		$('.content-description').css('top', spacer.top + 5 + 'px');
		$('html, body').animate({scrollTop: $(nanay).offset().top - nav_height }, 100 );
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