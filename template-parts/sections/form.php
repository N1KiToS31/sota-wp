<section class="form">
  <form 
    action="<?php echo esc_url(admin_url('admin-post.php')); ?>" 
    method="post"
    class="container__form"
  >

    <input type="hidden" name="action" value="send_project_form">

    <h1 class="container__form-task-title">
      Задача
    </h1>

    <input 
      id="task" 
      placeholder="опишите задачу в свободной форме"
      class="container__form-task-input"
      name="message"
      type="text"
    />

    <h1 class="container__form-contacts-title">
      контактные данные:
    </h1>

    <div class="container__form-contacts">
      <input
        placeholder="ФИО"
        type="text" 
        class="container__form-contacts-name"
        name="name"
        required
      >

      <input
        placeholder="Компания"
        type="text" 
        class="container__form-contacts-company"
        name="company"
      >

      <input
        placeholder="e-mail"
        type="email"
        class="container__form-contacts-mail"
        name="email"
      >

      <input
        placeholder="телефон"
        type="tel" 
        class="container__form-contacts-phone"
        name="phone"
        required
      >

      <input
        placeholder="url(например, сайт компании)"
        type="url" 
        class="container__form-contacts-url"
        name="site_url"
      >
    </div>

    <span class="container__form-about">
      нажимая кнопку „отправить”, вы даете 
      <a href="#" class="container__form-about-href">
        согласие 
      </a>
      на обработку персональных данных.
      <a href="#" class="container__form-about-href">
        политика обработки данных
      </a>
    </span>

    <button type="submit" class="container__form-btn">
      <img src="#" alt="" class="container__form-btn-img">
      отправить
    </button>

  </form>
</section>