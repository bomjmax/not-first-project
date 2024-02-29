<?php
require_once 'config/connect.php';
$clients = $_GET['Номер'];
$clients = mysqli_query($connect, "SELECT * FROM `Сделки` where `Номер` ='$clients' ");
$clients = mysqli_fetch_assoc($clients);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta http-equiv = "X-UA-Compatible" content = "IE-edge">
<meta name = "viewport" content="width=devixe-width, intial-scale=1.0">
<link rel ="stylesheet" href="CSS/style.css">
<title>Обновить</title>
</head>
<body background="skyscrappers-night-minimal-oi-1920x1080.jpg">


<h3>Обновить данные о сделке</h3>
<from action="vendor/create_Sdelki.php" method="post">
<p>Приборетенные_товары</p>
    <input type="text" name="Приобретенные_товары">
    <p>Цена</p>
    <input type="number" name="Цена">
    <p>ID_Клиента</p>
    <input type="text" name="ID_Клиента">
    <p>ID_Сотрудника</p>
    <input type="text" name="ID_Сотрудника">
    <p>Дата_Сделки</p>
    <input type="date" name="Дата_Сделки">
    <button type="submit" >Добавить</button>
</body>
</html>