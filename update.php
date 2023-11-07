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

    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">

    <title>Редактирование пользователя</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <h2 class="title-popup">Редактирование пользователя</h2>
        <form action="vendor/update.php" method="post">

            <div class="wrapper_popup">

                <!-- leftWrapper -->
                <div class="left_wrapper">
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <p>Имя</p>
                    <input type="text" name="name" value="<?php echo $user['name'] ?>">
                    <p>Фамилия</p>
                    <input type="text" name="surname" value="<?php echo $user['surname'] ?>">
                    <p>отчество</p>
                    <input type="text" name="patronymic" value="<?php echo $user['patronymic'] ?>">
                    <p>Почта</p>
                    <input type="text" name="email" value="<?php echo $user['email'] ?>">
                </div>


                <!-- rightWrapper -->
                <div class="right_wrapper">
                    <p>Страна</p>
                    <input type="text" name="country" value="<?php echo $user['country'] ?>">
                    <p>Город</p>
                    <input type="text" name="city" value="<?php echo $user['city'] ?>">
                    <p>Логин</p>
                    <input type="text" name="login" value="<?php echo $user['login'] ?>">
                    <p>Пароль</p>
                    <input type="text" name="password" value="<?php echo $user['password'] ?>">
                </div>
            </div>

            <!-- wrapperBtn -->
            <div class="wrapper_btn">
                <!-- submit -->
                <button type="submit" class="buttonOpen">Обновить</button>
            </div>
        </form>
    </div>
</body>

</html>