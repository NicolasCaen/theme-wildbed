<?php
/**
 * Title: Bannière Accueil
 * Slug: ng1-base/banner-home
 * Categories: media
 * Keywords: media, banner
 * Block Types: core/cover
 * Inserter: true
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:cover {"url":"<?php echo home_url(); ?>/wp-content/uploads/2026/03/Ellipse-47-1024x485.jpg","id":256,"alt":"Vue du camping les patis","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"black-to-transparent","contentPosition":"bottom center","sizeSlug":"large","align":"full","className":"is-style-default  overflow-visible","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center is-style-default overflow-visible" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);min-height:100vh"><img class="wp-block-cover__image-background wp-image-256 size-large" alt="Vue du camping les patis" src="<?php echo home_url(); ?>/wp-content/uploads/2026/03/Ellipse-47-1024x485.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-black-to-transparent-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|h-16-56"},"blockGap":"var:preset|spacing|12"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--h-16-56)"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Camping les Pâtis</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Séjournez dans un camping à Amboise, au cœur des Châteaux de la Loire</p>
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

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->