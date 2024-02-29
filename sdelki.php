<?php
    require_once 'config/connect.php';
    $clients = mysqli_query($connect, "SELECT * FROM `Сделки`");
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
    <th>Номер</th>
    <th>Приобретенные_товары</th>
    <th>Цена</th>
    <th>ID_Клиента</th>
    <th>ID_Сотрудника</th>
    <th>Дата_Сделки</th>
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
                <td><?= $item[5] ?></td>
                <td><a href="Update_Sdelki.php?id=<?= $item[0] ?>">Обновить</a></td>
                <td><a href="vendor/delete_Sdelki.php?id=<?= $item[0] ?>">Удалить</a></td>
            </tr>
            <?php
        }
    ?>
</table>
<h2>Добавить сделку</h2>
<from action="vendor/create_Sdelki.php" method="post">
    <p>Приобретенные_товары</p>
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
</form>
</body>
</html>
