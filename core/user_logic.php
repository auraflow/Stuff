<?php

// var_dump($_SESSION);

// Проверяем, авторизован ли пользователь
if (isset($_SESSION['email'])) {
    include 'templates/html/main.html';
    
    if ($_SESSION['role'] == 1 && $_SESSION['secretopen'] == "opensecret") {
        include 'templates/html/filter.html';
    }
    
    include 'core/footer.php';
} else {
    include_once 'templates/html/please_login.html';
}
?>