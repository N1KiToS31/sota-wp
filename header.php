<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="hero-screen" id="heroScreen">
  <canvas class="sota-canvas" id="sotaCanvas"></canvas>

  <header class="site-header">
    <div class="site-header__inner">

      <nav class="site-nav">
        <a href="#services">Услуги</a>
        <a href="#cases">Кейсы</a>
        <a href="#about">О нас</a>
      </nav>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
        <img class="site-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Studio">
      </a>

      <a class="header__cta">
        <svg class="header__cta-bg" width="240" height="74" viewBox="0 0 240 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M119.944 0L239.889 18.5V55.5L119.944 74L-0.000183105 55.5V18.5L119.944 0Z" fill="white"/>
        </svg>

        <span class="header__cta-text">начать проект</span>
      </a>

    </div>
  </header>