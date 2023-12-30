<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GCTL_LED
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="p:domain_verify" content="91b4a94a6350fee0675081ca8a437e37"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<!-- <link href='https://gctlled.com/'en-bd' rel='alternate'/> -->
</head>

<body <?php body_class(); ?>>
	<!-- Below wp_body_open function for writing script just after opening body tag using Head & Footer Code plugin -->
	<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
	?>


	<div id="topHeader">	
		<div class="col-12 phoneMailAndSocialMedia">
			<ul class="phoneMail">
				<li>
					<a href="tel:+8801847213868">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/topHeader/phone.png" alt="Logo">
						<span>+8801847213868</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/topHeader/mail.png" alt="Logo">
						<span>info@gctlinfosys.com</span>
					</a>
				</li>
			</ul>
			<ul class="socialMedia">
				<li><a href="https://www.facebook.com/gctlbd"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/gctlbd"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCm5gVepC_OX2kfJPf97AMxA"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="https://www.linkedin.com/company/gctl"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
			</ul>					
		</div>	
	</div>	
	<div class=sticky_header>
		<div id=masthead>
			<nav id=masthead_part>
					<?php
						get_template_part( 'custom_mega_menu/content', 'custom_mega_menu' );
					?>
			</nav>

		</div>
	</div>
	

