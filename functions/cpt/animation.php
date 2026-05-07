<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wildbed_register_animation_cpt' ) ) {
    function wildbed_register_animation_cpt() {
        add_rewrite_tag( '%wildbed%', '([^/]+)', 'wildbed=' );

        $labels = [
            'name'               => __( 'Animation', 'wildbed' ),
            'singular_name'      => __( 'Animation', 'wildbed' ),
            'add_new'            => __( 'Ajouter', 'wildbed' ),
            'add_new_item'       => __( 'Ajouter une animation', 'wildbed' ),
            'edit_item'          => __( "Modifier l'animation", 'wildbed' ),
            'new_item'           => __( 'Nouvelle animation', 'wildbed' ),
            'view_item'          => __( "Voir l'animation", 'wildbed' ),
            'search_items'       => __( 'Rechercher des animations', 'wildbed' ),
            'not_found'          => __( 'Aucune animation trouvée', 'wildbed' ),
            'not_found_in_trash' => __( 'Aucune animation dans la corbeille', 'wildbed' ),
            'all_items'          => __( 'Toutes les animations', 'wildbed' ),
            'menu_name'          => __( 'Animations Nouveauté', 'wildbed' ),
        ];

        register_post_type(
            'animation',
            [
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'show_in_rest'       => true,
                'has_archive'        => 'animations',
                'rewrite'            => [
                    'slug'       => 'animations/%wildbed%',
                    'with_front' => false,
                ],
                'menu_icon'          => 'dashicons-universal-access',
                'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                'show_in_nav_menus'  => true,
                'show_in_admin_bar'  => true,
            ]
        );
    }
}
add_action( 'init', 'wildbed_register_animation_cpt' );

if ( ! function_exists( 'wildbed_get_animation_permalink_term_slug' ) ) {
    function wildbed_get_animation_permalink_term_slug( $post_id ) {
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

if ( ! function_exists( 'wildbed_filter_animation_permalink' ) ) {
    function wildbed_filter_animation_permalink( $post_link, $post ) {
        if ( ! $post instanceof WP_Post || 'animation' !== $post->post_type ) {
            return $post_link;
        }

        $term_slug = wildbed_get_animation_permalink_term_slug( $post->ID );

        return str_replace( '%wildbed%', $term_slug, $post_link );
    }
}
add_filter( 'post_type_link', 'wildbed_filter_animation_permalink', 10, 2 );

if ( ! function_exists( 'wildbed_animation_admin_columns' ) ) {
    function wildbed_animation_admin_columns( $columns ) {
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
add_filter( 'manage_animation_posts_columns', 'wildbed_animation_admin_columns' );

if ( ! function_exists( 'wildbed_animation_admin_column_content' ) ) {
    function wildbed_animation_admin_column_content( $column, $post_id ) {
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
add_action( 'manage_animation_posts_custom_column', 'wildbed_animation_admin_column_content', 10, 2 );
