<?php
$dbconfig = require('db_params.php');
$mysqli = new mysqli($dbconfig['host'], $dbconfig['user'],
$dbconfig['password'], $dbconfig['db']);
$mysqli->set_charset('utf8');
if ($mysqli->connect_errno) {
 echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
 echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
 echo "Ошибка: " . $mysqli->connect_error . "\n";
 exit;
}
?>

