<?php
/**
 * Title: Comments
 * Slug: pulitzer/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:heading -->
	<h2><?php esc_html_e( 'Comments', 'pulitzer' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:comments-title {"level":3} /-->
	<!-- wp:comment-template -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group"
		style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1.25em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:avatar {"size":56} /-->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:comment-author-name /-->

				<!-- wp:comment-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:comment-content /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:comment-edit-link /-->

			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:comments-pagination-previous /-->
	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->
</div>
<!-- /wp:comments -->
