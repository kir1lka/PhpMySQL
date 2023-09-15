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

    <title>Обновление данных</title>
</head>

<body>
    <div class="wrapper">

        <h2>Обновить данные товара</h2>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $good['id'] ?>">
            <p>Название</p>
            <input type="text" name="title" value="<?php echo $good['title'] ?>">
            <p>Описание</p>
            <textarea name="description"><?php echo $good['description'] ?></textarea>
            <p>Цена</p>
            <input type="number" name="price" value="<?php echo $good['price'] ?>">
            <button type="submit">Обновить</button>
        </form>
    </div>
</body>

</html>