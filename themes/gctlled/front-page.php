<?php

/**
 * Template Name: front-page
 */

get_header();
?>
<?php
	get_template_part( 'carousel/content', 'banner_carousel' );
	get_template_part( 'custom_home_page_part_by_part/content', 'porto_block' );
	get_template_part( 'custom_home_page_part_by_part/content', 'four_banner' );
	get_template_part( 'custom_home_page_part_by_part/content', 'big_image_gallery' );
	get_template_part( 'custom_home_page_part_by_part/content', 'homepage_icon' );
?>
<?php
	get_template_part( 'custom_home_page_part_by_part/content', 'image_gallery' );
	get_template_part( 'custom_home_page_part_by_part/content', 'home_page_blog' );
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

<section id="shortContact" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<p class="h3 font-weight-bold">ADVANCING THE DIGITAL SIGNAGE REVOLUTION...</p>
				<p>SIS Digital is reimagining LED and LCD signage in the United Kingdom, mainland Europe and across the world.</p>
			</div>
			<div class="col-md-3 shortContactButton">
				<button class="btn btn_custom_one">
					<a href="<?php echo get_post_permalink(561); ?>">CONTACT US TODAY</a>
				</button>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();