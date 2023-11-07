<?php
require_once("./../config/connect.php");

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM users WHERE `users`.`id` = '$id'");

header('Location: ../index.php');
