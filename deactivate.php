<?php
include "connection.php";

$reject_code=$mysqli->query("SELECT project.reject_code FROM project")->fetch_assoc()->reject_code;


if(isset($_GET['reject_code'])) {
		$reject_code =$_GET['reject_code']; 
	} //код подтверждения 
    else { 
	exit("Не указан сгенерированный код!");
	} //если не указали reject_code,    то выдаем ошибку
	if(isset($_GET['reject_code'])) {$reject_code =$_GET['reject_code']; } //код подтверждения 
    else 
		{ exit("Не указан сгенерированный код!");} //если не указали reject_code,    то выдаем ошибку
		if ($reject_code == $reject_code) {//сравниваем полученный из url и сгенерированный код 
       $mysqli->query("UPDATE    project SET status_progect='2' WHERE status_progect=0 and reject_code='$reject_code'");//если равны, то активируем пользователя
        print "Проект не одобрен";
    }
    else {print 'Ошибка: ('. $mysqli->errno .') '. $mysqli->error ; //если    же полученный из url и    сгенерированный код не равны, то выдаем ошибку
         }
	
?>