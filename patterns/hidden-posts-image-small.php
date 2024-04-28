<?php
/**
 * Title: posts-image-small
 * Slug: pulitzer/hidden-posts-image-small
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query">

	<!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->

		<!-- wp:columns {"verticalAlignment":null,"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile">
			<!-- wp:column {"verticalAlignment":"stretch","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-column is-vertically-aligned-stretch">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small","fontFamily":"system-sans-serif"} -->
					<div
						class="wp-block-group has-contrast-2-color has-text-color has-link-color has-system-sans-serif-font-family has-small-font-size">
						<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

						<!-- wp:paragraph -->
						<p>•</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"pulitzer/post-reading-time"}}}} -->
						<p><?php echo __('[read time]', 'pulitzer');?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"className":"is-style-pulitzer-clamp-lines-2"} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontFamily":"system-sans-serif"} -->
				<div class="wp-block-group has-system-sans-serif-font-family">
					<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"pulitzer/post-comments-count"}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast-2","className":"comments-count-icon","fontSize":"x-small"} -->
					<p class="comments-count-icon has-contrast-2-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php echo __('[number of comments]', 'pulitzer');?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"1em","layout":{"type":"constrained","justifyContent":"right"},"fontSize":"massive"} -->
			<div class="wp-block-column is-vertically-aligned-center has-massive-font-size" style="flex-basis:1em"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"1em","height":"1em"} /--></div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->
		
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:pattern {"slug":"pulitzer/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","textColor":"primary","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"label":"<?php esc_html_e( 'Previous', 'pulitzer' ); ?>"} /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next {"label":"<?php esc_html_e( 'Next', 'pulitzer' ); ?>"} /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->