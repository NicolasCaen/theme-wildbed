<?php
/**
 * Title: Section labells
 * Slug: ng1-base/section-labels
 * Categories: media
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"align":"","className":"align-s","style":{"spacing":{"padding":{"right":"var:preset|spacing|16","left":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|32-40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group align-s" style="padding-right:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Nos labels &amp; distinctions</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":5,"linkTo":"none","sizeSlug":"full","aspectRatio":"1","className":"is-style-square-label","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-5 is-cropped is-style-square-label" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0"><!-- wp:image {"id":925,"aspectRatio":"1","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/routard.png" alt="" class="wp-image-925" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0;aspect-ratio:1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":923,"aspectRatio":"1","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/image-5.png" alt="" class="wp-image-923" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0;aspect-ratio:1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":922,"aspectRatio":"1","sizeSlug":"full","linkDestination":"none","className":"bg-white is-style-default","style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border bg-white is-style-default"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/image-4.png" alt="" class="wp-image-922" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0;aspect-ratio:1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":921,"aspectRatio":"1","sizeSlug":"full","linkDestination":"none","className":"bg-trip"} -->
<figure class="wp-block-image size-full bg-trip"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/image-3.png" alt="" class="wp-image-921" style="aspect-ratio:1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":924,"aspectRatio":"1","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/unnamed-1.png" alt="" class="wp-image-924" style="aspect-ratio:1"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:group {"className":"has-justify-center-mobile has-flex-wrap-mobile","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}},"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24","left":"var:preset|spacing|h-32","right":"var:preset|spacing|h-32"}}},"backgroundColor":"accent-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-justify-center-mobile has-flex-wrap-mobile has-accent-2-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s);padding-top:var(--wp--preset--spacing--24);padding-right:var(--wp--preset--spacing--h-32);padding-bottom:var(--wp--preset--spacing--24);padding-left:var(--wp--preset--spacing--h-32)"><!-- wp:html -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[trustindex no-registration=google]');
} else {
    echo '[trustindex no-registration=google]';
}
?>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"txt-one-line with-chevron"} -->
<div class="wp-block-button txt-one-line with-chevron"><a class="wp-block-button__link wp-element-button" href="https://admin.trustindex.io/api/googleReview?place-id=ChIJ-70cd6LL_EcRFQ75OuKm3G4">Vois les avis clients</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->