<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_aventure_type_taxonomy' ) ) {
    function wildbed_register_aventure_type_taxonomy() {
        $labels = [
            'name'              => __( 'Types d’aventure', 'wildbed' ),
            'singular_name'     => __( 'Type d’aventure', 'wildbed' ),
            'search_items'      => __( 'Rechercher des types d’aventure', 'wildbed' ),
            'all_items'         => __( 'Tous les types d’aventure', 'wildbed' ),
            'parent_item'       => __( 'Type parent', 'wildbed' ),
            'parent_item_colon' => __( 'Type parent :', 'wildbed' ),
            'edit_item'         => __( 'Modifier le type d’aventure', 'wildbed' ),
            'update_item'       => __( 'Mettre à jour le type d’aventure', 'wildbed' ),
            'add_new_item'      => __( 'Ajouter un type d’aventure', 'wildbed' ),
            'new_item_name'     => __( 'Nouveau type d’aventure', 'wildbed' ),
            'menu_name'         => __( 'Types', 'wildbed' ),
        ];

        register_taxonomy(
            'aventure_type',
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
                    'slug'       => 'aventures/types',
                    'with_front' => false,
                ],
            ]
        );
    }
}
add_action( 'init', 'wildbed_register_aventure_type_taxonomy' );

if ( ! function_exists( 'wildbed_register_default_aventure_type_terms' ) ) {
    function wildbed_register_default_aventure_type_terms() {
        if ( ! taxonomy_exists( 'aventure_type' ) ) {
            return;
        }

        $terms = [
            'chateau'    => __( 'Château', 'wildbed' ),
            'velo'       => __( 'Vélo', 'wildbed' ),
            'monument'   => __( 'Monument', 'wildbed' ),
            'randonnee'  => __( 'Randonnée', 'wildbed' ),
            'reserve'    => __( 'Réserve', 'wildbed' ),
            'eau'        => __( 'Eau', 'wildbed' ),
            'aquarium'   => __( 'Aquarium', 'wildbed' ),
            'ferme'      => __( 'Ferme', 'wildbed' ),
            'zoo'        => __( 'Zoo', 'wildbed' ),
        ];

        foreach ( $terms as $slug => $name ) {
            if ( term_exists( $slug, 'aventure_type' ) ) {
                continue;
            }

            wp_insert_term(
                $name,
                'aventure_type',
                [
                    'slug' => $slug,
                ]
            );
        }
    }
}
add_action( 'init', 'wildbed_register_default_aventure_type_terms', 20 );
add_action( 'after_switch_theme', 'wildbed_register_default_aventure_type_terms' );
