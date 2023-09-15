<?php
require_once("./../config/connect.php");

// проверка
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];

mysqli_query($connect, "UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id` = '$id'");

header('Location: ../main.php');
