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
    'studio-reset',
    get_template_directory_uri() . '/assets/scss/reset.css',
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
    'studio-form',
    get_template_directory_uri() . '/assets/scss/form.css',
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
      'studio-about',
      get_template_directory_uri() . '/assets/scss/about.css',
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
    'bee-animation', 
    get_template_directory_uri() . '/assets/scss/bee.css',
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

    wp_enqueue_script(
    'studio-form',
    get_template_directory_uri() . '/assets/js/form.js',
    [],
    '1.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'studio_theme_assets');

add_filter('show_admin_bar', '__return_false');

add_action('admin_post_nopriv_send_project_form', 'send_project_form');
add_action('admin_post_send_project_form', 'send_project_form');

function send_project_form() {
    $name = sanitize_text_field($_POST['name'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $site_url = esc_url_raw($_POST['site_url'] ?? '');
    $message = sanitize_text_field($_POST['message'] ?? '');

    /**
     * Telegram
     */
    $token = '8638133154:AAHVDOyVp4u8Pk6jIhcm6uHWmdx0uVu_VWQ';
    $chat_id = '1076544880';

    $text = "Новая заявка с сайта:\n\n";
    $text .= "Задача: {$message}\n\n";
    $text .= "ФИО: {$name}\n";
    $text .= "Компания: {$company}\n";
    $text .= "Email: {$email}\n";
    $text .= "Телефон: {$phone}\n";
    $text .= "Сайт: {$site_url}\n";

    $telegram_response = wp_remote_post("https://api.telegram.org/bot{$token}/sendMessage", [
        'body' => [
            'chat_id' => $chat_id,
            'text' => $text,
        ],
    ]);

    /**
     * Google Sheets
     */
    $google_script_url = 'https://script.google.com/macros/s/AKfycbzWhLNirggdzoax645qC9Sv3U90E0WeIjhFx8ozOqRnq6JcIYa2yEANdOWdpea24iwvJA/exec';

    $google_response = wp_remote_post($google_script_url, [
        'headers' => [
            'Content-Type' => 'application/json',
        ],
        'body' => wp_json_encode([
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            'site_url' => $site_url,
            'message' => $message,
        ]),
    ]);

    wp_redirect(home_url('/'));
    exit;
}

?>