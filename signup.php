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
    <title>Регистрация</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="max-width: 500px; width: 100%;">
        <h2 class="text-center mb-4">Регистрация</h2>
        <!-- ЧТО ПИСАТЬ В ACTION??? -->
        <form action="core/registration_logic.php" method="POST" id="registration-form">
            <!-- Email (Логин) -->
            <div class="mb-3">
            <label for="email" class="form-label">Email (Логин)</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Введите вашу почту" required>
            </div>

            <!-- Пароль -->
            <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Введите ваш пароль" required>
            </div>

            <!-- Подтвердите пароль -->
            <div class="mb-3">
            <label for="confirm-password" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Подтвердите ваш пароль" required>
            </div>

            <!-- ФИО -->
            <div class="mb-3">
            <label for="full-name" class="form-label">ФИО</label>
            <input type="text" class="form-control name-input" id="full-name" name="last_name" placeholder="Фамилия" required>
            <input type="text" class="form-control name-input" id="full-name" name="first_name" placeholder="Имя" required>
            <input type="text" class="form-control name-input" id="full-name" name="middle_name" placeholder="Отчество" required>
            </div>

            <!-- Группа крови (Выпадающий список) -->
            <div class="mb-3">
            <label for="blood-group" class="form-label">Группа крови</label>
            <select class="form-select" id="blood-group" name="blood_group" required>
                <option value="" selected disabled>Выберите вашу группу крови</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            </div>

            <!-- Ссылка на профиль Вконтакте -->
            <div class="mb-3">
            <label for="vk-profile" class="form-label">Ссылка на профиль Вконтакте</label>
            <input type="url" class="form-control" id="vk-profile" name="vk_profile" placeholder="Введите ссылку на ваш профиль Вконтакте" required>
            </div>

            <!-- Пол -->
            <div class="mb-3">
            <label class="form-label">Пол</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male" required>
                <label class="form-check-label" for="gender-male">Мужской</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female" required>
                <label class="form-check-label" for="gender-female">Женский</label>
            </div>
            </div>

            <!-- Кнопка регистрации -->
            <button type="submit" class="btn-custom btn btn-primary w-100">Зарегистрироваться</button>
        </form>
        <p class="text-center mt-3 mb-0">
            Уже есть аккаунт? <a href="login.php" class="login-link">Войдите здесь</a>.
        </p>
        </div>
    </div>

  <!-- Подключение скриптов -->
  <script src="templates/js/password-correction.js"></script>
  <?php include_once 'templates/html/jsscript.html' ?>
</body>