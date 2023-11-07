<?php
require "./config/connect.php";
$users = mysqli_query($connect, "SELECT * FROM `users`");

$users = mysqli_fetch_all($users);
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">

    <title>Пользователи</title>

    <script src="./script/srcipt.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- title -->
        <h2 class="title-logo">BlinovTable</h2>

        <!-- table -->
        <table>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Почта</th>
                <th>Страна</th>
                <th>Город</th>
                <th>Логин</th>
                <th>Пароль</th>
                <th>&#9998;</th>
                <th>&#10006;</th>
            </tr>

            <!-- php -->
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user[0] ?></td>
                    <td><?php echo $user[1] ?></td>
                    <td><?php echo $user[2] ?></td>
                    <td> <?php echo $user[3] ?></td>
                    <td> <?php echo $user[4] ?></td>
                    <td> <?php echo $user[5] ?></td>
                    <td> <?php echo $user[6] ?></td>
                    <td> <?php echo $user[7] ?></td>
                    <td> <?php echo $user[8] ?></td>
                    <td> <a href="update.php?id=<?php echo $user[0] ?>" class="button-edit">Редактировать</a></td>
                    <td> <a href="vendor/delete.php?id=<?php echo $user[0] ?>" class="button-delete">Удалить</a></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <!-- button -->
        <a href="#" class="buttonOpen open-popup"><button>Добавить</button></a>
    </div>

    <!-- popupCreate -->
    <div class="popup_bg">
        <div class="popup">

            <!-- closeIcon -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px" class="svg_close close-popup">
                <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z" />
            </svg>

            <!-- wrapperTop -->
            <div class="wrapper-top">

                <!-- form -->
                <h2 class="title-popup2">Добавление пользователя</h2>
            </div>
            <form action="vendor/create.php" method="post">

                <div class="wrapper_popup">
                    <!-- leftWrapper -->
                    <div class="left_wrapper">
                        <p>Имя</p>
                        <input type="text" name="name">
                        <p>Фамилия</p>
                        <input type="text" name="surname">
                        <p>Отчество</p>
                        <input type="text" name="patronymic">
                        <p>Почта</p>
                        <input type="text" name="email">
                    </div>

                    <!-- rightWrapper -->
                    <div class="right_wrapper">
                        <p>Страна</p>
                        <input type="text" name="country">
                        <p>Город</p>
                        <input type="text" name="city">
                        <p>Логин</p>
                        <input type="text" name="login">
                        <p>Пароль</p>
                        <input type="text" name="password">
                    </div>
                </div>

                <!-- wrapperBtn -->
                <div class="wrapper_btn">
                    <!-- submit -->
                    <button type="submit" class="buttonOpen">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>