<? 
//получение данных из таблицы и установление соединения с бд
$db = "host"; 
//Хостинг 
$host = "localhost"; 
//Логин и пароль пользователя 
$user = "root"; 
$pass = ""; 
$connect = mysql_connect($host, $user, $pass); 
mysql_select_db($db); 

?>
