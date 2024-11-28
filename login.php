<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Обязательный метатеги -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Основной CSS -->
    <link rel="stylesheet" href="lib/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="templates/css/style.css">
    <link rel="stylesheet" href="templates/css/loginregistration-form.css">

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Название вкладки -->
    <title>Авторизация</title>
</head>

<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
      <h2 class="text-center mb-4">Авторизация</h2>
      <!-- ЧТО ПИСАТЬ В ACTION??? -->
      <form action="core/login_logic.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Введите вашу почту" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Введите ваш пароль" required>
        </div>
        <button type="submit" class="btn-custom btn btn-primary w-100">Войти</button>
      </form>
      <p class="text-center mt-3 mb-0">
        Нет аккаунта? <a href="signup.php" class="registration-link">Зарегистрируйтесь здесь</a>.
      </p>
    </div>
  </div>

  <!-- Подключение скриптов -->
  <?php include_once 'templates/html/jsscript.html' ?>
</body>