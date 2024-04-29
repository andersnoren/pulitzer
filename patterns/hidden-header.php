<?php
/**
 * Title: header
 * Slug: pulitzer/hidden-header
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|contrast-5","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--contrast-5);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile">
		
		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"level":0} /-->
					<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:navigation {"hasIcon":false,"layout":{"type":"flex","orientation":"horizontal"}} -->

				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'pulitzer' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Profile', 'pulitzer' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Newsletter', 'pulitzer' ); ?>","url":"#"} /-->

				<!-- /wp:navigation -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"1em","layout":{"type":"constrained","justifyContent":"right"},"fontSize":"massive"} -->
		<div class="wp-block-column has-massive-font-size" style="flex-basis:1em">
			<!-- wp:site-logo {"width":128,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->