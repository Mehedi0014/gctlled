<?php
/**
 *
 * Template Name: Blog Post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GCTL_LED
*/

get_header();
?>
<img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/blog/indoor digital signage Display.webp" alt="Solutions Banner Image">
<section id="blog_loop">
	<div class="container">
		<div class="row">

			<?php if ( have_posts() ) : ?>
				<?php query_posts( 'cat=1' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div  id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-6 col-md-6 col-lg-4 mb-5') ?> >
						<div class="card">
							<div class="card-header">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php gctlled_post_thumbnail(); ?>
								<?php endif; ?>
							</div>
							<div class="card-body">
								<div class="blog_title">
									<h3 class="card-title font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
								<div class="text-justify">
									<?php the_excerpt(); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="card-link text-uppercase text-danger">Read More &raquo;</a>
								<div class="card-footer">
									<span class="small"><?php the_time('F j, Y'); ?> <span>&nbsp; . &nbsp;</span> <span><?php comments_number(); ?></span></span>
								</div>
							</div>
						</div>
					</div>						
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div> <!-- end row -->

		<!-- <nav class="pagination">
			<?php //echo paginate_links(); ?>
		</nav> -->

		<nav class="bootstrap_pagination">
			<?php echo bootstrap_pagination(); ?>
		</nav>

	</div>
</section>
<?php
get_footer();