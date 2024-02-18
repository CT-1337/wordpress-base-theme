<?php
/**
 *  {{THEME_CLASS}} functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package {{THEME_CLASS}}
 */

/**
 * Walker Nav & Theme Helper Class
 */

require_once get_template_directory() . '/inc/classes/wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/classes/theme-helper-class.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_stylesheet_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/theme-helpers.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


