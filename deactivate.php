﻿<?php
include "connection.php";

$reject_code=mysql_query("SELECT project.reject_code FROM project");


if(isset($_GET['reject_code'])) {$reject_code =$_GET['reject_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали reject_code,    то выдаем ошибку
	if(isset($_GET['reject_code'])) {$reject_code =$_GET['reject_code']; } //код подтверждения 
    else 
		{ exit("Не указан генерированный код!");} //если не указали reject_code,    то выдаем ошибку
		if ($reject_code == $reject_code) {//сравниваем полученный из url и сгенерированный код 
        mysql_query("UPDATE    project SET status_progect='2' WHERE status_progect=0 and reject_code='$reject_code'");//если равны, то активируем пользователя
        echo "Проект не одобрен";
    }
    else {echo "Ошибка! Проект не подтвержден! <a    href='request.php'>Главная    страница</a>"; //если    же полученный из url и    сгенерированный код не равны, то выдаем ошибку
         }
	
?>