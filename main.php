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
    <table>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>
        <!-- <?php
                // foreach ($goods as $item) {
                //     echo "
                //     <tr>
                //     <td>{$item[0]}</td>
                //     <td>{$item[1]}</td>
                //     <td>{$item[2]}</td>
                //     <td> {$item[3]}</td>
                //     </tr>
                //     ";
                // }
                ?> -->

        <?php
        foreach ($goods as $item) {
        ?>
            <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td> <?php echo $item[3] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>