<?php
/**
 * Title: Section media texte with BG 4
 * Slug: ng1-base/section-media-texte-with-bg-4
 * Categories: media,text
 * Keywords: text, media
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"metadata":{"name":"Section Media Texte With BG"},"align":"full","className":"section-media-texte-with-bg-4","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull section-media-texte-with-bg-4"><!-- wp:group {"metadata":{"name":"Section | Wrapper"},"align":"","className":"section-media-texte-with-bg-4__wrapper align-ultrawide","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}}},"backgroundColor":"base-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-media-texte-with-bg-4__wrapper align-ultrawide has-base-4-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s)"><!-- wp:media-text {"align":"full","mediaId":270,"mediaLink":"<?php echo home_url(); ?>/camping/frame-1022/","mediaType":"image","imageFill":true,"className":"no-padding-content ","style":{"spacing":{"padding":{"right":"var:preset|spacing|h-16-72","left":"var:preset|spacing|h-16-72","top":"var:preset|spacing|32-80","bottom":"var:preset|spacing|32-40"}}}} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill-element no-padding-content" style="padding-top:var(--wp--preset--spacing--32-80);padding-right:var(--wp--preset--spacing--h-16-72);padding-bottom:var(--wp--preset--spacing--32-40);padding-left:var(--wp--preset--spacing--h-16-72)"><figure class="wp-block-media-text__media"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/03/Frame-1022.jpg" alt="" class="wp-image-270 size-full" style="object-position:50% 50%"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|h-16-72","bottom":"var:preset|spacing|h-16-72"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--h-16-72);padding-bottom:var(--wp--preset--spacing--h-16-72)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|12"}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--12)"><strong>Insolites et confortables</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|32-40"}},"typography":{"lineHeight":"1.25"}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--12);margin-bottom:var(--wp--preset--spacing--32-40);line-height:1.25">Nos hébergements locatifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Envie de nature sans renoncer au confort ? Nos hébergements locatifs sont faits pour vous. Construits en bois et matériaux naturels, ils s'intègrent harmonieusement dans le paysage du camping et vous offrent tout le nécessaire pour des vacances douces et ressourçantes.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-spacing-1-5"} -->
<ul class="wp-block-list is-style-spacing-1-5"><!-- wp:list-item -->
<li><strong>Les tentes lodges&nbsp;: </strong>Spacieuses et bien équipées, avec coin cuisine, elles sont idéales pour les familles qui veulent l'expérience du camping sans la contrainte du matériel.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Les cabanes en bois&nbsp;: </strong>Nos trois cabanes bois sont équipées d'une douche privée, d'un mini-réfrigérateur, d'un micro-ondes, d'une bouilloire et de la vaisselle.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>La cabane simple&nbsp;:</strong> Parfaite pour un randonneur ou un couple, avec deux lits simples et l'essentiel pour une nuit au calme.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>La tente glamping&nbsp;: </strong>Pour ceux qui veulent l'ambiance nomade avec le confort en plus.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Les tentes bivouac&nbsp;:</strong> L'hébergement idéal pour les cyclo-randonneurs : simple, fonctionnel, et à deux pas de la Loire à Vélo.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|32-72","left":"var:preset|spacing|32-72","top":"var:preset|spacing|16","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--32-72);padding-bottom:0;padding-left:var(--wp--preset--spacing--32-72)"><!-- wp:html -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[ctv_product_list type="accommodation"]');
} else {
    echo '[ctv_product_list type="accommodation"]';
}
?>
<!-- /wp:html -->

<!-- wp:spacer {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->