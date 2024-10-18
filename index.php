<!-- Подключение .php файла с подключением БД -->
<?php

include_once("databases.php");

$sql_base = "SELECT * FROM plants_field";
$result = mysqli_query($connection, $sql_base);

// $url = 'http://localhost/inc/';

while ($row = mysqli_fetch_assoc($result)) { 
    print_r($row);
    echo"<br>";
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Кодировка -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Название сайта -->
    <title>Растения</title>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS file --> 
    <link rel="stylesheet" href="static/styles/mainpage.css">
</head>

<body>

    <div class="base-container">
        <div class="logo-container">
            <span class="top-logo">
                <!-- Логотип сайта -->
                <img src="static/icons/icon001.svg" alt="Not Found" wght="64" height="64">
            </span>
        </div>

        <div class="incase-container">
            <p class="php-server-name">Привет <?php echo $server_name; ?></p> 
            <p class="php-db-name">Вы подключились к БД - <?php echo $server_db; ?></p>
        </div>

        <div class="filter-case">
            <form action="", method="get">
                <!-- Принять фильтр или очистить -->
                <div class="ended-operation">
                    <a href="http://localhost/inc/" type="submit">Очистить фильтр</a>
                    <input value="Применить фильтр" name="accept-filter" type="submit">
                </div>

                <!-- Минимальная цена -->
                <input name="mincost" type="text" placeholder="минимальная цена" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')"">

                <!-- Максимальная цена -->
                <input name="maxcost" type="text" placeholder="максимальная цена" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')"">

                <!-- Название поля -->
                <select name="field-name" id="fields">
                    <option value="">Выберите поле</option>

                    <?php 
                    $field_list = mysqli_query($connection, query: "SELECT field_name FROM field_list INNER JOIN plants_field ON field_id = plants_field_name");
                    $field_list = mysqli_fetch_all($field_list);
                    foreach ($field_list as $fields) {
                        ?>
                        <option value="<?= $fields[0] ?>"><?= $fields[0] ?></option>
                        <?php
                    }
                    ?>
                </select>

                <!-- Название растения -->
                <input name="plant-name" type="text" maxlength="70" style='width:100%'>
            </form>
        </div>
    </div>

    <div class="db-container">
        <!-- Таблица с данными -->
        <table class="db-table">
            <tr>
                <th>ID</th>
                <th>Изображение</th>
                <th>Название</th>
                <th>Поле</th>
                <th>Описание</th>
                <th>Цена</th>
            </tr>

            <?php
                // Запись в переменные с помощью get
                if (isset($_GET['mincost']) && isset($_GET['maxcost']) && isset($_GET['field-name']) && isset($_GET['plant-name'])) {
                    $min_cost = htmlspecialchars($_GET['mincost']);
                    $max_cost = htmlspecialchars($_GET['maxcost']);
                    $field_name = htmlspecialchars($_GET['field-name']);
                    $plant_name = htmlspecialchars($_GET['plant-name']);
                    $accept_filter = htmlspecialchars($_GET['accept-filter']);
                    $accept_filter = "accept_filtering";
                    echo "isset is true <br>";
                    echo $min_cost, "   <br>";
                    echo  $max_cost, "   <br>";
                    echo  $field_name, "   <br>";
                    echo $plant_name, "   <br>";
                    echo $accept_filter, "   <br>";
                } else {
                    $min_cost = 'default';
                    $max_cost = 'default';
                    $field_name = 'default';
                    $plant_name = 'default';
                    $accept_filter = 'default';
                    echo "isset is false <br>";
                    echo $min_cost, "   ";
                    echo  $max_cost, "  ";
                    echo  $field_name, "    ";
                    echo $plant_name, " ";
                    echo $accept_filter, "   ";
                }

                if ($accept_filter == 'default') {
                    echo "<br> <br> Start1!";
                    $sql_query_main = "SELECT plants_id, plants_image, plants_name, field_name, plants_description, 
                    plants_cost_ton FROM field_list INNER JOIN plants_field ON field_id = plants_field_name";
                    
                    echo "<br> 1! <br>";

                    $plants = mysqli_query($connection, query: $sql_query_main);
                    $plants = mysqli_fetch_all($plants);

                    // Получение массива изображений
                    $img_dir = 'static/img';
                    $image_array = scandir($img_dir);
                    $image_array_slice = array_values((array_diff($image_array, array('..','.'))));

                    echo "<br> 2! <br>";

                    foreach ($plants as $plant) { 
                        echo "<br> 3!! <br>"; ?>
                        <tr>
                            <td><?= $plant[0] ?></td>
                            <td><img class="db-image" src="static/img/<?= $plant[1] ?>" loading="Lazy" alt="Not Found" width="100" height="100"></td>
                            <td><?= $plant[2] ?></td>
                            <td><?= $plant[3] ?></td>
                            <td><?= $plant[4] ?></td>
                            <td><?= $plant[5] ?></td>
                        </tr>
                        <?php
                        echo "<br> End2! <br>";
                    }
                } else {
                    echo "<br> Start2! <br>";
                    // $sql_query_main = "SELECT plants_id, plants_image, plants_name, field_name, plants_description,
                    // plants_cost_ton FROM field_list INNER JOIN plants_field ON field_id = plants_field_name WHERE plants_cost_ton BETWEEN '$min_cost' AND '$max_cost' OR plants_name LIKE '%$plant_name%'";
                    
                    $sql_query_main = "SELECT plants_id, plants_image, plants_name, field_name, plants_description,
                    plants_cost_ton FROM field_list INNER JOIN plants_field ON field_id = plants_field_name WHERE 1=1";

                    echo "<br> 1! <br>";

                    if (!empty($plant_name)) {
                        $sql_query_main .= " AND plants_name LIKE '%$plant_name%'";
                        echo "plant_name get!!!";
                    }
                    if (!empty($field_name)) {
                        $sql_query_main .= " AND field_name LIKE '$field_name'";
                        echo "field_name!!!";
                    }
                    if (!empty($min_cost) && !empty($max_cost)) {
                        $sql_query_main .= " AND plants_cost_ton BETWEEN '$min_cost' AND '$max_cost'";
                        echo "plants_cost_ton!!!";
                    }

                    // $stmt = $connection->prepare($sql_query_main);
                    // $stmt->bindValue(":plant_name", $plant_name);
                    // $stmt->execute();

                    $plants = mysqli_query($connection, query: $sql_query_main);
                    $plants = mysqli_fetch_all($plants);

                    echo "<br> 2! <br>";

                    foreach ($plants as $plant) {
                        echo "<br> 3!! <br>"; ?>
                        <tr>
                            <td><?= $plant[0] ?></td>
                            <td><img class="db-image" src="static/img/<?= $plant[1] ?>" loading="Lazy" alt="Not Found" width="100" height="100"></td>
                            <td><?= $plant[2] ?></td>
                            <td><?= $plant[3] ?></td>
                            <td><?= $plant[4] ?></td>
                            <td><?= $plant[5] ?></td>
                        </tr>
                        <?php
                        echo "<br> End2! <br>";
                    }
                }
                ?>
        </table>
        
        <!-- Вывод информации в виде массива -->
        <pre>
            <?php
                $plants = mysqli_query($connection, query: "SELECT * FROM `plants_field`");
                $plants = mysqli_fetch_all($plants);
                print_r($plants);
                echo"<br>";
                $img_dir = 'static/img';
                $image_array = scandir($img_dir);
                $image_array_slice = array_values((array_diff($image_array, array('..','.'))));
                print_r($image_array_slice);

            ?>
        </pre>
    </div>

</body>
</html>