<!-- Запускаем сессию -->
<?php require 'core/session_start.php' ?>

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

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Название вкладки -->
    <title>Актинидия "Пурпурная" (мини-киви) пурпурная 1 саженец</title>
</head>

<body>
    <!-- Код для шапки сайта -->
    <?php include_once 'core/header_logic.php' ?>
    
    <!-- Шапка сайта -->
    <?php include_once 'core/header.php' ?>

    <!-- Подключаем User_logic -->
    <?php include_once 'core/user_logic.php' ?>

    <!-- Скрипты -->
    <?php include_once 'templates/html/jsscript.html' ?>
</body>
</html>