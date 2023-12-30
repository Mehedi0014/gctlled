<?php

 /* ==============================================================================================
 Mega Menu er main menu er sokol page er id er variable (Mega menu pages sidebar o ai page gulo)
 ===============================================================================================*/


    $Floor_Standing_LCD_Digital_Display_signage = 424;
    $Wall_Mount_Digital_signage_Android = 440;
    $LCD_Digital_Signage_Poster = 447;
    $All_in_One_Interactive_Display_Panel = 449;
    $Video_Wall = 454;
    $Information_Signage_Display_Kiosk = 463;
    $Super_Market_Windows_Signage_Display = 467;
    $Touch_Screen_Table = 471;
    $Outdoor_Digital_Signage_Display = 478;
    $Self_Service_Payment_Kiosk = 488;
    $Portable_Digital_Android_Battery_A_Board = 494;
    $P2_5_P6_P8_P10_LED_Display = 498;








?>




<div class="sidebar pt-3">
	<ul>
		<p class="h4">Products</p>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Floor-Standing-Digital-Display-signage.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Floor_Standing_LCD_Digital_Display_signage); ?>">Floor Standing LCD Digital Display signage</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Wall-Mount-Digital-signage-Android.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Wall_Mount_Digital_signage_Android); ?>">Wall Mount Digital signage Android</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/LCD-Digital-Signage-Poster.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($LCD_Digital_Signage_Poster); ?>">LCD Digital Signage Poster</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/All-in-One-Interactive-Display-Pane.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($All_in_One_Interactive_Display_Panel); ?>">All-in-One Interactive Display Panel</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Video-Wall.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Video_Wall); ?>">Video Wall</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Information-Signage-Display-Kiosk.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Information_Signage_Display_Kiosk); ?>">Information Signage Display Kiosk</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Super-Market-Windows-Signage-Display.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Super_Market_Windows_Signage_Display); ?>">Super Market Windows Signage Display</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Touch-Screen-Table.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Touch_Screen_Table); ?>">Touch Screen Table</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Outdoor-Digital-Signage-Display.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Outdoor_Digital_Signage_Display); ?>">Outdoor Digital Signage Display</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Self-Service-Payment-Kiosk.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Self_Service_Payment_Kiosk); ?>">Self Service Payment Kiosk</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Outdoor-Digital-Signage-Display.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($Portable_Digital_Android_Battery_A_Board); ?>">Portable Digital Android Battery A-Board</a>
		</li>
		<li>
			<img class="img-fluid_custm_two" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/iconMegaMenu/Self-Service-Payment-Kiosk.png" alt="10-point-touch">
			<a href="<?php echo get_post_permalink($P2_5_P6_P8_P10_LED_Display); ?>">P2.5/P6/P8/P10 LED Display</a>
		</li>


	</ul>
</div>

<?php 
	if ( ! is_active_sidebar( 'sidebar-2' ) ) {
		return;
	}
?>

<div class="sidebar">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>