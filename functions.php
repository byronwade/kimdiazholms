<?php
/**
 * byronwade.com functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package byronwade.com
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'byronwade_com_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function byronwade_com_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on byronwade.com, use a find and replace
		 * to change 'byronwade-com' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'byronwade-com', get_template_directory() . '/languages' );

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
		

		require_once('navwalker.php');
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'byronwade-com' ),
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
				'byronwade_com_custom_background_args',
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
add_action( 'after_setup_theme', 'byronwade_com_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function byronwade_com_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'byronwade_com_content_width', 640 );
}
add_action( 'after_setup_theme', 'byronwade_com_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function byronwade_com_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'byronwade-com' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'byronwade-com' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'byronwade_com_widgets_init' );
// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * Enqueue scripts and styles.
 */
function byronwade_com_scripts() {
	wp_enqueue_style( 'byronwade-com-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bluma', get_template_directory_uri() . '/css/bulma.css' );
	wp_enqueue_style( 'bwwd', get_template_directory_uri() . '/css/bwwd.css' );
	# FONTAWSOME #
	wp_enqueue_script('font-awesome','//use.fontawesome.com/releases/v5.0.13/js/all.js',null,null,true);

	wp_style_add_data( 'byronwade-com-style', 'rtl', 'replace' );

	wp_enqueue_script( 'byronwade-com-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'byronwade_com_scripts' );

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

// Our custom post type function
function all_postypes() {

	register_post_type( 'Portfolio',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'portfolio'),
			'show_in_rest' => true,
			'can_export' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
			'taxonomies' => array( 'post_tag' ),

		)
	);

	register_post_type( 'Case Studies',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Studies' )
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'case-studies'),
			'show_in_rest' => true,
			'can_export' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
			'taxonomies' => array( 'post_tag' ),

		)
	);

}
// Hooking up our function to theme setup
add_action( 'init', 'all_postypes' );


add_filter('wp_nav_menu', 'my_wp_nav_menu', 10, 2);
function my_wp_nav_menu( $items, $args ) {
	$menu = wp_get_nav_menu_object($args->menu);
	if( $args->theme_location == 'menu-1' ) {
		$html_phone = '<div class="phone">P: '.get_field('phone_number', $menu).'</div>';
		$html_email = '<div class="email">E: '.get_field('email', $menu).'</div>';
		$items = $html_phone . $html_email . $items;
	}
	return $items;
}