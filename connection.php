<? 
$dbconfig = require('db_params.php');
$mysqli = new mysqli($dbconfig['host'], $dbconfig['web_41'],
$dbconfig['HLwtawuzsXK2zZJw'], $dbconfig['web_41']);
$mysqli->set_charset('utf8');
if ($mysqli->connect_errno) {
 echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
 echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
 echo "Ошибка: " . $mysqli->connect_error . "\n";
 exit;
}
?>

