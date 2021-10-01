<?php
require_once '../config/connect.php';
$good_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `goods` WHERE `goods`.`id` = '$good_id'");
header('Location: ../index.php');