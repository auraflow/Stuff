<?php
// Запускаем сессию
require 'session_start.php';

// Подключаем базу данных
require 'db_connect.php';

// Проверяем, был ли отправлен POST-запрос
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        // Подготовленный запрос для получения пользователя
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r ($user);

        if ($user) {
            // Проверяем пароль
            if (password_verify($password, $user['password'])) {
                // Пароль совпадает, сохраняем данные в сессии
                // $_SESSION['user_id'] = $user['id'];
                // $_SESSION['user_name'] = $user['full_name'];
                $_SESSION['email'] = $email;
                header('Location: ../index.php'); // Перенаправляем на главную страницу
                exit;
            } else {
                echo "Неверный пароль.";
                print(password_hash($password, PASSWORD_BCRYPT));
                // print($user['password']);
            }
        } else {
            echo "Пользователь с таким email не найден.";
        }
    } catch (PDOException $e) {
        die("Ошибка выполнения запроса: " . $e->getMessage());
    }
} else {
    die("Неверный запрос.");
}
?>