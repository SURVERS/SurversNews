<?
	#----------- |  require  | -----------
	require("connect.php");
	require("checklogin.php");
	#----------- |  переменные  | -----------
	$id = $_COOKIE['auth'];
	mysqli_query($connect, "UPDATE `accounts` SET `Avatar` = 'default_avatar.png' WHERE `Hash` = '$id'");
	header("Location: ../../profile.php");
?>