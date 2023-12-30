<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GCTL_LED
 */

get_header();
?>
<?php
	if ( have_posts() ) :
			    while ( have_posts() ) : the_post();
?>

<?php
	get_template_part('single/content' , 'single_product_page_banner_condition');
	//get_template_part(' breadcrumbs/content' , 'breadcrumbs_using_yoast_seo_plugin ');
	get_template_part('single/content' , 'icon_gallery');
?>

<section id="megaMenuPages">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 d-none d-md-block">
				<?php get_template_part( 'sidebar/content', 'sidebar_for_megaMenuPages' ); ?>
			</div>
			<div class="col-md-9">
				<div class="p-3">

					<div class="text-center">
						<h2 class="border-bottom border-bottom pb-2 mb-5 font-weight-bold">
							<?php the_title(); ?>
						</h2>
					</div>

					<?php				
					        the_content();
					    endwhile;
						else :
					    	_e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
					?>

					<div id="StarRating" class="StarRating text-center mt-5 pt-3 pb-3">
						<?php echo do_shortcode('[ratemypost]'); ?>
						<?php //echo do_shortcode('[ratemypost-result]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





<?php
	get_template_part( 'accordion/content', 'accordion' );
	get_template_part( 'contact_form/content', 'contact_form' );	
?>


<?php

get_footer();