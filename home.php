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
									timer_speed: 5000;
									slide_number: false;
									pause_on_hover: false;
									resume_on_mouseout: false;
									animation_speed: 500;
									navigation_arrows: true;
									next_on_click: false;
									timer: true;
									bullets: true;">
		  <li class="slide-list">
		  	<div class="wrap row">
			    <div class="orbit-content large-12 column">
			    	<div class="row">
			    		<div class="large-12 column">
			    			<h4 class="entry-title">Solar and Renewable Energy</h4>
			    		</div>
			    	</div>
			    </div>		  		
		  	</div>
		    <div class="show-for-medium-up images slide-1"></div>
		    <div class="show-for-small-only images slide-1-medium">
		    	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/slide-1-medium.jpg" alt="slide 1" />
		    </div>
		    <!-- <div class="show-for-small-only images slide-1-small"></div> -->
		    <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy.jpg" alt="slide 1" /> -->
		  </li>

		  <li class="slide-list">
		  	<div class="wrap row">
			    <div class="orbit-content large-12 column">
			    	<div class="row">
			    		<div class="large-12 column">
			    			<h4 class="entry-title">Medical Consumable</h4>
			    		</div>
			    	</div>
			    </div>		  		
		  	</div>
		    <div class="show-for-medium-up images slide-2"></div>
		    <div class="show-for-small-only images slide-2-medium">
		    	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/slide-2-medium.jpg" alt="slide 2" />
		    </div>
		    <!-- <div class="show-for-small-only images slide-2-small"></div> -->
		    <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy.jpg" alt="slide 2" /> -->
		  </li>

		  <li class="slide-list">
		  	<div class="wrap row">
			    <div class="orbit-content large-12 column">
			    	<div class="row">
			    		<div class="large-12 column">
			    			<h4 class="entry-title">Product Sourcing and OEM</h4>
			    		</div>
			    	</div>
			    </div>		  		
		  	</div>
		    <div class="show-for-medium-up images slide-3"></div>
		    <div class="show-for-small-only images slide-3-medium">
		    	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/slide-3-medium.jpg" alt="slide 3" />
		    </div>
		    <!-- <div class="show-for-small-only images slide-3-small"></div> -->
		    <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy.jpg" alt="slide 3" /> -->
		  </li>
		  
		</ul>
	</div>

	<?php
}

function srh_custom_loop() {

?>

	<div class="content-description">
		<div class="p-content row">
			<div class="p-content-wrapper large-12 columns">
 			
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
		<div id="about-us" class="medium-4 columns">
			<!-- <div> -->
				<div class="thumbnail">
					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/About-Us.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2013/05/About-Us.jpg" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">About us</h4>
			<!-- </div> -->
		</div>
		<div id="solar" class="medium-4 columns">
				<div class="thumbnail">

					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Solar-and-Renewable-Energy-1.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2015/01/Solar-and-Renewable-Energy-1.jpg" alt="">
				</div>
			<h4 class="p-caption">Solar and Renewable Energy</h4>
		</div>
		<div id="medical" class="medium-4 columns">
				<div class="thumbnail">

					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Medical-Consumable-1.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2015/01/Medical-Consumable-1.jpg" alt="">
				</div>
			<h4 class="p-caption">Medical Consumable</h4>
		</div>
	</div>
	<!-- Set 2 -->
	<div class="featured-thumbnails row secont-set">
		<div id="sourcing" class="medium-4 columns">
			<!-- <div> -->
				<div class="thumbnail">

					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Product-Sourcing-and-OEM.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2015/01/Product-Sourcing-and-OEM.jpg" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">Product Sourcing and OEM</h4>
			<!-- </div> -->
		</div>
		<div id="contact" class="medium-4 columns">
				<div class="thumbnail">

					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/contact-us.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2015/01/contact-us.jpg" alt="">
				</div>
			<h4 class="p-caption">Contact Us</h4>
		</div>
		<div id="customer" class="medium-4 columns">
				<div class="thumbnail">

					<!-- Development -->
					<!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/customer-login.jpg" alt=""> -->

					<!-- Production -->
					<img src="http://lifemost.co/2014/wp-content/uploads/2015/01/customer-login.jpg" alt="">
				</div>
			<h4 class="p-caption">Customer's Login</h4>
		</div>
	</div>

	<?php
}


genesis();