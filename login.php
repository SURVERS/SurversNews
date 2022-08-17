<?
	if($_COOKIE['auth'] != ""){
		header("Location: profile.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" href="ICO/icon.ico" rel="shortcut icon">

	<link rel="stylesheet" type="text/css" href="CSS/news.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Авторизация</title>
</head>
<body>
	<div id="shapka">
		<a href="index.php" class="logotype">S U R V E R S</a>
		<? require("SCRIPTS/PHP/login_check.php"); ?>
	</div>
	<h3 class="h1_login">Приветствуем тебя!<br>Авторизуйся, чтобы начать управлять сайтом<h5 class="h1_login">Если забыли логин/пароль, просьба написать в ВКонтакте [ <a href="https://vk.com/vladkorobov" class="url_color">Написать</a> ]</h5></h3>
	<img src="IMAGE/891399.png" class="login_png">
	<div id="block_login">
		<img src="IMAGE/mini_logo.png">
		<h4 class="login_text_global">Вход в SURVERS-Панель</h4>
		<form action="checklogin.php" method="POST">
			<input type="text" name="login_text" placeholder="Логин" class="global_input"><br><br>
			<input type="password" name="password_text" placeholder="Пароль" class="global_input"><br><br>
			<input type="submit" value="Войти" class="button_login"><br><br>
		</form>
		<a href="https://vk.com/vladkorobov" class="url_color">Забыл логин/пароль</a>
	</div>
</body>
</html>