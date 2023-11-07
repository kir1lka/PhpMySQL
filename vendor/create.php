<?php
require_once("./../config/connect.php");

$name = $_POST["name"];
$surname = $_POST["surname"];
$patronymic = $_POST["patronymic"];
$email = $_POST["email"];
$country = $_POST["country"];
$city = $_POST["city"];
$login = $_POST["login"];
$password = $_POST["password"];


// mysqli_query($connect, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL,'$title', '$description', '$price')");

mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `email`, `country`, `city`, `login`, `password`) VALUES (NULL, '$name', '$surname', '$patronymic', '$email', '$country', '$city', '$login', '$password');");

header('Location: ../index.php');
