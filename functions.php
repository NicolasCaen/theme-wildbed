<?php

include_once 'functions/enqueue-theme-scripts.php';
include_once 'functions/enqueue-gsap-scripts.php';
include_once 'functions/enqueue-variations.php';

include_once 'functions/remove-core-patterns.php';
include_once 'functions/load-patterns-json.php';
include_once 'functions/no-cache.php';

include_once 'functions/wp-au-top.php';

include_once 'functions/cpt/root.php';
include_once 'functions/taxonomy/root.php';

include_once 'functions/metabox/root.php';


add_filter( 'render_block', function( $block_content, $block ) {
    if ( $block['blockName'] === 'core/post-content' ) {
        // Retire la balise wrapper div extérieure
        $block_content = preg_replace( '/^<div[^>]*>(.*)<\/div>$/s', '$1', trim( $block_content ) );
    }
    return $block_content;
}, 10, 2 );