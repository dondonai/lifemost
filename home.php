<?php

// Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'srh_custom_loop' );

function srh_custom_loop() {

	// Home featured 1
	?>
	<div class="featured-thumbnails row">
		<section class="about large-4 columns">
			<div class="thumbnail">
				<div class="thumb"></div>
			</div>

			<h4 class="header-caption">About Us</h4>
		<div class="description">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corrupti accusamus itaque omnis. Ipsam perferendis ducimus provident dolorum sunt minima nesciunt facilis eaque accusantium, mollitia voluptas voluptatem sapiente impedit vel!
		</div>
		</section>
		<section class="renewable large-4 columns">
			<div class="thumbnail">
				<div class="thumb"></div>
			</div>
			<h4 class="header-caption">Solar and Renewable Energy</h4>
		<div class="description">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corrupti accusamus itaque omnis. Ipsam perferendis ducimus provident dolorum sunt minima nesciunt facilis eaque accusantium, mollitia voluptas voluptatem sapiente impedit vel!
		</div>
		</section>
		<section class="medical large-4 columns">
			<div class="thumbnail">
				<div class="thumb"></div>
			</div>

			<h4 class="header-caption">Medical Consumables</h4>
			<div class="description">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet corrupti accusamus itaque omnis. Ipsam perferendis ducimus provident dolorum sunt minima nesciunt facilis eaque accusantium, mollitia voluptas voluptatem sapiente impedit vel!
		</div>
		</section>
	</div>

	<?php

	genesis_widget_area('home-featured-1', array(
		'before' => '<div class="home-featured-1 widget-area">',
		'after' => '</div>'
	));

	// Home featured 1
	?>
	<div class="featured-thumbnails row">
		<section class="oem large-4 columns">
			<div class="thumbnail">
				<div class="thumb"></div>
			</div>
			<h4 class="header-caption">Product Sourcing and OEM</h4>
		</section>
	</div>

	<?php

	genesis_widget_area('home-featured-2', array(
		'before' => '<div class="home-featured-2 widget-area">',
		'after' => '</div>'
	));
}


genesis();