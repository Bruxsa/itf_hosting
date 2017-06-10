<?php
$dbconfig = require('db_params.php');
$mysqli = new mysqli($dbconfig['host'], $dbconfig['user'],
$dbconfig['password'], $dbconfig['db']);
if ($mysqli->connect_errno) {
 echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
 echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
 echo "Ошибка: " . $mysqli->connect_error . "\n";
 exit;
}
$sql = "SELECT * FROM records";
if (!$result = $mysqli->query($sql)) {
3
 echo "Ошибка: Наш запрос не удался и вот почему: \n";
 echo "Запрос: " . $sql . "\n";
 echo "Номер_ошибки: " . $mysqli->errno . "\n";
 echo "Ошибка: " . $mysqli->error . "\n";
 exit;
}
$record = $result->fetch_assoc();
echo $record['content'];
?>

