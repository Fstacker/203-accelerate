<?php
/**
 * Accelerate Marketing functions and definitions
 *
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


// Custom post types function
function create_custom_post_types() {
	register_post_type ('case_studies',
		array(
			'labels' => array(
				'name' => __('Case Studies'),
				'singular_name' => __('Case Study')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-studies'),
			//'show_in_nav_menus' => true;
			)
		);
	}

// Hook function into theme
add_action ('init', 'create_custom_post_types');

// Custom About page function
function child_theme_about_page () {
	register_post_type ('about',
		array(
			'labels' => array(
				'name' => __ ('About Us'),
				'singular_name' => __ ('About Us')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'about'),
			)
		);
	}

// Hook about function into theme
add_action ('init', 'child_theme_about_page');

// Enqueue scripts and styles.
function accelerate_child_scripts() {
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );
