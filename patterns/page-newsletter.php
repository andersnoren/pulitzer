<?php
/**
 * Title: Page: Newsletter
 * Slug: pulitzer/page-newsletter
 * Categories: pulitzer, pulitzer-pages
 * Viewport width: 800
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"452px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'The Newsletter', 'pulitzer' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Join me for a biweekly newsletter delving into the dynamic world of journalism,
			examining its challenges, innovations, and the pursuit of truth in today’s digital landscape.', 'pulitzer' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><em><?php esc_html_e( 'Note: The newsletter form will only show up if the Jetpack plugin is installed and the Subscriptions feature is enabled.', 'pulitzer' ); ?></em></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"398px"}} -->
	<div class="wp-block-group">
		<?php if ( pulitzer_is_block_registered( 'jetpack/subscriptions' ) ) : ?>
		<!-- wp:jetpack/subscriptions {"showSubscribersTotal":true,"includeSocialFollowers":false,"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"Sign up","borderRadius":4,"spacing":16} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->