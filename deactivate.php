<?php
include ("connection.php");

 if(!empty($_GET['reject_code']) && isset($_GET['reject_code']))
 {
 $reject_code=($_GET['reject_code']);
 $c=mysqli_query($mysqli,"SELECT id FROM project WHERE reject_code='$reject_code'");
 if(mysqli_num_rows($c) > 0)
 {
 $count=mysqli_query($mysqli,"SELECT project.id FROM project WHERE reject_code='$reject_code' and status_project='0'");

 if(mysqli_num_rows($count) == 1)
 {
mysqli_query($mysqli,"UPDATE project SET status_project='2' WHERE status_project=0 and reject_code='$reject_code'");
 print "Заявка отклонена"; 
 }
 else
 {
 print "Заявка уже была отклонена";
 }
 }
 else
 {
 print "Ошибка";
 }
 }
?>
