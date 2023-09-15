<?php
require "./config/connect.php";

$goods_id = $_GET['id'];

$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`='$goods_id';");
$good = mysqli_fetch_assoc($good);

//проверка
// echo "<pre>";
// print_r($good);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">

    <title>Добавление товара</title>
</head>

<body>
    <div class="wrapper">

        <h2>Добавить новый товар</h2>
        <form action="vendor/create.php" method="post">
            <p>Название</p>
            <input type="text" name="title">
            <p>Описание</p>
            <textarea name="description"></textarea>
            <p>Цена</p>
            <input type="number" name="price">
            <button type="submit">Добавить</button>
        </form>
    </div>
</body>

</html>