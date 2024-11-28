<?php
// Завершаем сессию
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Перенаправляем на страницу регистрации
// print("Exit!");
exit(); 
?>