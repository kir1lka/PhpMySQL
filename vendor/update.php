<?php
require_once("./../config/connect.php");

$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$patronymic = $_POST["patronymic"];
$email = $_POST["email"];
$country = $_POST["country"];
$city = $_POST["city"];
$login = $_POST["login"];
$password = $_POST["password"];

mysqli_query($connect, "UPDATE `users` SET `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `email` = '$email', `country` = '$country', `city` = '$city', `login` = '$login', `password` = '$password' WHERE `users`.`id` = '$id'");

header('Location: ../index.php');
