<?php
/**
 * Title: Contact list
 * Slug: pulitzer/general-contact-list
 * Categories: pulitzer
 * Viewport width: 800
 */

$pulitzer_contact_methods = array(
	array(
		'label' => esc_html_x( 'Email', 'Contact pattern placeholder content', 'pulitzer' ),
		'value' => 'johnny@domain.com',
		'url'   => 'mailto:'
	),
	array(
		'label' => esc_html_x( 'Phone', 'Contact pattern placeholder content', 'pulitzer' ),
		'value' => '+1 (201) 555-55 55',
		'url'   => 'tel:'
	),
	array(
		'label' => esc_html_x( 'Twitter/X', 'Contact pattern placeholder content', 'pulitzer' ),
		'value' => '@johnny_appleseed',
		'url'   => 'https://twitter.com/'
	),
	array(
		'label' => esc_html_x( 'LinkedIn', 'Contact pattern placeholder content', 'pulitzer' ),
		'value' => '@johnny_appleseed',
		'url'   => 'https://linkedin.com/'
	),
	array(
		'label' => esc_html_x( 'Instagram', 'Contact pattern placeholder content', 'pulitzer' ),
		'value' => '@johnny_appleseed',
		'url'   => 'https://instagram.com/'
	),
);
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"},"fontSize":"small","fontFamily":"system-sans-serif"} -->
<div class="wp-block-group has-system-sans-serif-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">
	<?php
	foreach ( $pulitzer_contact_methods as $contact_method ) : 
		?>
		<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|contrast-5","width":"1px"}}}} -->
		<div class="wp-block-columns is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-width:1px;padding-top:var(--wp--preset--spacing--20)">

			<!-- wp:column {"width":"30%","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
			<div class="wp-block-column has-contrast-2-color has-text-color has-link-color" style="flex-basis:30%">
				<!-- wp:paragraph -->
				<p><?php echo $contact_method['label']; ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-column">
				<!-- wp:paragraph -->
				<p><a href="<?php echo esc_url( $contact_method['url'] ); ?>"><?php echo $contact_method['value']; ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<?php
	endforeach;
	?>

</div>
<!-- /wp:group -->