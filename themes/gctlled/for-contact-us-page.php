<?php
/**
 * Template Name: For Contact Us Page
 *
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GCTL_LED
 */

get_header();
?>

<div class="contact_us_page_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/LCD_Digital_Signage_Poster.jpg)">
	<div class="overlay_background h-100 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="display-4 font-weight-bold text-capitalize"><?php the_title(); ?></h1>
					<p class="lead"><?php echo get_secondary_title(); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
	get_template_part( 'contact_form/content', 'contact_form' );
?>

<section id="google_map">
	<div class="container-fluid hide_overflow">
		<div class="row">
			<div class="col-12">
				<iframe id="g-map" src="https://maps.google.com/maps?q=house%2032%2C%20road%2010%2C%20Sector%204%2C%20uttora&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();