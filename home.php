<?php

// Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'srh_custom_loop' );

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
				genesis_widget_area('renewable-energy', array(
					'before' => '<div class="renewable-energy widget-area">',
					'after' => '</div>'
				));
				genesis_widget_area('medical-consumables', array(
					'before' => '<div class="medical-consumables widget-area">',
					'after' => '</div>'
				));
				genesis_widget_area('product-sourcing', array(
					'before' => '<div class="product-sourcing widget-area">',
					'after' => '</div>'
				));
				genesis_widget_area('contact-us', array(
					'before' => '<div class="contact-us widget-area">',
					'after' => '</div>'
				));
				genesis_widget_area('customer-login', array(
					'before' => '<div class="customer-login widget-area">',
					'after' => '</div>'
				));	

				?>

			</div>
		</div>
	</div>
	<!-- <div class="content-here">
		<div class="p-content">
			<div class="p-content-wrapper">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ipsum dolore quam id repellat assumenda labore quidem sapiente. Consectetur aliquam tempora pariatur, ducimus necessitatibus commodi tempore quod quisquam similique ratione.	
			</div>
		</div>
	</div> -->
	<div class="featured-thumbnails row first-set">
		<div id="about-us" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/sports" alt="">
			<h4 class="p-caption">About us</h4>
		</div>
		<div id="renewable-energy" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/people" alt="">
			<h4 class="p-caption">Solar and Renewable Energy</h4>
		</div>
		<div id="medical-consumable" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/animals" alt="">
			<h4 class="p-caption">Medical Consumables</h4>
		</div>
	</div>
	<div class="featured-thumbnails row secont-set">
		<div id="product-sourcing" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/food" alt="">
			<h4 class="p-caption">Product Sourcing and OEM</h4>
		</div>
		<div id="contact-us" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/city" alt="">
			<h4 class="p-caption">Contact Us</h4>
		</div>
		<div id="customer-login" class="large-4 columns">
			<img src="http://lorempixel.com/305/150/nature" alt="">
			<h4 class="p-caption">Customer's Login</h4>
		</div>
	</div>

	<?php
}


genesis();