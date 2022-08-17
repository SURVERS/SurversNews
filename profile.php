<?
	#------- > require < -------#
	require("SCRIPTS/PHP/connect.php");			# -> Подключается к базе данных
	require("SCRIPTS/PHP/function.php");		# -> Подключает все функции
	require("SCRIPTS/PHP/theme.php");			# -> Проверяет какая тема установлена, и уже после чего устанавливает ее!
	require("SCRIPTS/PHP/checklogin.php");		# -> Проверяет, на то что пользователь авторизован
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" href="ICO/icon.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="../../CSS/dialog.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Профиль</title>
</head>
<body>
	<div id="shapka">
		<a href="index.php" class="logotype">S U R V E R S</a>
		<? require("SCRIPTS/PHP/login_check.php"); ?>
	</div>
	<div id="profile_block">
		<? UserInformation(7, 1, 4); ?>
		<? UserInformation(1, 1, 1); ?>
		<h4 class="item_profile" name="submit">⚙ <a href="SCRIPTS/PHP/settings.php" class="text_profile">Настройки</a> </h4>
		<h4 class="item_profile">✘ <a href="leave_account.php" class="text_profile">Выйти с аккаунта</a> </h4>
		<h4 class="item_profile">✎ <a href="HTML/change_themes.html" class="text_profile">Тема сайта</a> </h4>
	</div>
	<div id="post_news_create">
		<h4 class="text_hi">Что у вас нового?</h4>
		<form action="newpost.php" method="POST">
			<textarea name="commentsss" class="textarea_go">Семья Survers Family легендарна в мире GTA SAMP...</textarea>
			<input type="submit" class="enter_new_post" value="Отпубликовать">
		</form>
	</div>
	<div id="conrole_avatar" style="display: none;">
		<a href="HTML/change_avatars.html" class="conrole_text">Управление аватаркой</a>
	</div>
	<script src="SCRIPTS/toast.min.js"></script>
	<script src="SCRIPTS/jquery-3.6.0.min.js"></script>
	<script src="SCRIPTS/cookie.js"></script>
	<script src="SCRIPTS/function.js"></script>
	<script src="SCRIPTS/errors.js"></script>
	<script src="SCRIPTS/profile_js.js"></script>
</body>
</html>