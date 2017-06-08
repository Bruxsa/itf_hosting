<?php
include "connection.php";

$approve_code=$mysqli->query("SELECT project.approve_code FROM project");


if(isset($_GET['approve_code'])) {$approve_code =$_GET['approve_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали approve_code,    то выдаем ошибку
	if(isset($_GET['approve_code'])) {$approve_code =$_GET['approve_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали approve_code,    то выдаем ошибку
		if ($approve_code == $approve_code) {//сравниваем полученный из url и сгенерированный код 
        $mysqli->query("UPDATE    project SET status_progect='1' WHERE status_progect=0 and approve_code='$approve_code'");//если равны, то активируем пользователя
        print "Проект одобрен";
    }
    else {print 'Ошибка: ('. $mysqli->errno .') '. $mysqli->error  'Проект не подтвержден!'; //если    же полученный из url и    сгенерированный код не равны, то выдаем ошибку
         }
	
?>