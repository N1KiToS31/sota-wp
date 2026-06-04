<section class="form">
  <div class="form__main">
    <h1 class="form__title">Собрать улей</h1>

    <form 
      class="container__form"
      action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
      method="post"
    >
      <input type="hidden" name="action" value="send_project_form">

      <h2 class="container__form-task-title">Задача:</h2>

      <input 
        id="task" 
        placeholder="опишите задачу в свободной форме"
        class="container__form-task-input"
        name="message"
        type="text"
      />

      <h2 class="container__form-contacts-title">
        контактные данные:
      </h2>

      <div class="container__form-contacts">
        <input
          class="container__form-contacts-name"
          name="name"
          placeholder="фио"
          type="text"
        >
        <div class="error-message" data-error-for="name"></div>

        <input
          class="container__form-contacts-company"
          name="company"
          placeholder="компания"
          type="text"
        >

        <input
          class="container__form-contacts-email"
          name="email"
          type="email"
          placeholder="e-mail"
        >
        <div class="error-message" data-error-for="email"></div>

        <input
          class="container__form-contacts-phone"
          name="phone"
          type="tel"
          placeholder="телефон"
        >
        <div class="error-message" data-error-for="phone"></div>

        <input
          class="container__form-url"
          name="site_url"
          placeholder="url(например, сайт компании)"
          type="url"
        >
      </div>

      <div class="container__form-privacy">
        <p class="container__form-privacy-policy">
          Нажимая кнопку, вы соглашаетесь с 
          <a href="<?php echo esc_url(home_url('/policy/')); ?>">
            политикой конфиденциальности
          </a>
        </p>
      </div>

      <button class="container__form-button" type="submit">
        Отправить
      </button>
    </form>
  </div>
</section>