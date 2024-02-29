<?php
    require_once '../config/connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Клиент` WHERE `Клиент`.`id` = '$id'");
    header('Location: /klient.php');