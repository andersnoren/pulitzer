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
	wp_enqueue_style( 'pulitzer-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'pulitzer' )->get( 'Version' ) );
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
	 * @return array
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
			'core/comment-edit-link',
			array(
				'name'	=> 'pulitzer-comment-edit-link',
				'label'	=> __( 'Button', 'pulitzer' )
			)
		);

		register_block_style(
			'core/comment-reply-link',
			array(
				'name'	=> 'pulitzer-comment-reply-link',
				'label'	=> __( 'Button', 'pulitzer' )
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'	=> 'pulitzer-list-checkmark',
				'label'	=> __( 'Checkmark list', 'pulitzer' )
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'	=> 'pulitzer-list-checkmark-disc',
				'label'	=> __( 'Circled checkmark list', 'pulitzer' )
			)
		);

		register_block_style(
			'core/post-comments-number',
			array(
				'name'	=> 'pulitzer-post-comments-number-icon',
				'label'	=> __( 'With icon', 'pulitzer' )
			)
		);

		register_block_style(
			'core/post-excerpt',
			array(
				'name'	=> 'pulitzer-clamp-lines-2',
				'label'	=> __( 'Clamp: 2 lines', 'pulitzer' )
			)
		);

		register_block_style(
			'core/post-excerpt',
			array(
				'name'	=> 'pulitzer-clamp-lines-3',
				'label'	=> __( 'Clamp: 3 lines', 'pulitzer' )
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'	=> 'pulitzer-post-terms',
				'label'	=> __( 'Outlined terms', 'pulitzer' )
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
			'core/comments'                 => 'comments',
			'core/footnotes'                => 'footnotes',
			'core/list'                     => 'list',
			'core/navigation'               => 'navigation',
			'core/paragraph'                => 'paragraph',
			'core/post-comments-form'       => 'post-comments-form',
			'core/post-excerpt'             => 'post-excerpt',
			'core/post-featured-image'      => 'post-featured-image',
			'core/post-terms'               => 'post-terms',
			'core/query-pagination-numbers' => 'query-pagination-numbers',
			'core/search'                   => 'search',
			'core/social-links'             => 'social-links',
			'jetpack/sharing-buttons'       => 'jetpack-sharing-buttons',
			'jetpack/subscriptions'         => 'jetpack-subscriptions',
		);

		foreach ( $pulitzer_styled_blocks as $block_name_with_namespace => $block_name ) {
			wp_enqueue_block_style(
				$block_name_with_namespace,
				array(
					'handle' => 'pulitzer-' . $block_name,
					'src'    => get_template_directory_uri() . '/assets/css/blocks/' . $block_name . '.css',
					'path'   => get_template_directory() . '/assets/css/blocks/' . $block_name . '.css',
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
			'pulitzer',
			array(
				'label'       => _x( 'Pulitzer', 'Block pattern category', 'pulitzer' ),
				'description' => __( 'Patterns included in the Pulitzer theme.', 'pulitzer' ),
			)
		);

		register_block_pattern_category(
			'pulitzer-pages',
			array(
				'label'       => _x( 'Pulitzer Page Layouts', 'Block pattern category', 'pulitzer' ),
				'description' => __( 'Full page layouts.', 'pulitzer' ),
			)
		);
	}
endif;

add_action( 'init', 'pulitzer_pattern_categories' );


/**
 * Check if a block is registered.
 */
if ( ! function_exists( 'pulitzer_is_block_registered' ) ) :
	/**
	 * Check if a block is registered
	 *
	 * @since Pulitzer 1.0
	 * @return bool
	 */
	function pulitzer_is_block_registered( $block_name ) {
		$registry = WP_Block_Type_Registry::get_instance();
 		return $registry->get_registered( $block_name );
	}
endif;


/**
 * Register custom block bindings.
 */
if ( ! function_exists( 'pulitzer_register_block_bindings' ) ) :
	/**
	 * Register custom block bindings
	 *
	 * @since Pulitzer 1.0
	 * @return void
	 */
	function pulitzer_register_block_bindings() {

		/*
		 * Copyright character with current year.
		 */
		register_block_bindings_source( 
			'pulitzer/copyright-year', 
			array(
				'label'              => __( 'Copyright year', 'pulitzer' ),
				'get_value_callback' => 'pulitzer_block_binding_callback_copyright_year'
			)
		);

		/*
		 * Comments count for the current post.
		 */
		register_block_bindings_source( 
			'pulitzer/post-comments-count', 
			array(
				'label'              => __( 'Post comments count', 'pulitzer' ),
				'get_value_callback' => 'pulitzer_block_binding_callback_post_comments_count'
			)
		);

		/*
		 * Post reading time for the current post.
		 */
		register_block_bindings_source( 
			'pulitzer/post-reading-time', 
			array(
				'label'              => __( 'Post reading time', 'pulitzer' ),
				'get_value_callback' => 'pulitzer_block_binding_callback_post_reading_time'
			)
		);

	}
endif;

add_action( 'init', 'pulitzer_register_block_bindings' );


/*
 * Block bindings callback:
 * Copyright character with current year.
 */
if ( ! function_exists( 'pulitzer_block_binding_callback_copyright_year' ) ) :
	/**
	 * Block bindings callback
	 * Copyright character with current year
	 *
	 * @since Pulitzer 1.0
	 * @return string
	 */
	function pulitzer_block_binding_callback_copyright_year() {
		return '&copy; ' . date( 'Y' );
	}
endif;


/*
 * Block bindings callback:
 * Post comments count.
 */

if ( ! function_exists( 'pulitzer_block_binding_callback_post_comments_count' ) ) :
	/**
	 * Block bindings callback
	 * Post comments count.
	 *
	 * @since Pulitzer 1.0
	 * @return string
	 */
	function pulitzer_block_binding_callback_post_comments_count( array $source_args, WP_Block $block_instance, string $attribute_name ) {
		$post_id = $block_instance->context['postId'] ?? get_the_ID();

		if ( ! comments_open( $post_id ) ) return false;

		$comments_link = '<a class="pulitzer-comment-count-link" href="' . esc_url( get_comments_link( $post_id ) ) . '">';
		$comments_link .= '<span class="count">' . esc_html( get_comments_number( $post_id ) ) . '</span>';
		$comments_link .= '</a>';

		return $comments_link;

	}
endif;


/*
 * Block bindings callback:
 * Post reading time.
 */
if ( ! function_exists( 'pulitzer_block_binding_callback_post_reading_time' ) ) :
	/**
	 * Block bindings callback
	 * Post reading time.
	 *
	 * @since Pulitzer 1.0
	 * @return string
	 */
	function pulitzer_block_binding_callback_post_reading_time( array $source_args, WP_Block $block_instance, string $attribute_name ) {

		$post_id = $block_instance->context['postId'] ?? get_the_ID();

		/*
		 * Calculate the reading time.
		 * 
		 * Based on code by Justin Tadlock.
		 * https://github.com/x3p0-dev/x3p0-ideas/blob/master/src/Bindings/Post.php
		 */

		// Set words per minute to 200.
		$words_per_min = 200;

		// Strip tags and get the word count from the content.
		$count = str_word_count( strip_tags( apply_filters( 'the_content', get_post_field( 'post_content', $post_id ) ) ) );

		// Get the ceiling for minutes.
		$time_mins  = intval( ceil( $count / $words_per_min ) );
		$time_hours = 0;

		// If more than 60 mins, calculate hours and get leftover mins.
		if ( 60 <= $time_mins ) {
			$time_hours = intval( floor( $time_mins / 60 ) );
			$time_mins  = intval( $time_mins % 60 );
		}

		// Set up text for hours.
		$text_hours = sprintf(
			_n( '%d hour', '%d hours', $time_hours, 'pulitzer' ),
			number_format_i18n( $time_hours )
		);

		// Set up text for minutes.
		$text_mins = sprintf(
			_n( '%d min', '%d min', $time_mins, 'pulitzer' ),
			number_format_i18n( $time_mins )
		);

		// If there are no hours, just return the minutes.
		// If there are no minutes, just return the hours.
		if ( 0 >= $time_hours ) {
			return sprintf( esc_html_x( '%s read', '%s = hours/minutes', 'pulitzer' ), $text_mins );
		} elseif ( 0 >= $time_mins ) {
			return sprintf( esc_html_x( '%s read', '%s = hours/minutes', 'pulitzer' ), $text_hours );
		}

		// Merge hours + minutes text.
		return sprintf( esc_html_x( '%1$s %2$s read', '%1$s = hours, %2$s = minutes', 'pulitzer' ), $text_hours, $text_mins );
		
	}
endif;
