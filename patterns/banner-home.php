<?php
/**
 * Title: Bannière Accueil
 * Slug: ng1-base/banner-home
 * Categories: media
 * Keywords: media, banner
 * Block Types: core/cover
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:cover {"url":"<?php echo home_url(); ?>/wp-content/uploads/2026/04/video-accueil-reduce.mp4","id":1176,"dimRatio":50,"isUserOverlayColor":true,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","gradient":"black-to-transparent","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","align":"full","className":"is-style-default  overflow-visible min-h-100svh","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center is-style-default overflow-visible min-h-100svh" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);min-height:100vh"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo home_url(); ?>/wp-content/uploads/2026/04/video-accueil-reduce.mp4" data-object-fit="cover"></video><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-black-to-transparent-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|56"},"blockGap":"var:preset|spacing|12"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--56)"><!-- wp:heading {"textAlign":"center","level":1,"className":"with-stars","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
<h1 class="wp-block-heading has-text-align-center with-stars has-accent-2-color has-text-color has-link-color">Camping les Pâtis</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
<p class="has-text-align-center has-accent-2-color has-text-color has-link-color">Séjournez dans un camping à Amboise, au cœur des Châteaux de la Loire</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:shortcode -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[ctv_search]');
} else {
    echo '[ctv_search]';
}
?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->