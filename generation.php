	itf_hosting /generation.php
<?
	//генерирую строку для approve_code из 8 симвполов
function approve_code($length = 8){
  $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}
	//генерирую строку для reject_code из 8 симвполов
function reject_code($length = 8){
  $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}

UPDATE project SET status = 1 WHERE status = 0 AND approve_code = ' . mysql_real_escape_string($_GET['code'])
?>
