<?php

$login = "Boba";
$username_email = "Giga";
$login_link = "";

// Проверяем, авторизован ли пользователь
if (isset($_SESSION['email'])) {
    $username_email = $_SESSION['email'];
    $login = "Выйти";
    $login_link = "logout.php";
} else {
    // print("not isset!");
    $username_email = "";
    $login = "Войти";
    $login_link = "login.php";
}
?>