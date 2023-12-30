<?php
/**
 * Template Name: For Main Menu Pages
 *
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GCTL_LED
 */

get_header();
?>

<?php
	if (is_page(554)) {
?>

<img class="img-fluid mb-3" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/olb/Outdoor_LED_billboard.jpeg" alt="Knowledge Base Banner Image">

<?php
	}elseif (is_page(93)) {
?>

<img class="img-fluid mb-3" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/solutions/banner.jpg" alt="Solutions Banner Image">

<?php
	}
?>

<section id="olb">
	<div class="container">
		<div class="row">
			<div class="col-md-3 d-none d-md-block">
				<?php
					if (is_page(554)) {
						get_template_part( 'sidebar/content', 'sidebar_for_knowledge_base' );
					}elseif (is_page(93)) {
						get_template_part( 'sidebar/content', 'sidebar_for_solutions' );
					}
				?>
			</div>


			<div class="col-md-9">
				<div class="primary">
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
			</div>
		</div>
	</div>
</section>
<?php

get_footer();