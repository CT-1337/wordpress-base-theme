<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( '{{theme_name}}_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function {{theme_name}}_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Richmond SPCA, use a find and replace
		 * to change '{{theme-name}}' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '{{theme-name}}', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-formats', array( 'video' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top' => esc_html__( 'Top', '{{theme-name}}' ),
			'main' => esc_html__( 'Primary', '{{theme-name}}' ),
			'footer' => esc_html__( 'Footer', '{{theme-name}}' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;

add_action( 'after_setup_theme', '{{theme_name}}_theme_setup' );


// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function {{theme_name}}_theme_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Column',
		'id' => 'footer-column',
		'description' => 'Appears in the footer area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

}
add_action( 'widgets_init', '{{theme_name}}_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function {{theme_name}}_theme_scripts() {

	$enable_google_adsens = get_theme_mod( '{{theme_name}}_theme_enable_google_adsense');

	wp_enqueue_style( '{{theme-name}}-theme-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	wp_enqueue_style( '{{theme-name}}-css', get_stylesheet_uri(),  array(), '1.0');

	if (!is_admin()) {
		wp_enqueue_script( '{{theme-name}}-theme-js', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0', true );
	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', '{{theme_name}}_theme_scripts' );
