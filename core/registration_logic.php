<?php
// Запускаем сессию
require 'session_start.php';

require 'db_connect.php'; // Подключаем базу данных

// Переменные для сохранения данных из формы
$email = '';
$last_name = '';
$first_name = '';
$middle_name = '';
$vk_link = '';
$blood_type = '';
$gender = '';
$role = '';

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $last_name = $_POST['last_name'] ?? '';;
    $first_name = $_POST['first_name'] ?? '';;
    $middle_name = $_POST['middle_name'] ?? '';;
    $vk_link = $_POST['vk_profile'] ?? '';
    $blood_type = $_POST['blood_group'] ?? '';
    $gender = $_POST['gender'] ?? '';

    // Проверяем совпадение паролей
    if ($password !== $confirm_password) {
        echo "Пароли не совпадают.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Проверка валидности email
        echo "Некорректный email.";
    } else {
        // Проверяем, существует ли уже пользователь с таким email
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        if ($stmt->fetchColumn() > 0) {
            echo "Пользователь с таким email уже существует.";
        } else {
            // Хэшируем пароль
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Сохраняем пользователя в базу данных
            $stmt = $pdo->prepare("INSERT INTO users (email, password, last_name, first_name, middle_name, vk_link, blood_type, gender) 
                                   VALUES (:email, :password, :last_name, :first_name, :middle_name, :vk_link, :blood_type, :gender)");
            $stmt->execute([
                ':email' => $email,
                ':password' => $hashed_password,

                ':last_name' => $last_name,
                ':first_name' => $first_name,
                ':middle_name' => $middle_name,

                ':vk_link' => $vk_link,
                ':blood_type' => $blood_type,
                ':gender' => $gender
            ]);

            // Авторизуем пользователя
            $_SESSION['email'] = $email;

            // echo "Регистрация прошла успешно! Вы вошли как " . htmlspecialchars($email) . ". <a href='logout.php'>Выйти</a>";
            header("Location: ../index.php");
            exit();
        }
    }
}
?>