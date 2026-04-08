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
