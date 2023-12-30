<?php
/**
 * Template Name: For Details Text Page
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GCTL_LED
 */

get_header();
?>


<div class="contact_us_page_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/solutions/banner.jpg" alt="Solutions Banner Image">
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

<div class="container">
	<?php
		if ( have_posts() ) :
				    while ( have_posts() ) : the_post();				
	        the_content();
	    endwhile;
		else :
		    _e( 'Sorry, no posts were found.', 'textdomain' );
		endif;
	?>
</div>

<?php
get_footer();