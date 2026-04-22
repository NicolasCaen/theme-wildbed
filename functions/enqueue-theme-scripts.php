<?php

function enqueue_theme_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


function wildbed_editor_styles_setup() {
  add_theme_support('editor-styles');
  add_editor_style('editor.css');
}
add_action('after_setup_theme', 'wildbed_editor_styles_setup');

  function enqueue_menu_toggle_svg() {
    wp_enqueue_script('menu-toggle-custom', get_stylesheet_directory_uri() . '/assets/js/menu-toggle-custom.js', [], '', true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_menu_toggle_svg');

  function enqueue_menu_sub_width() {
    wp_enqueue_script('menu-sub-width', get_stylesheet_directory_uri() . '/assets/js/menu-sub-width.js', [], '', true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_menu_sub_width');


