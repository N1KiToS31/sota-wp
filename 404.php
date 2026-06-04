<?php get_header(); ?>

<main class="error-404">
  <section class="error-404__container">

    <h1 class="error-404__title">
      404
    </h1>

    <p class="error-404__text">
      Страница не найдена
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="error-404__link">
      Вернуться на главную
    </a>

  </section>
</main>

<?php get_footer(); ?>