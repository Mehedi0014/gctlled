<?php
/**
 * The template for displaying all pages
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

	<div class="solutions_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/solutions/banner.png)">
		<div class="overlay_background h-100 d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<h1 class="text-capitalize"><?php the_title(); ?></h1>
						<p class="lead"><?php echo get_secondary_title(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>






<section id="solutions">
	<div class="container">
		<div class="row">
			
			<div id="olb" class="col-md-3 d-none d-md-block">
				<?php
					get_template_part( 'sidebar/content', 'sidebar_for_knowledge_base' );					
				?>
			</div>			
			
			<div class="col-md-9">
				<div class="p-3">
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

get_footer();