<?php
/**
 * GCTL LED functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GCTL_LED
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gctlled_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gctlled_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GCTL LED, use a find and replace
		 * to change 'gctlled' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gctlled', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gctlled' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gctlled_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gctlled_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gctlled_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gctlled_content_width', 640 );
}
add_action( 'after_setup_theme', 'gctlled_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gctlled_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gctlled' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gctlled' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gctlled_widgets_init' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}











/**
 * Enqueue scripts and styles.
 */
function gctlled_scripts() {
    wp_enqueue_style( 'fontAwesome.min.css', get_template_directory_uri() . '/assets/fontAwesome/css/font-awesome.min.css', array(), '4.7.1', 'all');

	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;700;900&display=swap', false );

	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style( 'custom.mega.menu.css', get_template_directory_uri() . '/assets/css/custom.mega.menu.css', array(), '4.3.1', 'all');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
   	
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.14, true);
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 3.3, true);
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 3.3, true);
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 3.3, true);
   

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gctlled_scripts' );





/*
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH . '/single');
add_filter('single_template', 'my_single_template');

function my_single_template($single) {
global $wp_query, $post;

foreach((array)get_the_category() as $cat) :

if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

else
return SINGLE_PATH . '/single.php';

endforeach;
}






/**
 * the_excerpt() er karone j [...] show hoy ta dur kore continue Reading...... show korano
 */
function wpdocs_excerpt_more( $more ) {
  if( ! is_single() ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"></a>';
  }  
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



/**
 * Filter the excerpt length to 20 words............................
 */
function wpdocs_custom_excerpt_length( $length ) {
	if (! is_single()) {
		return 20;
	}
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



/**
 * To write PHP code in text widget............................
 */
function php_execute($html){
if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
$html=ob_get_contents();
ob_end_clean();
}
return $html;
}
add_filter('widget_text','php_execute',100);


/**
 * For pagination using bootstrap 4 in blog page ............................
 */

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {

	if ( null === $wp_query ) {
		global $wp_query;
	}

	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);

	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );

		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ($pages as $page) {
                        $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                }

		$pagination .= '</ul></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}




/**
 * For removing default structure data by yoast SEO plugin ............................
 */
add_filter( 'wpseo_json_ld_output', '__return_false' );





/* Remove Yoast SEO Canonical From All Pages
 * Credit: Yoast Team
 * Last Tested: Jun 16 2017 using Yoast SEO 4.9 on WordPress 4.8
 */

add_filter( 'wpseo_canonical', '__return_false' );





/**
 * Breadcrumb add korar jonno. ............................
*/



function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}


/**
 * Enable upload for webp image and support it to preview media library. ............................
*/

	//enable upload for webp image files.
	function webp_upload_mimes($existing_mimes) {
	    $existing_mimes['webp'] = 'image/webp';
	    return $existing_mimes;
	}
	add_filter('mime_types', 'webp_upload_mimes');

	//enable preview / thumbnail for webp image files in media library.
	function webp_is_displayable($result, $path) {
	    if ($result === false) {
	        $displayable_image_types = array( IMAGETYPE_WEBP );
	        $info = @getimagesize( $path );

	        if (empty($info)) {
	            $result = false;
	        } elseif (!in_array($info[2], $displayable_image_types)) {
	            $result = false;
	        } else {
	            $result = true;
	        }
	    }

	    return $result;
	}
	add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);












