<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_aventure_taxonomy' ) ) {
    function wildbed_register_aventure_taxonomy() {
        $labels = [
            'name'              => __( 'Wildbed', 'wildbed' ),
            'singular_name'     => __( 'Wildbed', 'wildbed' ),
            'search_items'      => __( 'Rechercher des termes Wildbed', 'wildbed' ),
            'all_items'         => __( 'Tous les termes Wildbed', 'wildbed' ),
            'parent_item'       => __( 'Terme parent Wildbed', 'wildbed' ),
            'parent_item_colon' => __( 'Terme parent Wildbed :', 'wildbed' ),
            'edit_item'         => __( 'Modifier le terme Wildbed', 'wildbed' ),
            'update_item'       => __( 'Mettre à jour le terme Wildbed', 'wildbed' ),
            'add_new_item'      => __( 'Ajouter un terme Wildbed', 'wildbed' ),
            'new_item_name'     => __( 'Nouveau terme Wildbed', 'wildbed' ),
            'menu_name'         => __( 'Wildbed', 'wildbed' ),
        ];

        register_taxonomy(
            'wildbed',
            [ 'aventure' ],
            [
                'labels'            => $labels,
                'public'            => true,
                'hierarchical'      => true,
                'show_ui'           => true,
                'show_admin_column' => true,
                'show_in_rest'      => true,
                'show_in_quick_edit'=> true,
                'rewrite'           => [
                    'slug'       => 'aventures',
                    'with_front' => false,
                ],
            ]
        );
    }
}
add_action( 'init', 'wildbed_register_aventure_taxonomy' );

if ( ! function_exists( 'wildbed_register_default_terms' ) ) {
    function wildbed_register_default_terms() {
        if ( ! taxonomy_exists( 'wildbed' ) ) {
            return;
        }

        $terms = [
            'heritage' => __( 'Wild Bed Heritage', 'wildbed' ),
            'nature'   => __( 'Wild Bed Nature', 'wildbed' ),
            'animal'   => __( 'Wild Bed Animal', 'wildbed' ),
        ];

        foreach ( $terms as $slug => $name ) {
            if ( term_exists( $slug, 'wildbed' ) ) {
                continue;
            }

            wp_insert_term(
                $name,
                'wildbed',
                [
                    'slug' => $slug,
                ]
            );
        }
    }
}
add_action( 'init', 'wildbed_register_default_terms', 20 );
add_action( 'after_switch_theme', 'wildbed_register_default_terms' );
