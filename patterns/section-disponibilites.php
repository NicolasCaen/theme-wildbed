<?php
/**
 * Title: Section | disponibilités
 * Slug: ng1-base/section-disponibilites
 * Categories: widget
 * Keywords: disponibilite
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"align":"","className":"align-ultra align-ultrawide","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group align-ultra align-ultrawide"><!-- wp:heading {"align":"full"} -->
<h2 class="wp-block-heading alignfull">Vérifiez les disponibilités et réservez </h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[ctv_calendar product_id="94258"]');
} else {
    echo '[ctv_calendar product_id="94258"]';
}
?>
<!-- /wp:shortcode --></div>
<!-- /wp:group -->