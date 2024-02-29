<?php
require_once 'config/connect.php';
$clients_id = $_GET['id'];
$clients = mysqli_query($connect, "SELECT * FROM `Клиент` WHERE  `id`='$clients_id'");
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


<h2>Обновить данные о клиенте</h2>
<from action="vendor/create.php" method="post">
<input type="hidden" name="id" value="<?= $clients_id ?>">
<p>Фамилия</p>
    <input type="text" name="Фамилия" value="<?= $clients['Фамилия'] ?>">
    <p>Имя</p>
    <input type="text" name="Имя" value="<?= $clients['Имя'] ?>">
    <p>Отчество</p>
    <input type="text" name="Отчество" value="<?= $clients['Отчество'] ?>">
    <p>Телефон</p>
    <input type="text" name="Телефон" value="<?= $clients['Телефон'] ?>">
    <button type="submit" >Добавить</button>
</form>