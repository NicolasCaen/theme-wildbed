<?php
/**
 * Title: Section media texte with BG 5
 * Slug: ng1-base/section-media-texte-with-bg-5
 * Categories: media,text
 * Keywords: text, media
 * Block Types: core/group
 */
?>
<?php $is_editor = is_admin() || wp_is_json_request() || (function_exists('get_current_screen') && get_current_screen() && get_current_screen()->is_block_editor()); ?>
<!-- wp:group {"metadata":{"name":"Section Media Texte With BG"},"align":"full","className":"section-media-texte-with-bg-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull section-media-texte-with-bg-5"><!-- wp:group {"metadata":{"name":"Section | Wrapper"},"align":"","className":"section-media-texte-with-bg-5__wrapper align-ultrawide is-style-style-2","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|s","topRight":"var:preset|border-radius|s","bottomLeft":"var:preset|border-radius|s","bottomRight":"var:preset|border-radius|s"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group section-media-texte-with-bg-5__wrapper align-ultrawide is-style-style-2" style="border-top-left-radius:var(--wp--preset--border-radius--s);border-top-right-radius:var(--wp--preset--border-radius--s);border-bottom-left-radius:var(--wp--preset--border-radius--s);border-bottom-right-radius:var(--wp--preset--border-radius--s)"><!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":270,"mediaLink":"<?php echo home_url(); ?>/camping/frame-1022/","mediaType":"image","imageFill":false,"className":"has-media-aspect-ratio-1-1 no-padding-content is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|h-16-72","left":"var:preset|spacing|h-16-72","top":"var:preset|spacing|32-80","bottom":"var:preset|spacing|32-40"}}}} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile has-media-aspect-ratio-1-1 no-padding-content is-style-default" style="padding-top:var(--wp--preset--spacing--32-80);padding-right:var(--wp--preset--spacing--h-16-72);padding-bottom:var(--wp--preset--spacing--32-40);padding-left:var(--wp--preset--spacing--h-16-72)"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|h-16-72","bottom":"var:preset|spacing|h-16-72"}}},"layout":{"type":"constrained"}} -->
<div id="emplacements" class="wp-block-group" style="padding-top:var(--wp--preset--spacing--h-16-72);padding-bottom:var(--wp--preset--spacing--h-16-72)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|12"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--12)"><strong>Le camping sous toile à Amboise</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|32-40"}},"typography":{"lineHeight":"1.25"}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--12);margin-bottom:var(--wp--preset--spacing--32-40);line-height:1.25">Nos emplacements</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vous avez votre propre tente, caravane ou camping-car ? Installez-vous sur l'un de nos 70 emplacements spacieux, ombragés ou ensoleillés selon vos préférences, répartis dans notre parc de 1,5 hectare en bord de rivière.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Chaque emplacement est pensé pour votre confort : pergola couverte avec table de jardin, frigo, plaque de cuisson et évier à disposition, bornes électriques, points d'eau répartis sur le site… Ici, le camping sous toile ne rime pas avec inconfort. Il rime avec liberté, nature et bonne humeur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour les randonneurs et cyclistes de passage sur la Loire à Vélo, nous proposons également des&nbsp;tentes bivouac prêtes à camper, louées à la nuitée avec services inclus, linge, petit-déjeuner, et même portage de bagages sur demande. Le label&nbsp;Accueil Vélo&nbsp;que nous portons fièrement, c'est aussi ça : une vraie attention pour ceux qui voyagent léger.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="<?php echo home_url(); ?>/wp-content/uploads/2026/03/Frame-1022.jpg" alt="" class="wp-image-270 size-full"/></figure></div>
<!-- /wp:media-text -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|32-72","left":"var:preset|spacing|32-72","top":"var:preset|spacing|16","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--32-72);padding-bottom:0;padding-left:var(--wp--preset--spacing--32-72)"><!-- wp:html -->
<?php 
if (!$is_editor) {
    echo do_shortcode('[ctv_product_list type="pitch"]');
} else {
    echo '[ctv_product_list type="pitch"]';
}
?>
<!-- /wp:html -->

<!-- wp:spacer {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->