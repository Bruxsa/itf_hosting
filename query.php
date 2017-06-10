<? include "connection.php";?>
<html >
	<head>
		<meta charset="utf-8">
        <title>Вывод данных</title>
        </head>
	<body>
<? 
 
	// mysql_query выполняет запрос к БД, написанный на языке SQL.
	$mysqli->set_charset('utf8');
	$name = ($_REQUEST['name']);
	$group =($_REQUEST['group']);
	$email_user = ($_REQUEST['email_user']);
	$curator = $_REQUEST['curator'];
	$title =($_REQUEST['title']);
	$description = ($_REQUEST['description']);
	$git =  ($_REQUEST['git']);
	$subdomain = ($_REQUEST['subdomain']);
	$approve_code = md5('a'.$_REQUEST['git'].time());
	$reject_code = md5($_REQUEST['git'].time());

	if (isset($_POST['use_mysql'])){
		$use_mysql=1;
	} else {
		$use_mysql=0;
	}
		
	$query1 = "INSERT INTO user (email_user)  VALUES ('{$email_user}')";

	$res= $mysqli->query("INSERT INTO project (name, `group`, curator, title, description, git, subdomain, use_mysql, approve_code,reject_code) VALUES('{$name}', '{$group}' , '{$curator}' , '{$title}' , '{$description}' , '{$git}','{$subdomain}','{$use_mysql}','{$approve_code}','{$reject_code}')"); 
	$mysqli->query($query1);
	if ($res===TRUE){
		echo "<script type=\"text/javascript\">alert( \"Спасибо, за оставленную заявку! Она передана на рассмотрение куратором\");</script> \n";
    }else	{
		echo "<script type=\"text/javascript\">alert( \"Возникла ошибка! Заявка не отправлена\");</script> \n";
   	} ;

	$url  = "http://p41.itstudent.nsuem.ru/activate.php?approve_code=$approve_code";
	$url2 = "http://p41.itstudent.nsuem.ru/deactivate.php?reject_code=$reject_code";	
 	

	$email_curator = $mysqli->query("SELECT email_curator FROM curator WHERE id=$curator")->fetch_object()->email_curator; 
	print $email_curator; 

	{
		$subject = "Заявка на публикацию проекта";   
		$to = $email_curator;	
		$message = '<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width"/>
			<title></title>
			<style type="text/css">
				/*////// RESET STYLES //////*/
				body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
				table{border-collapse:collapse;}
				img, a img{border:0; outline:none; text-decoration:none;}
				h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
				p{margin: 1em 0;}
				/*////// CLIENT-SPECIFIC STYLES //////*/
				.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} 
				.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} 
				table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} 
				#outlook a{padding:0;} 
				img{-ms-interpolation-mode: bicubic;}
				body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} 
				/*////// FRAMEWORK STYLES //////*/
				.flexibleContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}
				.flexibleImage{height:auto;}
				.bottomShim{padding-bottom:20px;}
				.imageContent, .imageContentLast{padding-bottom:20px;}
				.nestedContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}
				/*////// GENERAL STYLES //////*/
				body, #bodyTable{background-color:#F5F5F5;}
				#bodyCell{padding-top:40px; padding-bottom:40px;}
				#emailBody{background-color:#FFFFFF; border:1px solid #DDDDDD; border-collapse:separate; border-radius:4px;}
				h1, h2, h3, h4, h5, h6{color:#202020; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left;}
				.textContent, .textContentLast{color:#404040; font-family:Helvetica; font-size:16px; line-height:125%; text-align:Left; padding-bottom:20px;}
				.textContent a, .textContentLast a{color:#2C9AB7; text-decoration:underline;}
				.nestedContainer{background-color:#E5E5E5; border:1px solid #CCCCCC;}
				.emailButton{background-color:#2C9AB7; border-collapse:separate; border-radius:4px;}
				.buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
				.buttonContent a{color:#FFFFFF; display:block; text-decoration:none;}
				.emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
				.emailCalendarMonth{background-color:#2C9AB7; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
				.emailCalendarDay{color:#2C9AB7; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
				/*////// MOBILE STYLES //////*/
				@media only screen and (max-width: 480px){			
					/*////// CLIENT-SPECIFIC STYLES //////*/
					body{width:100% !important; min-width:100% !important;} 
					table[id="emailBody"], table[class="flexibleContainer"]{width:100% !important;}
					img[class="flexibleImage"]{height:auto !important; width:100% !important;}
					
					table[class="emailButton"]{width:100% !important;}
					td[class="buttonContent"]{padding:0 !important;}
					td[class="buttonContent"] a{padding:15px !important;}
					td[class="textContentLast"], td[class="imageContentLast"]{padding-top:20px !important;}
					/*////// GENERAL STYLES //////*/
					td[id="bodyCell"]{padding-top:10px !important; padding-Right:10px !important; padding-Left:10px !important;}
				}
			</style>
		</head>
		<body>
			<center>
				<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
					<tr>
						<td align="center" valign="top" id="bodyCell">
							
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="emailBody">


								<tr>
									<td align="center" valign="top">
										
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td align="center" valign="top">
													
													<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
														<tr>
															<td align="center" valign="top" width="600" class="flexibleContainerCell">


																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td valign="top" class="textContent">
																			<h3>Подтверждение публикации проекта</h3>
																			<br />
																			Пользователь ' . $_POST['name'] . ' отправил вам заявку на публикацию проекта: "' . $_POST['title'] . '"<br /><br />
																			Файлы находятся по адресу: ' . $_POST['git'] . '<br /><br />	
																		   Связяться с автором можно по email: 
																		   <a href="mailto:' . $_POST['email_user'] . '">' . $_POST['email_user'] . '
																		</td>
																	</tr>
																</table>
														


															</td>
														</tr>
													</table>
											 
												</td>
											</tr>
										</table>
								  
									</td>
								</tr>
							


								<tr>
									<td align="center" valign="top">
								 
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td align="center" valign="top">
													<!-- FLEXIBLE CONTAINER // -->
													<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
														<tr>
															<td valign="top" width="600" class="flexibleContainerCell">


																<table align="Left" border="0" cellpadding="0" cellspacing="0" width="420" class="flexibleContainer">
																	<tr>
																		<td valign="top" class="textContent">
																			<h3>Для подтверждения пройдите по ссылке:</h3>
																			<br />'.$url.
																		'</td>
																	</tr>
																	  <tr>
																		<td valign="top" class="textContentLast">
																			<h3>Для отказа пройтиде по ссылке:
																			</h3>
																			<br />'
																		 .$url2.
																	   ' </td>
																	</tr>
																</table>
														 
															  
															 
															</td>
														</tr>
													</table>
										   
												</td>
											</tr>
										</table>
									 
									</td>
								</tr>
							
								<tr>
									<td align="center" valign="top">
								   
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td align="center" valign="top">
												
													<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
														<tr>
															<td align="center" valign="top" width="600" class="flexibleContainerCell bottomShim">


										</table>
										
									</td>
								</tr>
						


							</table>
					   
						</td>
					</tr>
				</table>
			</center>
		</body>
	</html>';
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$subject = "=?utf-8B?B?" .base64_encode($subject)."?=";
	mail ($to, $subject, $message, $headers);

	}
	
?>
	</body>
</html>
