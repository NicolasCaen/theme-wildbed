<?php
/**
 * Fichier principal d'inclusion des metaboxes
 * Author : GEHIN Nicolas
 */

// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

// Inclure la classe de base
if (file_exists(__DIR__ . '/class-ugm-metabox.php')) {
    include_once __DIR__ . '/class-ugm-metabox.php';
}

// Inclure les metaboxes
include_once __DIR__ . '/inc/mtawildbed_0.php';

add_action('admin_enqueue_scripts', function($hook) {
    $allowed = array('post.php', 'post-new.php', 'edit-tags.php', 'term.php');
    if (!in_array($hook, $allowed, true)) {
        return;
    }
    if (defined('UGM_PLUGIN_VERSION')) {
        return;
    }
    if (wp_script_is('up-gutenberg-metabox-binding-copy', 'enqueued') || wp_script_is('up-gutenberg-metabox-binding-copy', 'registered')) {
        return;
    }
    $base = get_stylesheet_directory_uri() . '/functions/metabox/assets/';
    wp_enqueue_script('ugm-metabox-binding-copy', $base . 'js/metabox-binding-copy.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('ugm-metabox-binding-copy', $base . 'css/metabox-binding-copy.css', array(), '1.0.0');
    
    // Gallery assets pour les champs de type gallery
    wp_enqueue_media();
    wp_enqueue_script('ugm-metabox-gallery', $base . 'js/metabox-gallery.js', array('jquery', 'jquery-ui-sortable'), '1.0.0', true);
    wp_enqueue_style('ugm-metabox-gallery', $base . 'css/metabox-gallery.css', array(), '1.0.0');
    wp_localize_script('ugm-metabox-gallery', 'ugm_gallery_i18n', array(
        'selectImages' => __('Choisir des images', 'textdomain'),
        'remove' => __('Retirer', 'textdomain'),
    ));
});

// Source de binding pour les term meta
add_action('init', function() {
    if (!function_exists('register_block_bindings_source')) {
        return;
    }
    if (defined('UGM_PLUGIN_VERSION')) {
        return;
    }
    register_block_bindings_source('ugm/term-meta', array(
        'label' => __('Term Meta', 'textdomain'),
        'get_value_callback' => function($source_args, $block_instance, $attribute_name) {
            if (empty($source_args['key'])) return null;
            $meta_key = $source_args['key'];
            if (is_tax() || is_category() || is_tag()) {
                $term = get_queried_object();
                if ($term instanceof \WP_Term) {
                    return get_term_meta($term->term_id, $meta_key, true);
                }
            }
            if (!empty($source_args['term_id'])) {
                return get_term_meta(absint($source_args['term_id']), $meta_key, true);
            }
            return null;
        },
        'uses_context' => array('postId', 'postType'),
    ));
});
