<?php
    require_once '../config/connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `Товары` WHERE `Товары`.`id` = '$id'");
    header('Location: /tovari.php');