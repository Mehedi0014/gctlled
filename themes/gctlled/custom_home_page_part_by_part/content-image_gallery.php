<?php
	/* ===========================================================================
	Solutions er sokol page er id er variable
	===========================================================================
 */
    $Education = 503;
    $Restaurants = 511;
    $Healthcare = 517;
    $Hotels = 524;
    $Lobbies = 529;
    $Retail = 535;
    $Banking = 539;
    $Cinema = 547;
?>

<section id="image_gallery" class="mt-5 mb-5">
	<div class="container custom_bg_color_one_white pt-4_3">
		<h6 class="font-weight-light text-center mb-0 text-uppercase">SHOW THE WORLD</h6>
		<h1 class="font-weight-light text-center mt-1 mb-0">Solutions</h1>
		<hr class="mt-2 mb-5">
		<div class="row text-center">

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Education); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display-For-Education.webp" alt="Digital Signage Kiosk Display For Education">
						<div class="imageContent">
							<p>Education</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Restaurants); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display-For-Restaurant.webp" alt="Digital Signage Kiosk Display For Restaurant">
						<div class="imageContent">
							<p>Restaurants</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Healthcare); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display-For-Health-Sector.webp" alt="Digital Signage Kiosk Display For Health Sector">
						<div class="imageContent">
							<p>Healthcare</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Hotels); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Signage-Display-Kiosk-At-Hotels.webp" alt="Signage Display Kiosk At Hotels">
						<div class="imageContent">
							<p>Hotels</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Lobbies); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/LOBBY-DIGITAL-SIGNAGE-KIOSKS.webp" alt="Signage Display Kiosk At Hotels">
						<div class="imageContent">
							<p>Lobbies</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Retail); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display.webp" alt="Digital Signage Kiosk Display">
						<div class="imageContent">
							<p>Retail</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Banking); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display-For-Banking.webp" alt="Digital Signage Kiosk Display For Banking">
						<div class="imageContent">
							<p>Banking</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-6 mb-4_3">
				<div class="imageColumn overflow-hidden">
					<a href="<?php echo get_post_permalink($Cinema); ?>">
						<img class="img-fluid image_zoom" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gallery/Digital-Signage-Kiosk-Display-For-Cinema-Hall.webp" alt="Digital Signage Kiosk Display For Cinema Hall">
						<div class="imageContent">
							<p>Cinema</p>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>