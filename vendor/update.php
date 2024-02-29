<?php
require_once '../config/connect.php';
$Familia = $_POST['Фамилия'];
$Imya = $_POST['Имя'];
$Otchestvo = $_POST['Отчество'];
$Telefon = $_POST['Телефон'];
mysqli_query($connect, "UPDATE `Клиент` SET `Фамилия` = '$Familia', `Имя` = '$Imya', `$Otchestvo` = 'Владимирович1', `Телефон` = '$Telefon' WHERE `Клиент`.`id` = '$id'");
header('Location: /');