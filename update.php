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

    <title>Редактирование пользователей</title>
</head>

<body>
    <div class="wrapper">

        <h2>Редактирование пользователей</h2>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <p>Имя</p>
            <input type="text" name="name" value="<?php echo $user['name'] ?>">
            <p>Фамилия</p>
            <input type="text" name="surname" value="<?php echo $user['surname'] ?>">
            <p>отчество</p>
            <input type="text" name="patronymic" value="<?php echo $user['patronymic'] ?>">
            <p>Почта</p>
            <input type="text" name="email" value="<?php echo $user['email'] ?>">
            <p>Страна</p>
            <input type="text" name="country" value="<?php echo $user['country'] ?>">
            <p>Город</p>
            <input type="text" name="city" value="<?php echo $user['city'] ?>">
            <p>Логин</p>
            <input type="text" name="login" value="<?php echo $user['login'] ?>">
            <p>Пароль</p>
            <input type="text" name="password" value="<?php echo $user['password'] ?>">
            <button type="submit">Обновить</button>
        </form>
    </div>
</body>

</html>