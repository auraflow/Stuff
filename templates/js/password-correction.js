document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registration-form');
    if (form) {
      form.addEventListener('submit', function (event) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
  
        if (password !== confirmPassword) {
          event.preventDefault(); // Останавливаем отправку формы
          alert('Пароли не совпадают!'); // Показываем сообщение об ошибке
        }
      });
    }
});
  