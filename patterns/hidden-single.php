<?php
/**
 * Title: single
 * Slug: pulitzer/hidden-single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|100"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|100"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"
		style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-title {"level":1} /-->

			<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small","fontFamily":"system-sans-serif"} -->
			<div
				class="wp-block-group has-contrast-2-color has-text-color has-link-color has-system-sans-serif-font-family has-small-font-size">
				<!-- wp:post-date {"format":"M j, Y"} /-->

				<!-- wp:paragraph -->
				<p>•</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-terms {"term":"category"} /-->

				<!-- wp:paragraph -->
				<p>•</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"pulitzer/post-reading-time"}}}} -->
				<p>
					<?php echo __('[read time]', 'pulitzer');?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"full","layout":{"type":"constrained"}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-pill is-style-pulitzer-post-terms","fontSize":"x-small"} /-->

			<!-- wp:pattern {"slug":"pulitzer/hidden-single-sharing-row"} /-->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"pulitzer/hidden-comments"} /-->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"tagName":"nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<nav aria-label="Posts" class="wp-block-group">
			<!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_html_e( 'Previous:', 'pulitzer' ); ?> ","showTitle":true,"arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

			<!-- wp:post-navigation-link {"textAlign":"right","label":"<?php esc_html_e( 'Next:', 'pulitzer' ); ?> ","showTitle":true,"arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
		</nav>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->