<?php
require_once '../config/connect.php';
$naimenovanie = $_POST['Наименование'];
$proizvoditel = $_POST['Производитель'];
$kolichestvo = $_POST['Количество'];
$sebestoimost = $_POST['Себестоимость'];
$tsena_prodazi = $_POST['Цена_продажи'];

mysqli_query($connect, "INSERT INTO `Товары` (`id`, `Наименование`, `Производитель`, `Количество`, `Себестоимость`, `Цена_продажи`) VALUES (NULL, '$naimenovanie', '$proizvoditel', '$kolichestvo', '$sebestoimost, '$tsena_prodazi')");

header('Location: /')