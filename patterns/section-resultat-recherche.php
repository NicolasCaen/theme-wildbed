<?php
/**
 * Title: Section | Resultats de recherche
 * Slug: ng1-base/section-resultat-recherche
 */
?>
<!-- wp:spacer {"height":"var:preset|spacing|32-48","metadata":{"name":"Espacement clamp(2rem, 1.4444rem + 1.7778vw, 3rem)","categories":["layout"],"patternName":"ng1-base/spacer-32-48"},"className":"is-style-spacer-32-48"} -->
<div style="height:var(--wp--preset--spacing--32-48)" aria-hidden="true" class="wp-block-spacer is-style-spacer-32-48"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","className":"entry-content template-archive"} -->
<main class="wp-block-group entry-content template-archive"><!-- wp:query {"queryId":0,"query":{"perPage":99,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"className":"query-loop__items","layout":{"type":"constrained","contentSize":"768px","wideSize":"970px"}} -->
<div class="wp-block-query query-loop__items"><!-- wp:post-template {"className":"query-loop__item","style":{"spacing":{"blockGap":"var:preset|spacing|24"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Lire la suite","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"query-loop__pagination"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"className":"query-loop__no-result"} -->
<!-- wp:post-title /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->