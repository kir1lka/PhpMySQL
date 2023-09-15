<?php
require_once("./../config/connect.php");

// проверка
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];

mysqli_query($connect, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL,'$title', '$description', '$price')");

header('Location: ../main.php');
