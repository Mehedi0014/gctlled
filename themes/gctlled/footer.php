<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GCTL_LED
 */

?>

	

<?php

/* ===========================================================================
 Mega Menu er main menu er sokol page er id er variable
 ===========================================================================*/

	$Floor_Standing_LCD_Digital_Display_signage = 424;
    $Wall_Mount_Digital_signage_Android = 440;
    $LCD_Digital_Signage_Poster = 447;
    $All_in_One_Interactive_Display_Panel = 449;
    $Video_Wall = 454;
    $Information_Signage_Display_Kiosk = 463;
    $Super_Market_Windows_Signage_Display = 467;
    $Self_Service_Payment_Kiosk = 488;


/* ===========================================================================
 Contact us and Privacy Policy page er id er variable
 ===========================================================================*/
	
    $contact_us = 561;
    $privacy_policy = 3;
    $about_us = 563;

?>


<section id="all_footer">
	<footer class="main_footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-12">
					<ul>
						<li class="mb-3">
							<a class="logo" href="<?php echo home_url(); ?>">
								<img class="logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/gctl_logo.png" alt="Footer Logo">
							</a>
						</li>
						<li>
							<p>
								Germany Computer and Telecom Limited (GCTL) is one of the leading most Information communication Technology And Complete IT infrastructure Solution provider based in Dhaka, Bangladesh.
							</p>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<h3>Product</h3>
					<ul>
						<li><a href="<?php echo get_post_permalink($Wall_Mount_Digital_signage_Android); ?>">Wall Mount Digital signage Android</a></li>
						<li><a href="<?php echo get_post_permalink($LCD_Digital_Signage_Poster); ?>">LCD Digital Signage Poster</a></li>
						<li><a href="<?php echo get_post_permalink($Video_Wall); ?>">Video Walls</a></li>
						<li><a href="<?php echo get_post_permalink($All_in_One_Interactive_Display_Panel); ?>">All-in-One Interactive Display Panel</a></li>
						<li><a href="<?php echo get_post_permalink($Information_Signage_Display_Kiosk); ?>">Information Signage Display Kiosk</a></li>

						<li><a href="<?php echo get_post_permalink($Floor_Standing_LCD_Digital_Display_signage); ?>">Floor Standing LCD Digital Display signage</a></li>
						<li><a href="<?php echo get_post_permalink($Super_Market_Windows_Signage_Display); ?>">Super Market Signage Display</a></li>
						<li><a href="<?php echo get_post_permalink($Self_Service_Payment_Kiosk); ?>">Self Service Payment Kiosk</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<h3>Information</h3>
					<ul>
						<li><a href="<?php echo get_post_permalink($contact_us); ?>">Contact Us</a></li>
						<li><a href="<?php echo get_post_permalink($privacy_policy); ?>">Privacy Policy</a></li>
						<li><a href="<?php echo get_post_permalink($about_us); ?>">About Us</a></li>
						<!-- <li><a href="#">Imprint</a></li> -->
						<!-- <li><a href="#">Store Locations</a></li> -->
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<h3>Contact Us</h3>
					<div class="footer_contact_us">
						<ul>
							<li>
							    <p class="alpha phone">+8802-58610849 <br> +8801847213868</p>
							</li>
							<li><p class="alpha email">info@gctlbd.com</p></li>
							<li>
								<p class="alpha address">
									<span class="font-weight-bold">Address</span> <br>
									House - 42<small> (5th floor)</small>, <br>
									Road - 10, Sector - 4, <br>
									Uttara, Dhaka - 1230 <br>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sub_footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12"><p>Copyright &copy; <?php echo date("Y"); ?> CLS Computer, Inc. All rights reserved.</p></div>
				</div>
			</div>
		</div>
	</footer>
</section>
<?php wp_footer(); ?>
</body>
</html>