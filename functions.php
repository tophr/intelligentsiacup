<?php
/**
 * Intelligentsia Cup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Intelligentsia_Cup
 */

if ( ! function_exists( 'intelligentsiacup_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function intelligentsiacup_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Intelligentsia Cup, use a find and replace
	 * to change 'intelligentsiacup' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'intelligentsiacup', get_template_directory() . '/languages' );

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
	add_image_size('featured_thumb', 420, 160, true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'intelligentsiacup' ),
		'menu-footer' => esc_html__( 'Footer', 'intelligentsiacup' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'intelligentsiacup_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'intelligentsiacup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function intelligentsiacup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'intelligentsiacup_content_width', 640 );
}
add_action( 'after_setup_theme', 'intelligentsiacup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function intelligentsiacup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'intelligentsiacup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'intelligentsiacup' ),
		'class'			=> 'side',
		'before_widget' => '<section id="%1$s" class="widget block %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Sidebar', 'intelligentsiacup' ),
		'id'            => 'sidebar-home',
		'description'   => esc_html__( 'Add homepage widgets here.', 'intelligentsiacup' ),
		'class'			=> 'side',
		'before_widget' => '<section id="%1$s" class="widget block %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'intelligentsiacup' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add footer widgets here.', 'intelligentsiacup' ),
		//'class'			=> 'side',
		//'before_widget' => '<section id="%1$s" class="widget block %2$s">',
		//'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'intelligentsiacup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function intelligentsiacup_scripts() {
	wp_enqueue_style( 'intelligentsiacup-style', get_stylesheet_uri(), array(), '1.1.1' );
	
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css'  );
	
	wp_enqueue_style( 'featherlight', get_template_directory_uri() . '/css/featherlight.min.css'  );
	
	wp_enqueue_style( 'featherlight-gallery', get_template_directory_uri() . '/css/featherlight.gallery.min.css'  );
	
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:600,400,300|Open+Sans+Condensed:300|Roboto+Condensed:700i'  );

	//wp_enqueue_script( 'intelligentsiacup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'intelligentsiacup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4');
		wp_enqueue_script('jquery');
	}
	
	if ( is_page_template( 'page-results.php' ) ) {
    	wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/css/jquery-ui.min.css'  );
		wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1', true);
		wp_enqueue_script('intelligentsiacup-tabs',  get_template_directory_uri() .'/js/tabs.js', array('jquery-ui'), '1', true);
	}	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'intelligentsiacup_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*-----------------------------------------------------------------------------------*/
/*	Custom Login Logo Support
/*-----------------------------------------------------------------------------------*/

function intelligentsiacup_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_template_directory_uri().'/images/blue/ic-logo.png) !important; background-size: contain !important; width: 320px !important; }
    </style>';
}
function intelligentsiacup_wp_login_url() {
    return home_url();
}
function intelligentsiacup_wp_login_title() {
    return get_option('blogname');
}

add_action('login_head', 'intelligentsiacup_custom_login_logo');
add_filter('login_headerurl', 'intelligentsiacup_wp_login_url');
add_filter('login_headertitle', 'intelligentsiacup_wp_login_title');
