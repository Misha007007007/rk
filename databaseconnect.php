<?php

//Настройки подключения к БД
$db_host = 'localhost';
$db_user = 'root'; //имя пользователя совпадает с именем БД
$db_password = 'Eralav_2003'; //пароль, указаный при создании БД
$database = 'std_1959_rk'; //имя БД, которое было указано при создании
$conn = mysqli_connect($db_host, $db_user, $db_password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

?>