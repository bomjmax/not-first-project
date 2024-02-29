<?php
require_once '../config/connect.php';
$Familia = $_POST['Фамилия'];
$Imya = $_POST['Имя'];
$Otchestvo = $_POST['Отчество'];
$Telefon = $_POST['Телефон'];

mysqli_query($connect, "INSERT INTO `Клиент`(`id`, `Фамилия`, `Имя`, `Отчество`, `Телефон`) VALUES (NULL, '$Familia', '$Imya', '$Otchestvo', '$Telefon')");

header('Location: /klient.php')