<?php

    // echo "Привет мир!";

    $server_ip = "127.0.0.1";
    $server_name = "root";
    $server_p = "";
    $server_db = "plants";
    $connection = mysqli_connect($server_ip, $server_name, $server_p, $server_db);  

    if ($connection == false) {
        echo "Ошибка подключения";
    }
    
    ?>