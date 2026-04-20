<?php
/**
 * Title: Section | bento Contact
 * Slug: ng1-base/section-bento-contact
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"align":"","className":"align-ultrawide section-bento-contact","layout":{"type":"constrained"}} -->
<div class="wp-block-group align-ultrawide section-bento-contact"><!-- wp:heading {"textAlign":"center","align":"full"} -->
<h2 class="wp-block-heading alignfull has-text-align-center">Nous contacter</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"className":"section-bento-contact__aside","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"grid","columnCount":1,"minimumColumnWidth":null}} -->
<div class="wp-block-group section-bento-contact__aside"><!-- wp:group {"className":"is-style-style-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12","right":"var:preset|spacing|12"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|16"},"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-style-2 has-link-color" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)"><!-- wp:paragraph -->
<p>Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="tel:33698102971">+33 6 98 10 29 71</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-style-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12","right":"var:preset|spacing|12"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|16"},"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-style-2 has-link-color" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)"><!-- wp:paragraph -->
<p>Email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="mailto:camping-lespatis@wildbed.fr">camping-lespatis@wildbed.fr</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-style-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|12","right":"var:preset|spacing|12"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|16"},"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}},"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-style-2 has-link-color" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--12)"><!-- wp:paragraph -->
<p>Réservation en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="mailto:camping-lespatis@wildbed.fr">Disponibles 24h/24</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"section-bento-contact__content","layout":{"type":"default"}} -->
<div class="wp-block-group section-bento-contact__content"><!-- wp:html -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[contact-form-7 id="6a81bf9" title="Formulaire de contact 1"]');
} else {
    echo '[contact-form-7 id="6a81bf9" title="Formulaire de contact 1"]';
}
?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->