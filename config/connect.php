<?php
$connect = mysqli_connect('localhost', 'root', '', 'crud');
mysqli_query($connect, "SET NAMES 'utf8'");
if (!$connect) {
  die("Ошибка подключения к БД!");
}
