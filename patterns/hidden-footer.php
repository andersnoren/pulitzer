<?php
/**
 * Title: footer
 * Slug: pulitzer/hidden-footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"},"border":{"top":{"color":"var:preset|color|contrast-5","width":"1px"},"bottom":{"color":"var:preset|color|contrast-5","width":"1px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"
		style="border-top-color:var(--wp--preset--color--contrast-5);border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-5);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"fontSize":"small"} -->
				<h2 class="wp-block-heading has-small-font-size">
					<?php esc_html_e('About', 'pulitzer');?>
				</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column">
				<!-- wp:paragraph -->
				<p>
					<?php esc_html_e('I’m Joseph Pulitzer, a Hungarian-American newspaper publisher. Known for revolutionizing journalism, I left a lasting mark in the form of the Pulitzer Prize.', 'pulitzer');?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>
					<?php _e('<a href="#"><em>Read more...</em></a>', 'pulitzer');?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<?php 
		/*
		 * Only output this section if the Jetpack Subscribe block is registered.
		 */
		if ( pulitzer_is_block_registered( 'jetpack/subscriptions' ) ) : 
			?>

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:heading {"fontSize":"small"} -->
					<h2 class="wp-block-heading has-small-font-size">
						<?php esc_html_e('Newsletter', 'pulitzer');?>
					</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:jetpack/subscriptions {"includeSocialFollowers":false,"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"Sign up","borderRadius":4,"spacing":16} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<?php
		endif;
		?>

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%">
				<!-- wp:heading {"fontSize":"small"} -->
				<h2 class="wp-block-heading has-small-font-size">
					<?php esc_html_e('Follow Me', 'pulitzer');?>
				</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":""} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#191716","className":"is-style-default"} -->
				<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
					<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->
					<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"<?php echo trailingslashit( esc_url( home_url() ) ); ?>feed/","service":"feed"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"x-small","fontFamily":"system-sans-serif"} -->
	<div class="wp-block-group has-contrast-2-color has-text-color has-link-color has-system-sans-serif-font-family has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.275em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"pulitzer/copyright-year"}}}} -->
			<p><?php esc_html_e('© [year]', 'pulitzer');?></p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p>
			<?php _e('Theme by <a href="https://andersnoren.se">Anders Norén</a>', 'pulitzer');?>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->