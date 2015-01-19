<?php

// Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'srh_custom_loop' );
add_action( 'genesis_after_header', 'srh_slider' );

function srh_slider() {
	?>
	<!-- <img src="http://lorempixel.com/1024/768/sports" alt=""> -->
	<div class="header-gradient"></div>
	<div class="home-intro">
		<div class="wrap">
			<h1 class="entry-title">LifeMost International Company Limited</h1>
			Choosing the right professionals for your project is important. Lifemost International Company Limited helps our clients establish and maintain a strong business foundation according to their career goals and business needs. We assist businesses and professionals in any industry achieve their maximum potential while guiding them and protecting them along the way. We are deeply committed to establishing a long-term, professional relationship with you looking not just to your current needs, but helping you plan, build and protect your future.
		</div>
	</div>

	<div class="home-slider">
		<ul id="fndtn-orbit" data-orbit 
		data-options="animation: slide;
									timer_speed: 10000;
									slide_number: false;
									pause_on_hover: false;
									animation_speed: 500;
									navigation_arrows: true;
									next_on_click: false;
									timer: false;
									bullets: true;">
		  <li class="slide-list">
		    <div class="orbit-content">
		    	<div class="row">
		    		<div class="large-6 columns">
		    			<h4 class="entry-title">Solar and Reusable Energy</h4>
		    		</div>
		    	</div>
		    </div>
		    <div class="images slide-1"></div>
		    <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy.jpg" alt="slide 1" /> -->
		  </li>
		  <li class="slide-list">
		    <div class="orbit-content">
		    	<div class="row">
		    		<div>
		    			<h4 class="entry-title">Medical Consumable</h4>
		    		</div>
		    	</div>
		    </div>
		    <div class="images slide-2"></div>
		    <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Medical-Consumable.jpg" alt="slide 2" /> -->

		  </li>
		  <li class="slide-list">
		    <div class="orbit-content">
		    	<div class="row">
		    		<div>
		    			<h4 class="entry-title">Product Sourcing and OEM</h4>
		    		</div>
		    	</div>
		    </div>
		    <div class="images slide-3"></div>
		    <!-- // <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Product-Sourcing-and-OEM.jpg" alt="slide 3" /> -->

		  </li>
		</ul>
	</div>

	<?php
}

function srh_custom_loop() {

?>

	<div class="content-description">
		<div class="p-content">
			<div class="p-content-wrapper">
 			
				<?php

				genesis_widget_area('about-us', array(
					'before' => '<div class="about-us widget-area">',
					'after' => '</div>'
				));

				genesis_widget_area('solar', array(
					'before' => '<div class="solar widget-area">',
					'after' => '</div>'
				));

				genesis_widget_area('medical', array(
					'before' => '<div class="medical widget-area">',
					'after' => '</div>'
				));

				genesis_widget_area('sourcing', array(
					'before' => '<div class="sourcing widget-area">',
					'after' => '</div>'
				));

				genesis_widget_area('contact', array(
					'before' => '<div class="contact widget-area">',
					'after' => '</div>'
				));

				genesis_widget_area('customer', array(
					'before' => '<div class="customer widget-area">',
					'after' => '</div>'
				));

				?>

			</div>
		</div>
	</div>

	<!-- Set 1 -->
	<div class="featured-thumbnails row first-set">
		<div id="about-us" class="large-4 columns">
			<!-- <div> -->
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/About-Us.jpg" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">About us</h4>
			<!-- </div> -->
		</div>
		<div id="solar" class="large-4 columns">
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy.jpg" alt="">
				</div>
			<h4 class="p-caption">Solar and Reusable Energy</h4>
		</div>
		<div id="medical" class="large-4 columns">
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Medical-Consumable.jpg" alt="">
				</div>
			<h4 class="p-caption">Medical Consumable</h4>
		</div>
	</div>
	<!-- Set 2 -->
	<div class="featured-thumbnails row secont-set">
		<div id="sourcing" class="large-4 columns">
			<!-- <div> -->
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Product-Sourcing-and-OEM.jpg" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">Product Sourcing and OEM</h4>
			<!-- </div> -->
		</div>
		<div id="contact" class="large-4 columns">
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/contact-us.jpg" alt="">
				</div>
			<h4 class="p-caption">Contact Us</h4>
		</div>
		<div id="customer" class="large-4 columns">
				<div class="thumbnail">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/customer-login.jpg" alt="">
				</div>
			<h4 class="p-caption">Customer's Login</h4>
		</div>
	</div>

	<?php
}


genesis();