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

  wp_enqueue_style(
    'studio-services',
    get_template_directory_uri() . '/assets/scss/services.css',
    [],
    '1.0'
  );

    wp_enqueue_style(
    'studio-cases',
    get_template_directory_uri() . '/assets/scss/cases.css',
    [],
    '1.0'
  );

  wp_enqueue_style(
    'variables', 
    get_template_directory_uri() . '/assets/scss/variables.css',
    [], 
    '1.0'
  );

  wp_enqueue_style(
    'fonts_unbounded',
    'https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap',
    false,
    null
  );

  wp_enqueue_style(
    'fonts_manrope', 
    'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap', 
    false, 
    null
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