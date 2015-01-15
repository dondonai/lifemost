<?php

// Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'srh_custom_loop' );
add_action( 'genesis_after_header', 'srh_slider', 1 );

function srh_slider() {
	?>

<!-- 	<div class="home-slider">
		<ul class="fndtn-orbit" data-orbit>
		  <li>
		    <img src="http://lorempixel.com/1024/768/people" alt="slide 1" />
		    <div class="orbit-caption">
		      Caption One.
		    </div>
		  </li>
		  <li class="active">
		    <img src="http://lorempixel.com/1024/768/sports" alt="slide 2" />
		    <div class="orbit-caption">
		      Caption Two.
		    </div>
		  </li>
		  <li>
		    <img src="http://lorempixel.com/1024/768/food" alt="slide 3" />
		    <div class="orbit-caption">
		      Caption Three.
		    </div>
		  </li>
		</ul>
	</div> -->

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
					<img src="http://lorempixel.com/305/150/sports" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">About us</h4>
			<!-- </div> -->
		</div>
		<div id="solar" class="large-4 columns">
				<div class="thumbnail">
					<img src="http://lorempixel.com/305/150/people" alt="">
				</div>
			<h4 class="p-caption">Solar and Reusable Energy</h4>
		</div>
		<div id="medical" class="large-4 columns">
				<div class="thumbnail">
					<img src="http://lorempixel.com/305/150/technics" alt="">
				</div>
			<h4 class="p-caption">Solar and Reusable Energy</h4>
		</div>
	</div>
	<!-- Set 2 -->
	<div class="featured-thumbnails row secont-set">
		<div id="sourcing" class="large-4 columns">
			<!-- <div> -->
				<div class="thumbnail">
					<img src="http://lorempixel.com/305/150/food" alt="">
				</div>
				<!-- <img src="http://lorempixel.com/305/150/sports" alt=""> -->
				<h4 class="p-caption">Product Sourcing and OEM</h4>
			<!-- </div> -->
		</div>
		<div id="contact" class="large-4 columns">
				<div class="thumbnail">
					<img src="http://lorempixel.com/305/150/business" alt="">
				</div>
			<h4 class="p-caption">Contact Us</h4>
		</div>
		<div id="customer" class="large-4 columns">
				<div class="thumbnail">
					<img src="http://lorempixel.com/305/150/transport" alt="">
				</div>
			<h4 class="p-caption">Customer's Login</h4>
		</div>
	</div>

	<?php
}


genesis();