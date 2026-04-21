<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_aventure_cpt' ) ) {
    function wildbed_register_aventure_cpt() {
        add_rewrite_tag( '%wildbed%', '([^/]+)', 'wildbed=' );

        $labels = [
            'name'               => __( 'Aventures', 'wildbed' ),
            'singular_name'      => __( 'Aventure', 'wildbed' ),
            'add_new'            => __( 'Ajouter', 'wildbed' ),
            'add_new_item'       => __( 'Ajouter une aventure', 'wildbed' ),
            'edit_item'          => __( 'Modifier l’aventure', 'wildbed' ),
            'new_item'           => __( 'Nouvelle aventure', 'wildbed' ),
            'view_item'          => __( 'Voir l’aventure', 'wildbed' ),
            'search_items'       => __( 'Rechercher des aventures', 'wildbed' ),
            'not_found'          => __( 'Aucune aventure trouvée', 'wildbed' ),
            'not_found_in_trash' => __( 'Aucune aventure dans la corbeille', 'wildbed' ),
            'all_items'          => __( 'Toutes les aventures', 'wildbed' ),
            'menu_name'          => __( 'Aventures', 'wildbed' ),
        ];

        register_post_type(
            'aventure',
            [
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'show_in_rest'       => true,
                'has_archive'        => 'aventures',
                'rewrite'            => [
                    'slug'       => 'aventures/%wildbed%',
                    'with_front' => false,
                ],
                'menu_icon'          => 'dashicons-palmtree',
                'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                'show_in_nav_menus'  => true,
                'show_in_admin_bar'  => true,
            ]
        );
    }
}
add_action( 'init', 'wildbed_register_aventure_cpt' );

if ( ! function_exists( 'wildbed_get_aventure_permalink_term_slug' ) ) {
    function wildbed_get_aventure_permalink_term_slug( $post_id ) {
        $terms = get_the_terms( $post_id, 'wildbed' );

        if ( is_array( $terms ) && ! empty( $terms ) ) {
            $term = array_shift( $terms );
            if ( $term && ! is_wp_error( $term ) ) {
                return $term->slug;
            }
        }

        return 'nature';
    }
}

if ( ! function_exists( 'wildbed_filter_aventure_permalink' ) ) {
    function wildbed_filter_aventure_permalink( $post_link, $post ) {
        if ( ! $post instanceof WP_Post || 'aventure' !== $post->post_type ) {
            return $post_link;
        }

        $term_slug = wildbed_get_aventure_permalink_term_slug( $post->ID );

        return str_replace( '%wildbed%', $term_slug, $post_link );
    }
}
add_filter( 'post_type_link', 'wildbed_filter_aventure_permalink', 10, 2 );

if ( ! function_exists( 'wildbed_aventure_admin_columns' ) ) {
    function wildbed_aventure_admin_columns( $columns ) {
        $new = [];
        foreach ( $columns as $key => $label ) {
            if ( 'title' === $key ) {
                $new['wildbed_thumbnail'] = __( 'Image', 'wildbed' );
            }
            $new[ $key ] = $label;
        }
        return $new;
    }
}
add_filter( 'manage_aventure_posts_columns', 'wildbed_aventure_admin_columns' );

if ( ! function_exists( 'wildbed_aventure_admin_column_content' ) ) {
    function wildbed_aventure_admin_column_content( $column, $post_id ) {
        if ( 'wildbed_thumbnail' !== $column ) {
            return;
        }

        if ( has_post_thumbnail( $post_id ) ) {
            echo get_the_post_thumbnail( $post_id, [ 60, 60 ], [ 'style' => 'width:60px;height:60px;object-fit:cover;border-radius:4px;' ] );
        } else {
            echo '<span style="display:inline-block;width:60px;height:60px;background:#f0f0f1;border-radius:4px;"></span>';
        }
    }
}
add_action( 'manage_aventure_posts_custom_column', 'wildbed_aventure_admin_column_content', 10, 2 );
