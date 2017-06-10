<?php
include ("connection.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


$approve_code=$mysqli->query("SELECT project.approve_code FROM project")->fetch_assoc()->approve_code; 


if(isset($_GET['approve_code'])) {$approve_code =$_GET['approve_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали approve_code,    то выдаем ошибку
	if(isset($_GET['approve_code'])) {$approve_code =$_GET['approve_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали approve_code,    то выдаем ошибку
		if ($approve_code == $approve_code) {//сравниваем полученный из url и сгенерированный код 
        $mysqli->query("UPDATE    project SET status_project='1' WHERE status_project=0 and approve_code='$approve_code'");//если равны, то активируем пользователя
        print "Проект одобрен";
    }
    else {
		print 'Ошибка: '; //если    же полученный из url и    сгенерированный код не равны, то выдаем ошибку
         }
	
?>