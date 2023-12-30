<?php
/*
Post name and Id

   	===== Floor Standing LCD Digital Display signage (Main category & id = 424) ====
50 Inch Touch Floor Standing Digital Display signage = 23;
55 Inch Touch Free Standing Display signage Kiosk = 61;
Dual Screen Digital Display signage = 91;
LCD Advertisement Display signage with Brochure = 105;
50 Inch Non-Touch Floor Standing Digital Display signage = 76;
55 Inch Non-Touch Free Standing Display signage Kiosk = 83;
15.6 Inch Floor Stand Digital Display signage = 112;


   	===== Wall Mount  Digital signage Android (Main category & id = 440) ====
32 Inch Wall Mount Digital Display signage = 125;
55 Inch Wall Mount Digital Display signage = 127;
22 Inch Touch Wall Mount Digital Display signage = 117;


   	===== LCD Digital Signage Poster (Main category & id = 447) ====
Outdoor Portable Digital Poster with Battery = 157;
Indoor Portable Digital signage Poster = 151;

   	===== All-in-One Interactive Display Panel (Main category & id = 449) ====
65 inch All-in-One Interactive Display Panel = 165;
75 inch Interactive Display Panel TV = 173;
85 inch Interactive Display Panel = 180;



   	===== Video Wall (Main category & id = 454) ====
46 inch 3.8mm LCD Video Wall = 200;
49 inch 3.8mm LCD Video Wall = 215;
55 inch 1.8mm LCD Video Wall = 226;
55 inch 3.8mm LCD Video Wall = 232;
46 inch 1.8mm LCD Video Wall = 188;
49 inch 1.8mm LCD Video Wall = 208;


   	===== Information Signage Display Kiosk (Main category & id = 463) ====
32 Inch Information Signage Display Kiosk = 240;
42 Inch Information Kiosk = 247;


   	===== Super Market Windows Signage Display (Main category & id = 467) ====
Single Sided Supermarket Advertising Display = 254;
Dual Sided Supermarket Advertising Display = 261;


	===== Touch Screen Table (Main category & id = 471) ====
LCD Touch Screen Restaurant Table = 270;
42 Inch LCD Touch Screen Table = 287;
LCD Interactive Touch Screen Education Table = 296;
Metal LCD Touch Screen coffee Table = 307;
LCD Touch Screen Conference Table = 315;


	===== Outdoor Digital Signage Display (Main category & id = 478) ====
LCD Advertisement Outdoor Signage Display = 323;
IP6 Advertising LCD Outdoor Signage Kiosk = 329;
Dual Sided Outdoor LCD Advertisement Display = 336;
Weather Proof LCD Display Signage = 344;
Wall Mount Outdoor LCD Advertisement Display = 351;


	===== Self Service Payment Kiosk (Main category & id = 488) ====
Self Service Payment kiosk for Restaurant = 357;
Self Service kiosk for Supermarket = 365;


	===== Portable Digital Android Battery A-Board (Main category & id = 494) ====
Indoor Portable Digital Android Battery A-Board = 372;
Outdoor Portable Digital Android Battery A-Board = 403;


	===== P2.5/P6/P8/P10 LED Display (Main category & id = 498) ====
P4/P6/P8/P10 Outdoor LED Display = 410;
P1.5/P2.5/P3/P4/Indoor LED Display = 417;


*/
?>


<?php
	if (is_single(array(23,61,91,105,76,83,112,424))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/Floor_Standing_LCD_Digital_Display_signage.jpg)">
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
	}elseif (is_single(array(125,127,117,440)) ) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/Wall_Mount_Digital_signage_Android.jpg)">
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
	}elseif (is_single(array(151,157,447))) {
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
	}elseif (is_single(array(165,173,180,449))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/All_in_One_Interactive_Display_Panel.jpg)">
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
	}elseif (is_single(array(200,215,226,232,188,208,454))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/All_in_One_Interactive_Display_Panel.jpg)">
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
	}elseif (is_single(array(240,247,463))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/All_in_One_Interactive_Display_Panel.jpg)">
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
	}elseif (is_single(array(254,261,467))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/All_in_One_Interactive_Display_Panel.jpg)">
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
	}elseif (is_single(array(270,287,296,307,315,471))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/All_in_One_Interactive_Display_Panel.jpg)">
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
	}elseif (is_single(array(323,329,336,344,351,478))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/Outdoor_Digital_Signage_Display.jpg)">
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
	}elseif (is_single(array(357,365,488))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/Outdoor_Digital_Signage_Display.jpg)">
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
	}elseif (is_single(array(372,403,494))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/Portable_Digital_Android_Battery_A_Board.png)">
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
	}elseif (is_single(array(410,417,498))) {
?>
	<div class="mega_menu_banner custom_banner_one" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/assets/img/mega_menu/mega_menu_main_and_sub_pages_banner/P2.5_P6_P8_P10_LED_Display.jpg)">
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
	}
?>











