document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.container__form');

  if (!form) return;

  function clearErrors() {
    document.querySelectorAll('.error-message').forEach(el => {
      el.textContent = '';
    });

    document.querySelectorAll('.error').forEach(el => {
      el.classList.remove('error');
    });
  }

  function showError(fieldName, message) {
    const field = form.querySelector(`[name="${fieldName}"]`);
    const error = form.querySelector(`[data-error-for="${fieldName}"]`);

    if (field) field.classList.add('error');
    if (error) error.textContent = message;
  }

  form.addEventListener('submit', e => {
    clearErrors();

    let valid = true;

    const message = form.querySelector('[name="message"]').value.trim();
    const name = form.querySelector('[name="name"]').value.trim();
    const email = form.querySelector('[name="email"]').value.trim();
    const phone = form.querySelector('[name="phone"]').value.trim();

    const fileInput = form.querySelector('.container__form-file-input');

    // Описание задачи
    if (message.length < 10) {
      showError(
        'message',
        'Описание должно содержать минимум 10 символов'
      );
      valid = false;
    }

    // ФИО
    if (name.length < 2) {
      showError(
        'name',
        'ФИО должно содержать минимум 2 символа'
      );
      valid = false;
    }

    // Email или телефон
    if (!email && !phone) {
      showError(
        'email',
        'Укажите e-mail или телефон'
      );

      showError(
        'phone',
        'Укажите e-mail или телефон'
      );

      valid = false;
    }

    // Телефон
    if (phone) {
      const digits = phone.replace(/\D/g, '');

      if (digits.length < 11 || digits.length > 12) {
        showError(
          'phone',
          'Телефон должен содержать 11-12 цифр'
        );
        valid = false;
      }
    }

    // Файл
    if (fileInput && fileInput.files.length) {
      const file = fileInput.files[0];
      const maxSize = 15 * 1024 * 1024;

      if (file.size > maxSize) {
        const fileError = form.querySelector(
          '[data-error-for="file"]'
        );

        if (fileError) {
          fileError.textContent =
            'Размер файла не должен превышать 15 МБ';
        }

        valid = false;
      }
    }

    if (!valid) {
      e.preventDefault();
    }
  });
});