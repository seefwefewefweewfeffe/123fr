<?php
$host = 'localhost:3307';
$user = 'test';
$password = 'test';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);

if (!$link) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");