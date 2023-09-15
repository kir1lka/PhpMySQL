<?php
require "./config/connect.php";
$goods = mysqli_query($connect, "SELECT * FROM `goods`"); //запрос 

//var_dump($goods); //вывести запрос (echo не получиться)

$goods = mysqli_fetch_all($goods); //возращает все строчки в массиве

// echo "<pre>";
// print_r($goods);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <title>Товары</title>
</head>

<body>
    <div class="wrapper">
        <table>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>&#9998;</th>
                <th>&#10006;</th>
            </tr>
            <!-- php -->
            <?php
            foreach ($goods as $item) {
            ?>
                <tr>
                    <td><?php echo $item[0] ?></td>
                    <td><?php echo $item[1] ?></td>
                    <td><?php echo $item[2] ?></td>
                    <td> <?php echo $item[3] ?></td>
                    <td> <a href="update.php?id=<?php echo $item[0] ?>">Обновить</a></td>
                    <td> <a href="vendor/delete.php?id=<?php echo $item[0] ?>">Удалить</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <!-- button -->
        <a href="create.php"><button>Добавить</button></a>
    </div>

</body>

</html>