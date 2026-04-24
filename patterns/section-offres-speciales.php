<?php
/**
 * Title: Ofrres spéciales
 * Slug: ng1-base/section-offres-speciales
 * Keywords: offres
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"align":"","className":"section-offres-speciales align-ultrawide","layout":{"type":"default"}} -->
<div class="wp-block-group section-offres-speciales align-ultrawide"><!-- wp:heading -->
<h2 class="wp-block-heading">Offres spéciales</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[ctv_offers display="classic"]');
} else {
    echo '[ctv_offers display="classic"]';
}
?>
<!-- /wp:html --></div>
<!-- /wp:group -->