<?
	#------- > Инклуды < -------#
	require("function.php");
	require("checklogin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" href="../../ICO/icon.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="../../CSS/dialog.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/settings.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/toast.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Настройки</title>
</head>
<body>
	<form action="updatesettings.php" method="POST">
		<div id="global_block">
			<h3 class="global_text">Настройки профиля</h3>
			<div id="polosa"></div>
			<h4 class="text_one">Электронная почта:</h4> <? UserInformation(4, 2, 2, 1); ?>
			<h4 class="text_one">Вход по почте:</h4> <? UserInformation(6, 2, 3, 2); ?>
			<br><br>
		</div>
		
	</form>
	<button class="save_settings">Отправить</button>
	<button class="save_settings" id="exit_settings">Назад</button>
	<div id="dialogs">
		
	</div>
	<script src="../../SCRIPTS/toast.min.js"></script>
	<script src="../../SCRIPTS/jquery-3.6.0.min.js"></script>
	<script src="../../SCRIPTS/cookie.js"></script>
	<script src="../../SCRIPTS/function.js"></script>
	<script src="../../SCRIPTS/settings.js"></script>
	<script src="../../SCRIPTS/errors.js"></script>
</body>
</html>