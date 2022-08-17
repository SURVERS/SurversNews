<?
	#------- > require < -------#
	require("SCRIPTS/PHP/connect.php");

	#------- > Переменные < -------#
	$select_theme_1 = $_GET['select_theme_1'];
	$select_theme_2 = $_GET['select_theme_2'];
	$id = $_COOKIE['auth'];
	#------- > Выполнения переменных/функций < -------#
	if($select_theme_1)
		mysqli_query($connect, "UPDATE `accounts` SET `Theme` = '0' WHERE `Hash` = '$id'");
	else
		mysqli_query($connect, "UPDATE `accounts` SET `Theme` = '1' WHERE `Hash` = '$id'");

	header("Location: profile.php");
?>