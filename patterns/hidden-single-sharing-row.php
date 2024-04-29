<?php
/**
 * Title: single-sharing-row
 * Slug: pulitzer/hidden-single-sharing-row
 * Categories: hidden
 * Inserter: no
 */

/*
 * Only output this section if the Jetpack Like or Sharing blocks is registered.
 */
if ( pulitzer_is_block_registered( 'jetpack/like' ) || pulitzer_is_block_registered( 'jetpack/sharing-buttons' ) ) : 
	?>
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group">

		<?php if ( pulitzer_is_block_registered( 'jetpack/like' ) ) : ?>
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"6px"}}}} -->
			<div class="wp-block-group" style="padding-top:6px">
				<!-- wp:jetpack/like /-->
			</div>
			<!-- /wp:group -->
		<?php endif; ?>

		<?php if ( pulitzer_is_block_registered( 'jetpack/sharing-buttons' ) ) : ?>
			<!-- wp:jetpack/sharing-buttons {"styleType":"icon","iconColor":"contrast","iconColorValue":"#191716","iconBackgroundColor":"base","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
			<ul class="wp-block-jetpack-sharing-buttons has-normal-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list">
				<!-- wp:jetpack/sharing-button {"service":"x","label":"X"} /-->
				<!-- wp:jetpack/sharing-button {"service":"facebook","label":"Facebook"} /-->
				<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /-->
			</ul>
			<!-- /wp:jetpack/sharing-buttons -->
		<?php endif; ?>

	</div>
	<!-- /wp:group -->
	<?php
endif;
?>
