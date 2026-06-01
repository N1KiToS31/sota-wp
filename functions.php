<?php

function studio_theme_assets() {
  wp_enqueue_style(
    'studio-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0'
  );

  wp_enqueue_style(
    'studio-hero',
    get_template_directory_uri() . '/assets/scss/hero.css',
    [],
    '1.0'
  );

  wp_enqueue_style(
    'studio-header',
    get_template_directory_uri() . '/assets/css/header.css',
    [],
    '1.0'
  );

  wp_enqueue_style(
    'studio-footer',
    get_template_directory_uri() . '/assets/scss/footer.css',
    [],
    '1.0'
  );

  wp_enqueue_script(
    'studio-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0',
    true
  );

  wp_enqueue_script(
    'studio-sota',
    get_template_directory_uri() . '/assets/js/sota.js',
    [],
    '1.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'studio_theme_assets');

add_filter('show_admin_bar', '__return_false');

?>