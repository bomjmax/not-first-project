<?php
require_once 'config/connect.php';
$clients = $_GET['id'];
$clients = mysqli_query($connect, "SELECT * FROM `Товары` where `id` = '$clients'");
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


<h4>Обновить данные о товаре</h4>
<from action="vendor/create_Tovari.php" method="post">
<p>Наименование</p>
<input type="text" name="Наименование">
<p>Производитель</p>
<input type="text" name="Производитель">
<p>Количество</p>
<input type="number" name="Количество">
<p>Себестоимость</p>
<input type="number" name="Себестоимость">
<p>Цена_продажи</p>
<input type="number" name="Цена_продажи">
<button type ="submit">Добавить</button>
</form>
</body>
</html>