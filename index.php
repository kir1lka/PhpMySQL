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
    <link rel="stylesheet" href="./style/style.css">
    <title>Пользователи</title>
</head>

<body>

    <div class="wrapper">

        <h2>BlinovTable</h2>

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
                    <td> <a href="update.php?id=<?php echo $user[0] ?>">Редактировать</a></td>
                    <td> <a href="vendor/delete.php?id=<?php echo $user[0] ?>">Удалить</a></td>
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