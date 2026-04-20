<?php
/**
 * Metabox: MétaWildbed
 * Author : GEHIN Nicolas
 */

// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

class UGM_metawildbed extends UGM_Metabox {

    private static $instance = null;
    private $metabox_id = 'mtawildbed_0';
    private $metabox_title = 'MétaWildbed';
    private $post_types = array();
    private $taxonomies = array('wildbed');

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        if (!empty($this->post_types)) {
            add_action('add_meta_boxes', array($this, 'add_metabox'));
            add_action('save_post', array($this, 'save_metabox'));
        }
        if (!empty($this->taxonomies)) {
            foreach ($this->taxonomies as $taxonomy) {
                add_action($taxonomy . '_add_form_fields', array($this, 'render_taxonomy_add_fields'), 10, 1);
                add_action($taxonomy . '_edit_form_fields', array($this, 'render_taxonomy_edit_fields'), 10, 2);
                add_action('created_' . $taxonomy, array($this, 'save_taxonomy_meta'), 10, 2);
                add_action('edited_' . $taxonomy, array($this, 'save_taxonomy_meta'), 10, 2);
            }
        }
        add_action('init', array($this, 'register_meta_fields'));
    }

    public function add_metabox() {
        foreach ($this->post_types as $post_type) {
            add_meta_box(
                $this->metabox_id,
                $this->metabox_title,
                array($this, 'render_metabox'),
                $post_type,
                'normal',
                'default'
            );
        }
    }

    public function register_meta_fields() {
        foreach ($this->post_types as $post_type) {
            register_post_meta($post_type, 'titre', array(
                'single' => true,
                'type' => 'string',
                'show_in_rest' => true,
                'auth_callback' => function() { return current_user_can('edit_posts'); }
            ));
        }
        foreach ($this->taxonomies as $taxonomy) {
            register_term_meta($taxonomy, 'titre', array(
                'single' => true,
                'type' => 'string',
                'show_in_rest' => true,
                'auth_callback' => function() { return current_user_can('edit_posts'); }
            ));
        }
    }

    public function render_metabox($post) {
        wp_nonce_field('save_metabox_' . $this->metabox_id, 'metabox_nonce_' . $this->metabox_id);
        echo '<table class="form-table">';
        // Champ: titre
        $value_titre = get_post_meta($post->ID, 'titre', true);
        echo '<tr>';
        echo '<th scope="row"><label for="titre">titre</label></th>';
        echo '<td>';
        echo '<input type="text" id="titre" name="titre" value="' . esc_attr($value_titre) . '" class="regular-text" />';
        echo '<p class="description">Titre de substitution</p>';
        echo '</td>';
        echo '</tr>';

        echo '</table>';
    }

    public function save_metabox($post_id) {
        // Vérifications de sécurité
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!isset($_POST['metabox_nonce_' . $this->metabox_id])) return;
        if (!wp_verify_nonce($_POST['metabox_nonce_' . $this->metabox_id], 'save_metabox_' . $this->metabox_id)) return;
        if (!current_user_can('edit_post', $post_id)) return;

        // Sauvegarder: titre
        if (isset($_POST['titre'])) {
            $value_titre = sanitize_text_field(wp_unslash($_POST['titre']));
        } else {
            $value_titre = '';
        }
        update_post_meta($post_id, 'titre', $value_titre);

    }

    public function render_taxonomy_add_fields($taxonomy) {
        if (!in_array($taxonomy, $this->taxonomies, true)) return;
        wp_nonce_field('save_tax_metabox_' . $this->metabox_id, 'tax_nonce_' . $this->metabox_id);
        echo '<div class="form-field ugm-taxonomy-metabox">';
        echo '<h3>' . esc_html($this->metabox_title) . '</h3>';
        echo '<div class="form-field" data-ugm-binding=\"1\">';
        echo '<label for="titre">titre</label>';
        $this->render_taxonomy_field('titre', 'text', '');
        echo '<p class="description">Titre de substitution</p>';
        echo '</div>';
        echo '</div>';
    }

    public function render_taxonomy_edit_fields($term, $taxonomy) {
        if (!in_array($taxonomy, $this->taxonomies, true)) return;
        wp_nonce_field('save_tax_metabox_' . $this->metabox_id, 'tax_nonce_' . $this->metabox_id);
        echo '<tr class="form-field"><th colspan="2"><h3>' . esc_html($this->metabox_title) . '</h3></th></tr>';
        $value_titre = get_term_meta($term->term_id, 'titre', true);
        echo '<tr class="form-field" data-ugm-binding=\"1\">';
        echo '<th scope="row"><label for="titre">titre</label></th>';
        echo '<td>';
        $this->render_taxonomy_field('titre', 'text', $value_titre);
        echo '<p class="description">Titre de substitution</p>';
        echo '</td></tr>';
    }

    private function render_taxonomy_field($name, $type, $value = '', $options = array()) {
        switch ($type) {
            case 'text':
            case 'email':
            case 'url':
                echo '<input type="' . esc_attr($type) . '" id="' . esc_attr($name) . '" name="' . esc_attr($name) . '" value="' . esc_attr($value) . '" class="regular-text" />';
                break;
            case 'textarea':
                echo '<textarea id="' . esc_attr($name) . '" name="' . esc_attr($name) . '" rows="5" cols="50" class="large-text">' . esc_textarea($value) . '</textarea>';
                break;
            case 'number':
                echo '<input type="number" id="' . esc_attr($name) . '" name="' . esc_attr($name) . '" value="' . esc_attr($value) . '" class="small-text" />';
                break;
            case 'checkbox':
                echo '<input type="checkbox" id="' . esc_attr($name) . '" name="' . esc_attr($name) . '" value="1"' . checked($value, '1', false) . ' />';
                break;
            case 'select':
                echo '<select id="' . esc_attr($name) . '" name="' . esc_attr($name) . '">';
                if (!empty($options)) {
                    foreach ($options as $opt_val => $opt_label) {
                        echo '<option value="' . esc_attr($opt_val) . '"' . selected($value, $opt_val, false) . '>' . esc_html($opt_label) . '</option>';
                    }
                }
                echo '</select>';
                break;
            case 'gallery':
                $ids = array_filter(array_map('absint', array_filter(array_map('trim', explode(',', (string)$value)))));
                echo '<div class="ugm-gallery-field" data-input="#' . esc_attr($name) . '">';
                echo '<button type="button" class="button ugm-gallery-select">' . esc_html__('Choisir des images', 'textdomain') . '</button>';
                echo '<ul class="ugm-gallery-list" data-name="' . esc_attr($name) . '">';
                if (!empty($ids)) {
                    foreach ($ids as $att_id) {
                        $thumb = wp_get_attachment_image($att_id, array(80,80), true);
                        if ($thumb) {
                            echo '<li class="ugm-gallery-item" data-id="' . esc_attr($att_id) . '">';
                            echo '<span class="ugm-thumb">' . $thumb . '</span>';
                            echo '<button type="button" class="button-link ugm-remove" aria-label="' . esc_attr__('Retirer', 'textdomain') . '">&times;</button>';
                            echo '</li>';
                        }
                    }
                }
                echo '</ul>';
                echo '<input type="hidden" id="' . esc_attr($name) . '" name="' . esc_attr($name) . '" value="' . esc_attr(implode(',', $ids)) . '" />';
                echo '</div>';
                break;
        }
    }

    public function save_taxonomy_meta($term_id, $tt_id = 0) {
        if (!isset($_POST['tax_nonce_' . $this->metabox_id])) return;
        if (!wp_verify_nonce($_POST['tax_nonce_' . $this->metabox_id], 'save_tax_metabox_' . $this->metabox_id)) return;

        if (isset($_POST['titre'])) {
            $value_titre = sanitize_text_field(wp_unslash($_POST['titre']));
        } else {
            $value_titre = '';
        }
        update_term_meta($term_id, 'titre', $value_titre);

    }

}

// Initialiser
$ugm_should_load = true;
if (class_exists('UpGutenbergMetabox')) {
    $ugm_sources = get_option('ugm_metabox_sources', array());
    $ugm_source = isset($ugm_sources['mtawildbed_0']) ? $ugm_sources['mtawildbed_0'] : 'plugin';
    $ugm_should_load = ($ugm_source === 'theme');
}
if ($ugm_should_load) {
    UGM_metawildbed::get_instance();
}
