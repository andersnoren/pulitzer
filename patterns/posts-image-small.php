<?php
/**
 * Title: posts-image-small
 * Slug: pulitzer/posts-image-small
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":null,"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"stretch","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small","fontFamily":"system-sans-serif"} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-link-color has-system-sans-serif-font-family has-small-font-size"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph -->
<p><?php echo __('•', 'pulitzer');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('X min read', 'pulitzer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"className":"is-style-pulitzer-clamp-lines-2"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"128px"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:template-part {"slug":"pagination"} /--></div>
<!-- /wp:query -->