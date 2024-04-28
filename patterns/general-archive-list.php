<?php
/**
 * Title: Archive list
 * Slug: pulitzer/general-archive-list
 * Categories: pulitzer
 * Viewport width: 800
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-system-sans-serif-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:query {"queryId":0,"query":{"perPage":"100","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->

			<!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|contrast-5","width":"1px"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20)">
				<!-- wp:column {"verticalAlignment":"top","width":"30%","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%">
					<!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column is-vertically-aligned-top">
					<!-- wp:post-title {"isLink":true,"fontSize":"small"} /--></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->