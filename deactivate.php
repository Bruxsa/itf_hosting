<?php
include ("connection.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


$reject_code=$mysqli->query("SELECT project.reject_code FROM project")->fetch_assoc()->reject_code; 


if(isset($_GET['reject_code'])) {$reject_code =$_GET['reject_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали reject_code,    то выдаем ошибку
	if(isset($_GET['reject_code'])) {$reject_code =$_GET['reject_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали reject_code,    то выдаем ошибку
		if ($reject_code == $reject_code) {//сравниваем полученный из url и сгенерированный код 
        $mysqli->query("UPDATE    project SET status_project='2' WHERE status_project=0 and reject_code='$reject_code'");//если равны, то активируем пользователя
        print "Проект одобрен";
    }
    else {
		print 'Ошибка: '; //если    же полученный из url и    сгенерированный код не равны, то выдаем ошибку
         }
	
?>
