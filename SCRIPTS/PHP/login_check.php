<?
	#------- > Инклуды < -------#
	include("SCRIPTS/PHP/connect.php");			# -> Подключается к базе данных
	#------- > Переменные < -------#
	$id = $_COOKIE["auth"];
	$sql = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `Hash` = '$id'");
	$row = mysqli_fetch_array($sql, MYSQLI_NUM);
	#------- > Выполнение кода < -------#
	if(!$_COOKIE['auth'])
		echo "<a href=\"login.php\" class=\"enter_account\">Войти</a>";
	else
		echo "<a href=\"profile.php\" class=\"enter_account\">$row[1]</a>";
?>