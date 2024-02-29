<?php
    require_once '../config/connect.php';
    $nomer = $_GET['Номер'];
    mysqli_query($connect, "DELETE FROM `Сделки` WHERE `Сделки`.`Номер` = '$nomer'");
    header('Location: /sdelki.php');