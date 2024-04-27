<?php
/**
 * Pulitzer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pulitzer
 * @since Pulitzer 1.0
 */


/**
 * Declare theme supports.
 *
 * @since Pulitzer 1.0
 * @return void
 */
function pulitzer_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'pulitzer_setup' );


/**
 * Enqueue stylesheets.
 *
 * @since Pulitzer 1.0
 * @return void
 */
function pulitzer_styles() {
	wp_enqueue_style( 'pulitzer-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'pulitzer' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'pulitzer_styles' );


/**
 * Add custom template part areas.
 */

if ( ! function_exists( 'pulitzer_template_part_areas' ) ) :
	/**
	 * Add custom template part areas
	 *
	 * @since Pulitzer 1.0
	 * @return void
	 */
	function pulitzer_template_part_areas( array $areas ) {
		$areas[] = array(
			'area'        => 'posts',
			'area_tag'    => 'section',
			'icon'        => 'symbolFilledIcon',
			'label'       => __( 'Posts', 'pulitzer' ),
			'description' => __( 'Different layouts for the posts list', 'pulitzer' )
		);

		return $areas;
	}
endif;

add_filter( 'default_wp_template_part_areas', 'pulitzer_template_part_areas' );


/**
 * Register block styles.
 */

if ( ! function_exists( 'pulitzer_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Pulitzer 1.0
	 * @return void
	 */
	function pulitzer_block_styles() {

		register_block_style(
			'core/post-excerpt',
			array(
				'name'			=> 'pulitzer-clamp-lines-2',
				'label'			=> __( 'Clamp to three lines', 'pulitzer' ),
				'style_handle'	=> 'pulitzer-clamp-lines-2'
			)
		);

		register_block_style(
			'core/post-excerpt',
			array(
				'name'			=> 'pulitzer-clamp-lines-3',
				'label'			=> __( 'Clamp to three lines', 'pulitzer' ),
				'style_handle'	=> 'pulitzer-clamp-lines-3'
			)
		);

		register_block_style(
			'core/post-comments-number',
			array(
				'name'			=> 'pulitzer-post-comments-number-icon',
				'label'			=> __( 'With icon', 'pulitzer' ),
				'style_handle'	=> 'pulitzer-post-comments-number-icon'
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'			=> 'pulitzer-post-terms',
				'label'			=> __( 'Outlined terms', 'pulitzer' ),
				'style_handle'	=> 'pulitzer-post-terms'
			)
		);
		
	}
endif;

add_action( 'init', 'pulitzer_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'pulitzer_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Pulitzer 1.0
	 * @return void
	 */
	function pulitzer_block_stylesheets() {
		
		$pulitzer_styled_blocks = array(
			'core/button'                   => 'button',
			'core/comment-reply-link'       => 'comment-reply-link',
			'core/post-comments-count'      => 'post-comments-count',
			'core/post-comments-form'       => 'post-comments-form',
			'core/post-excerpt'             => 'post-excerpt',
			'core/post-terms'               => 'post-terms',
			'core/query-pagination-numbers' => 'query-pagination-numbers',
			'core/search'                   => 'search',
			'core/social-links'             => 'social-links',
		);

		foreach ( $pulitzer_styled_blocks as $block_name_with_namespace => $block_name ) {
			wp_enqueue_block_style(
				$block_name_with_namespace,
				array(
					'handle' => 'pulitzer-' . $block_name,
					'src'    => get_theme_file_uri( 'assets/css/blocks/' . $block_name . '.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/' . $block_name . '.css' ),
				)
			);
		}

	}
endif;

add_action( 'init', 'pulitzer_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'pulitzer_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Pulitzer 1.0
	 * @return void
	 */
	function pulitzer_pattern_categories() {

		register_block_pattern_category(
			'pulitzer_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'pulitzer' ),
				'description' => __( 'A collection of full page layouts.', 'pulitzer' ),
			)
		);
	}
endif;

add_action( 'init', 'pulitzer_pattern_categories' );
