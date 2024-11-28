<?php

// Cоединение c БД
// Лучше через require подключать
require 'db_connect.php';
// $pdo = new PDO('mysql:dbname=predmety_up;host=127.0.0.1;charset=utf8', 'root', '');

$mincost = htmlspecialchars($_GET["mincost"]);
$maxcost = htmlspecialchars($_GET["maxcost"]);
$field_name = htmlspecialchars($_GET["field-name"]);
$plant_name = htmlspecialchars($_GET["plant-name"]);

$sql_query = 'SELECT * FROM plants_field INNER JOIN field_list ON plants_field.plants_field_name = field_list.field_id WHERE 1=1';

// ФОРМИРУЕМ ЗАПРОС
if (!empty($plant_name)) {
    $sql_query .= " AND plants_name LIKE concat('%', :plant_name, '%')";
}
if (!empty($field_name)) {
    $sql_query .= " AND plants_field_name LIKE :field_name";
}
if (!empty($mincost) && !empty($maxcost)) {
    $sql_query .= " AND plants_cost_ton BETWEEN :mincost AND :maxcost";
}

// ПОДГОТАВЛИВАЕМ ЗАПРОС К КАКИМ-ЛИБО ОПЕРАЦИЯМ
$stmt = $pdo->prepare($sql_query);

// БИНДИМ ПАРАМЕТРЫ
if (!empty($plant_name)) {
    $stmt->bindParam('plant_name', $plant_name, PDO::PARAM_STR);
}
if (!empty($field_name)) {
    $stmt->bindParam('field_name', $field_name, PDO::PARAM_STR);
}
if (!empty($mincost) && !empty($maxcost)) {
    $stmt->bindParam('mincost', $mincost, PDO::PARAM_INT);
    $stmt->bindParam('maxcost', $maxcost, PDO::PARAM_INT);
}

// ВЫПОЛНЯЕМ ЗАПРОС
$stmt->execute();

// $result_query = $pdo->query($sql_query);

foreach ($stmt as $row) { ?> 
    <tr class="table-rows__body">
        <td class="table-body__element db-image">
            <a href="templates/images/plants_image/<?php echo $row['plants_image'] ?>">
                <img width="140" height="140" src="templates/images/plants_image/<?php echo $row['plants_image'] ?>" alt="NF">
            </a>
        </td>
        <td class="table-body__element"> <?php echo $row['plants_name'] ?></td>
        <td class="table-body__element"> <?php echo $row['field_name'] ?></td>
        <td class="table-body__element"> <?php echo $row['plants_description'] ?></td>
        <td class="table-body__element"> <?php echo $row['plants_cost_ton'] ?></td>
    </tr>
    <?php
}

// Закрываем соединение
$pdo = null;

?>