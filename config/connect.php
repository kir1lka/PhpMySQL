<?php
$connect = mysqli_connect("localhost", "root", "", "crud");
if (!$connect) {
    die("ошибка к подлкючению бд");
}
