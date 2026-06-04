<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( is_front_page() ) : ?>
  <div class="hero-screen" id="heroScreen">
    <canvas class="sota-canvas" id="sotaCanvas"></canvas>
<?php endif; ?>

<?php
$services_link = is_front_page() ? '#services' : home_url('/#services');
$cases_link    = is_front_page() ? '#cases' : home_url('/#cases');
$about_link    = is_front_page() ? '#about' : home_url('/#about');
?>

  <header class="site-header" id = 'top'>
    <div class="site-header__inner">

      <nav class="site-nav">
        <a href="<?php echo esc_url($services_link); ?>">Услуги</a>
        <a href="<?php echo esc_url($cases_link); ?>">Кейсы</a>
        <a href="<?php echo esc_url($about_link); ?>">О нас</a>
      </nav>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
        <img class="site-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Studio">
      </a>

      <a class="header__cta" href="<?php echo esc_url(home_url('/form')); ?>">
        <svg class="header__cta-bg" width="240" height="74" viewBox="0 0 240 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M119.944 0L239.889 18.5V55.5L119.944 74L-0.000183105 55.5V18.5L119.944 0Z" fill="white"/>
        </svg>

        <span class="header__cta-text">начать проект</span>
      </a>

    </div>
  </header>