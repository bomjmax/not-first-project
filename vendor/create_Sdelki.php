<?php
require_once '../config/connect.php';
$priobretennie_tovari = $_POST['Приобретенные_товары'];
$prise = $_POST['Цена'];
$klient_ID = $_POST['ID_Клиента'];
$Sotrudnil_ID = $_POST['ID_Сотрудника'];
$Data_Sdelki = $_POST['Дата_Сделки'];

mysqli_query($connect, "INSERT INTO `Сделки`(`Номер`, `Приобретенные_товары`, `Цена`, `ID_Клиента`, `ID_Сотрудника`, `Дата_Сделки`) VALUES (NULL, '$priobretennie_tovari', '$prise', '$klient_ID', '$Sotrudnil_ID','$Data_Sdelki')");

header('Location: /')