<?php
require "./config/connect.php";

$users_id = $_GET['id'];

$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$users_id';");
$user = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">

    <title>Добавление пользователя</title>
</head>

<body>
    <div class="wrapper">

        <h2>Добавление пользователя</h2>
        <form action="vendor/create.php" method="post">
            <p>Имя</p>
            <input type="text" name="name">
            <p>Фамилия</p>
            <input type="text" name="surname">
            <p>отчество</p>
            <input type="text" name="patronymic">
            <p>Почта</p>
            <input type="text" name="email">
            <p>Страна</p>
            <input type="text" name="country">
            <p>Город</p>
            <input type="text" name="city">
            <p>Логин</p>
            <input type="text" name="login">
            <p>Пароль</p>
            <input type="text" name="password">
            <button type="submit">Добавить</button>
        </form>
    </div>
</body>

</html>