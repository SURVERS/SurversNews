<?
	#------- > Инклуды < -------#
	include("SCRIPTS/PHP/theme.php");		# -> Проверяет какая тема установлена, и уже после чего устанавливает ее!
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="image/x-icon" href="ICO/icon.ico" rel="shortcut icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Новости</title>
</head>
<body>
	<div id="shapka">
		<a href="index.php" class="logotype">S U R V E R S</a>
		<? require("SCRIPTS/PHP/login_check.php"); ?>
	</div>
	<?
		require("SCRIPTS/PHP/function.php");
		GetNews();
	?>
	<script src="SCRIPTS/jquery-3.6.0.min.js"></script>
	<script src="SCRIPTS/main.js"></script>
</body>
</html>