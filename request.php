<? include "connection.php";?>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/form-field-tooltip.css" media="screen" type="text/css">
<script type="text/javascript" src="js/rounded-corners.js"></script>
<script type="text/javascript" src="js/form-field-tooltip.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<head>
		<body>
			<title>Подача заявки</title>
				<form class="form-horizontal" action="query.php" method="post">
					<fieldset>

						<!-- Form Name -->
						<legend>Подача заявки</legend>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="name">ФИО</label>  
								<div class="col-md-4">
									<input id="name" name="name" required="required" type="text" placeholder="Иванов Иван Иванович" 
									title="Введите имя" class="form-control input-md">
								</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="group">Группа</label>  
								<div class="col-md-4">
									<input id="group" name="group" required="required" type="text" placeholder="3711" title="Введите номер группы" class="form-control input-md">
								</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="email_user">E-mail</label>  
								<div class="col-md-4">
									<input required="required" id="email_user" name="email_user" type="email" placeholder="name@mail.ru" title="Введите адрес электронной почты" class="form-control input-md">
								</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="curator">Ответственный преподаватель</label>
								<div class="col-md-4">
									<select id="curator" name="curator"  size="1" class="form-control">
										<?
											$res = $mysqli->query("select `name_curator`, `id` from `curator` WHERE status=1");
											while($row =$res-> fetch_assoc()){
										?>
										<option value="<?=$row['id']?>"><?=$row['name_curator']?></option>
							
											<?
												}
											?>
									</select>
								</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="title">Название проекта</label>  
								<div class="col-md-4">
									<input id="title" name="title" required="required" type="text" placeholder="Привет, мир!"  title="Введите название проекта" class="form-control input-md">
								</div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="description">Описание проекта</label>
								<div class="col-md-4">                     
									<textarea class="form-control" id="description" tooltipText="Опишите в чем заключается суть проекта" name="description"></textarea>
								</div>
						</div>

						<!-- Password input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="git">Git-репозиторий</label>
								<div class="col-md-4">
									<input id="git" name="git"  required="required" type="text" placeholder="https://github.com/myname/myproject.git" title="Укажите ссылку на Git-репозиторий "class="form-control input-md">
								</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="subdomain">Domain</label>  
								<div class="col-md-4">
									<input id="subdomain" name="subdomain" type="text" placeholder="myproject" tooltipText="Если данное поле пустое, domain назначается автоматически" class="form-control input-md">
								</div>
						</div>

					<!-- Prepended checkbox -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="checkboxes">Нужен MySQL</label>
								<div class="col-md-4">
									<div class="checkbox">
										<label for="checkboxes-0">
											<input type="checkbox" name="use_mysql" id="checkboxes-0" value="1">
										</label>
									</div>
								</div>
						</div>

										
						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="button_1"></label>
								<div class="col-md-1">
									<button id="button_1" name="button_1" class="btn btn-primary">Отправить заявку</button>
								</div>
						</div>
					</fieldset>
					<script  charset="utf-8" type="text/javascript">
							  var tooltipObj = new DHTMLgoodies_formTooltip();
							  tooltipObj.setTooltipPosition('right');
							  tooltipObj.setPageBgColor('#EEEEEE');
							  tooltipObj.setTooltipCornerSize(15);
							  tooltipObj.initFormFieldTooltip();
						</script>	</form>
				</form>
		</body>
	</head>
</html>