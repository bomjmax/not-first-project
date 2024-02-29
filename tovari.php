<?php
require_once 'config/connect.php';
$clients = mysqli_query($connect,"SELECT * FROM `Товары`");
$clients = mysqli_fetch_all($clients);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta http-equiv = "X-UA-Compatible" conect = "IE-edge">
<meta name = "viewport" content= "width = device-width, intial-scale = 1.0">
<link rel = "stylesheet" href ="CSS/style.css">
<title>Клиенты</title>
</head>
<body background = "skyscrappers-night-minimal-oi-1920x1080.jpg">
<table>
<tr>
<th>id</th>
<th>Наименование</th>
<th>Производитель</th>
<th>Количество</th>
<th>Себестоимость</th>
<th>Цена_продажи</th>
<th>&#9998</th>
<th>&#10006</th>
</tr>
<?php
foreach($clients as $item) {
?>
<tr>
<td><?=$item[0] ?></td>
<td><?=$item[1] ?></td>
<td><?=$item[2] ?></td>
<td><?=$item[3] ?></td>
<td><?=$item[4] ?></td>
<td><?=$item[5] ?></td>
<td><a href= "Update_Tovari.php?id=<?= $item[0]?>">Обновить</a></td>
<td><a href= "vendor/delete_Tovari.php?id=<?= $item[0] ?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
<h2>Добавить новый товар</h2>
<from action = "vendor/create.php" method="post">
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