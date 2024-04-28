<?php
/**
 * Title: single
 * Slug: pulitzer/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|100"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|100"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-title {"level":1} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small","fontFamily":"system-sans-serif"} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-link-color has-system-sans-serif-font-family has-small-font-size"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph -->
<p><?php echo __('•', 'pulitzer');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:paragraph -->
<p><?php echo __('•', 'pulitzer');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('X min read', 'pulitzer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"full","layout":{"type":"constrained"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-pill is-style-pulitzer-post-terms","fontSize":"x-small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:jetpack/like {"className":"is-style-pulitzer-jetpack-like"} /-->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","iconColor":"contrast","iconColorValue":"#191716","iconBackgroundColor":"base","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<ul class="wp-block-jetpack-sharing-buttons has-normal-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"x","label":"X"} /-->

<!-- wp:jetpack/sharing-button {"service":"facebook","label":"Facebook"} /-->

<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--100)"><!-- wp:comments-title {"showPostTitle":false,"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><!-- wp:column {"width":"48px"} -->
<div class="wp-block-column" style="flex-basis:48px"><!-- wp:avatar {"size":40} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-reply-link {"className":"is-style-pulitzer-comment-reply-link"} /-->

<!-- wp:comment-edit-link {"className":"is-style-pulitzer-comment-edit-link"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--100)"><!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:group -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"tagName":"nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<nav aria-label="Posts" class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","label":"Previous: ","showTitle":true,"arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":"Next: ","showTitle":true,"arrow":"arrow","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->