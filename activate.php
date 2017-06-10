<?php
include ("connection.php");

 if(!empty($_GET['approve_code']) && isset($_GET['approve_code']))
 {
 $approve_code=($_GET['approve_code']);
 $c=mysqli_query($mysqli,"SELECT id FROM project WHERE approve_code='$approve_code'");
 if(mysqli_num_rows($c) > 0)
 {
 $count=mysqli_query($mysqli,"SELECT project.id FROM project WHERE approve_code='$approve_code' and status_project='0'");

 if(mysqli_num_rows($count) == 1)
 {
mysqli_query($mysqli,"UPDATE project SET status_project='1' WHERE status_project=0 and approve_code='$approve_code'");
 print "Заявка принята"; 
 }
 else
 {
 print "Заявка уже была принята";
 }
 }
 else
 {
 print "Ошибка";
 }
 }

?>