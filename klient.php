<?php
    require_once 'config/connect.php';
    $clients = mysqli_query($connect, "SELECT * FROM `Клиент`");
    $clients = mysqli_fetch_all($clients);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta http-equiv = "X-UA-Compatible" content = "IE-edge">
<meta name = "viewport" connect="width-devise-width, intial-scale=1.0">
<link rel="stylesheet" href="CSS/style.css">
<title>Клиенты</title>
</head>
<body background = "skyscrappers-night-minimal-oi-1920x1080.jpg">
<table>
    <tr>
    <th>id</th>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <th>Телефон</th>
    <th> &#9998; </th>
    <th> &#10006; </th>
    </tr>
    <?php
        foreach($clients as $item) {
            ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
                <td><?= $item[4] ?></td>
                <td><a href="Update_Klient.php?id=<?= $item[0] ?>">Обновить</a></td>
                <td><a href="vendor/delete_Klient.php?id=<?= $item[0] ?>">Удалить</a></td>
            </tr>
            <?php
        }
    ?>
</table>
<h2>Добавить нового клиента</h2>
<from action="vendor/update.php" method="post">
    <p>Фамилия</p>
    <input type="text" name="Фамилия">
    <p>Имя</p>
    <input type="text" name="Имя">
    <p>Отчество</p>
    <input type="text" name="Отчество">
    <p>Телефон</p>
    <input type="text" name="Телефон">
    <button type="submit">Добавить</button>
</form>
</body>
</html>