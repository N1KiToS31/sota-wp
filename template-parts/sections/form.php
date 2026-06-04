<section class="form">
  <div class="form__main">
    <h1 class="form__title">Собрать улей</h1>

    <form class="container__form">
      <h2 class="container__form-task-title">Задача:</h2>

      <input
        class="container__form-task-input"
        name="message"
        placeholder="опишите задачу в свободной форме"
      >
      <div class="error-message" data-error-for="message"></div>

      <label class="container__form-file">
        <input class="container__form-file-input" type="file">
        <span class="container__form-file-title">Прикрепить файл</span>
      </label>
      <div class="error-message" data-error-for="file"></div>

      <h2 class="container__form-contacts-title">контактные данные:</h2>

      <input
        class="container__form-contacts-name"
        name="name"
        placeholder="фио"
      >
      <div class="error-message" data-error-for="name"></div>

      <input
        class="container__form-contacts-company"
        name="company"
        placeholder="компания"
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
      >

      <div class="container__form-privacy">
        <p class="container__form-privacy-policy">
          Нажимая кнопку, вы соглашаетесь с 
          <a href="#">политикой конфиденциальности</a>
        </p>
      </div>

      <button class="container__form-button" type="submit">
        Отправить
      </button>
    </form>
  </div>
</section>