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
<div class="single_page_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/single_page/banner.jpg)">
	<div class="overlay_background h-100 d-flex align-items-center">
		<div class="container">
		<div class="row">
			<div class="col-12 d-flex align-items-center">
				<h1 class="display-4 font-weight-bold text-capitalize"><?php the_title(); ?></h1>
			</div>
		</div>
		</div>
	</div>
</div>

<div id="custom_single_post" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/main_bg.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-3 d-none d-md-block" id="single_post_sidebar">
				<?php get_template_part( 'sidebar/content', 'sidebar_for_megaMenuPages' ); ?>
			</div>
			<div class="col-md-9">
				<div id="single_post_mainpart">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
							while ( have_posts() ) :
								the_post();
						?>
						<div class="mt-4">
							<?php the_title( '<h1 class="entry-title mb-0 font-weight-bold">', '</h1>' ); ?>
						</div>
						<div class="mb-0">
							<span><?php the_time('F j, Y'); ?> - </span>
							<span>
								<?php 
									$categories = the_category(', '); 
									if ( ! empty( $categories ) ) {
										echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}
								?>
							</span>
						</div>
						<hr>
						<?php gctlled_post_thumbnail(); ?>
						<div class="entry-content">
							<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'demo_one' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'demo_one' ),
									'after'  => '</div>',
								) );
							?>
						</div>
						<div class="navigation">
							<div>
								<?php previous_post_link('Previous post: %link', '%title', TRUE, '4'); ?>
							</div>
							<div>
								<?php next_post_link('Next post: %link', '%title', TRUE, '4'); ?>
							</div>
						</div>
						<?php
							if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
						?>
						<?php
							endwhile; // End of the loop.
						?>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();