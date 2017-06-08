<? 

$mysqli = new mysqli('localhost','root','','host2');
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {
  echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>

