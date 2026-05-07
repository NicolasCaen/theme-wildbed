<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_aventure_distance_taxonomy' ) ) {
    function wildbed_register_aventure_distance_taxonomy() {
        $labels = [
            'name'              => __( 'Distances', 'wildbed' ),
            'singular_name'     => __( 'Distance', 'wildbed' ),
            'search_items'      => __( 'Rechercher des distances', 'wildbed' ),
            'all_items'         => __( 'Toutes les distances', 'wildbed' ),
            'edit_item'         => __( 'Modifier la distance', 'wildbed' ),
            'update_item'       => __( 'Mettre à jour la distance', 'wildbed' ),
            'add_new_item'      => __( 'Ajouter une distance', 'wildbed' ),
            'new_item_name'     => __( 'Nouvelle distance', 'wildbed' ),
            'menu_name'         => __( 'Distances', 'wildbed' ),
        ];

        register_taxonomy(
            'distance',
            [ 'aventure' ],
            [
                'labels'            => $labels,
                'public'            => false,
                'publicly_queryable'  => true,  // ← accessible en REST filter
                'hierarchical'        => true,
                'show_ui'             => true,
                'show_admin_column'   => true,
                'show_in_rest'        => true,  // ← expose l'endpoint /wp-json/wp/v2/animation_emplacement
                'show_in_quick_edit'  => true,
                'rewrite'             => false,
            ],
            
        );
    }
}
add_action( 'init', 'wildbed_register_aventure_distance_taxonomy' );
