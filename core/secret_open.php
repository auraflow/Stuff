<?php
// Запускаем сессию
require 'session_start.php';

// Подключаем базу данных
require 'db_connect.php';

$secretOpen = "";

$stmt = $pdo->prepare("SELECT role FROM users WHERE email = :email");
$stmt->bindParam(':email', $_SESSION['email']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Если роль admin, сохраняем в переменной
$isAdmin = isset($user['role']) && $user['role'] == 1;
$_SESSION['role'] = $isAdmin;

if (isset($_GET['secret-access'])) {
    $_SESSION['secretopen'] = "opensecret";
    // var_dump($_SESSION);
    // exit();
} else {
    $_SESSION['secretopen'] = '';
}

header('Location: ../index.php'); // Перенаправляем на главную страницу
?>