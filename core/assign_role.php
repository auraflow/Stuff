<?php
// Запускаем сессию
require 'session_start.php';

// Подключаем базу данных
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['role'])) {
    $role = $_POST['role']; // Получаем роль из формы
    $email = $_SESSION['email']; // Берём email из текущей сессии

    // Проверяем, что роль корректна
    if (!in_array($role, ['1', '2'])) {
        $_SESSION['error'] = "Некорректная роль.";
        header('Location: ../index.php');
        exit();
    }

    try {
        // Обновляем роль пользователя
        $stmt = $pdo->prepare("UPDATE users SET role = :role WHERE email = :email");
        $stmt->execute(['role' => $role, 'email' => $email]);

        // Проверяем, обновилась ли запись
        if ($stmt->rowCount() > 0) {
            $_SESSION['success'] = "Роль успешно обновлена!";
        } else {
            $_SESSION['error'] = "Не удалось обновить роль. Пользователь не найден.";
        }
    } catch (PDOException $e) {
        // Логируем ошибку
        error_log("Ошибка базы данных: " . $e->getMessage());
        $_SESSION['error'] = "Произошла ошибка при обновлении роли.";
    }

    // Перенаправляем пользователя обратно
    header('Location: ../index.php');
    exit();
} else {
    $_SESSION['error'] = "Некорректные данные формы.";
    header('Location: ../index.php');
    exit();
}
