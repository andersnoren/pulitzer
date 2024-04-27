<?php
/**
 * Title: 404
 * Slug: pulitzer/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"21em"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center" id="page-not-found"><?php echo esc_html_x( 'Error 404', 'Heading for a webpage that is not found', 'pulitzer' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html_x( 'We can’t find the page you’re looking for. Go back to the front page, or try the search form below.', 'Message to convey that a webpage could not be found', 'pulitzer' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"240px"}} -->
<div class="wp-block-group">
	<!-- wp:pattern {"slug":"pulitzer/hidden-search"} /-->
</div>
<!-- /wp:group -->