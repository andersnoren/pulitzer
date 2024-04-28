<?php
/**
 * Title: Comments
 * Slug: pulitzer/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
		<div class="wp-block-comments wp-block-comments-query-loop">
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--100)">
				<!-- wp:comments-title {"showPostTitle":false,"level":3} /-->

				<!-- wp:comment-template -->
				<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
				<div class="wp-block-columns is-not-stacked-on-mobile"
					style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0">
					<!-- wp:column {"width":"48px"} -->
					<div class="wp-block-column" style="flex-basis:48px"><!-- wp:avatar {"size":40} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group"><!-- wp:comment-author-name /-->

							<!-- wp:comment-date {"format":"M j, Y"} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:comment-content /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"hide-empty","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group hide-empty">
							<!-- wp:comment-reply-link {"className":"is-style-pulitzer-comment-reply-link"} /-->

							<!-- wp:comment-edit-link {"className":"is-style-pulitzer-comment-edit-link"} /-->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:comment-template -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|100"}}},"className":"hide-empty","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hide-empty" style="margin-bottom:var(--wp--preset--spacing--100)">
				<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:comments-pagination-previous /-->

				<!-- wp:comments-pagination-next /-->
				<!-- /wp:comments-pagination -->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
	</div>
	<!-- /wp:group -->