<?php

// Cоединение c БД
// Лучше через require подключать
require 'db_connect.php';
// $pdo = new PDO('mysql:dbname=predmety_up;host=127.0.0.1;charset=utf8', 'root', '');

$sql_query = 'SELECT * FROM plants_field INNER JOIN field_list ON plants_field_name = field_id';

$stmt = $pdo->query($sql_query)->fetchAll();
// print_r($stmt);

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