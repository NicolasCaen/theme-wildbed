<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_animation_emplacement_taxonomy' ) ) {
    function wildbed_register_animation_emplacement_taxonomy() {
        $labels = [
            'name'              => __( 'Emplacements', 'wildbed' ),
            'singular_name'     => __( 'Emplacement', 'wildbed' ),
            'search_items'      => __( 'Rechercher des emplacements', 'wildbed' ),
            'all_items'         => __( 'Tous les emplacements', 'wildbed' ),
            'parent_item'       => __( 'Emplacement parent', 'wildbed' ),
            'parent_item_colon' => __( 'Emplacement parent :', 'wildbed' ),
            'edit_item'         => __( 'Modifier emplacement', 'wildbed' ),
            'update_item'       => __( 'Mettre à jour emplacement', 'wildbed' ),
            'add_new_item'      => __( 'Ajouter un emplacement', 'wildbed' ),
            'new_item_name'     => __( 'Nouvel emplacement', 'wildbed' ),
            'menu_name'         => __( 'Emplacements', 'wildbed' ),
        ];

        register_taxonomy(
            'animation_emplacement',
            [ 'animation' ],
            [
                'labels'             => $labels,
                'public'             => false,
                'publicly_queryable'  => true,  // ← accessible en REST filter
                'hierarchical'        => true,
                'show_ui'             => true,
                'show_admin_column'   => true,
                'show_in_rest'        => true,  // ← expose l'endpoint /wp-json/wp/v2/animation_emplacement
                'show_in_quick_edit'  => true,
                'rewrite'             => false,
    
            ]
        );
    }
}
add_action( 'init', 'wildbed_register_animation_emplacement_taxonomy' );

if ( ! function_exists( 'wildbed_register_default_animation_emplacement_terms' ) ) {
    function wildbed_register_default_animation_emplacement_terms() {
        if ( ! taxonomy_exists( 'animation_emplacement' ) ) {
            return;
        }

        $terms = [
            'nouveaute' => __( 'Nouveauté', 'wildbed' ),
            'animation' => __( 'Animation', 'wildbed' ),
            'archive' => __( 'Archivé', 'wildbed' )
        ];

        foreach ( $terms as $slug => $name ) {
            if ( term_exists( $slug, 'animation_emplacement' ) ) {
                continue;
            }

            wp_insert_term(
                $name,
                'animation_emplacement',
                [
                    'slug' => $slug,
                ]
            );
        }
    }
}
add_action( 'init', 'wildbed_register_default_animation_emplacement_terms', 20 );
add_action( 'after_switch_theme', 'wildbed_register_default_animation_emplacement_terms' );