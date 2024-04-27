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
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'pulitzer-block-button',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/button.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/button.css' ),
			)
		);
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
