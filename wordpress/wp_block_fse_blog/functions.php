<?php

/* *********************************** */
/* Add theme support for block styles. */
/* *********************************** */

if (!function_exists('theme_block_styles')) :
	function theme_block_styles()
	{
		add_theme_support('post-thumbnails');
		add_theme_support('editor-styles');
		add_theme_support('wp-block-styles');
	}
endif;

add_action('init', 'theme_block_styles');

/* ************************** */
/* Enqueue the style.css file.*/
/* ************************** */

function wp_block_blog_styles()
{
	wp_enqueue_style(
		'wp_block_blog-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'wp_block_blog_styles');

/* ***************************** */
/*  Register pattern categories. */
/* ***************************** */

if (!function_exists('theme_pattern_categories')) :
	function theme_pattern_categories()
	{
		register_block_pattern_category(
			'theme_page',
			array(
				'label'       => _x('Pages', 'Block pattern category', 'theme'),
				'description' => __('A collection of full page layouts.', 'theme'),
			)
		);
	}
endif;

add_action('init', 'theme_pattern_categories');

/* ******************* */
/* Block WP-JSON-Users */
/* ******************* */

add_filter('rest_endpoints', function ($endpoints) {
	if (isset($endpoints['/wp/v2/users'])) {
		unset($endpoints['/wp/v2/users']);
	}
	if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
		unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
	}
	return $endpoints;
});
