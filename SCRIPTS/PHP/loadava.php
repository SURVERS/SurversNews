<?
	#----------- |  require  | -----------
	require("connect.php");
	require("checklogin.php");
	require("function.php");
	#----------- |  переменные  | -----------
	$id = $_COOKIE['auth'];
	$name = generateCode(21) . ".png";
	$tmp_name = $_FILES['filessssss']['tmp_name'];
	mysqli_query($connect, "UPDATE `accounts` SET `Avatar` = '$name' WHERE `Hash` = '$id'");
	#----------- |  функционал  | -----------
	move_uploaded_file($tmp_name, "../../IMAGE/AVATARS/" . $name);
	header("Location: ../../profile.php");
?>