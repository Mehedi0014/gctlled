<?php
/**
 *
 * Template Name: For Products Page
 *
 *
 * The template for displaying Products pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GCTL_LED
 */

get_header();
?>
<?php
	if ( have_posts() ) :
			    while ( have_posts() ) : the_post();
?>

<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/LCD_Digital_Signage_Poster.jpg)">
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
	//get_template_part('breadcrumbs/content' , 'breadcrumbs_using_yoast_seo_plugin');
	get_template_part('single/content' , 'icon_gallery');
?>

<section id="megaMenuPages">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 d-none d-md-block">
				<?php get_template_part( 'sidebar/content', 'sidebar_for_megaMenuPages' ); ?>
			</div>
			<div id="mainMegaMenuPagesRightColumn" class="col-md-9">
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
				</div>
			</div>
		</div>
	</div>
</section>





<?php
	get_template_part( 'contact_form/content', 'contact_form' );
?>


<?php

get_footer();