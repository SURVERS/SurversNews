<?
	require("connect.php");

	$id = $_COOKIE['auth'];
	$email = $_GET['email'];
	$type_email = $_GET['t_email'];

	mysqli_query($connect, "UPDATE `accounts` SET `Email` = '$email', `AvailableEmail` = '$type_email' WHERE `Hash` = '$id'");
	mysqli_close($connect);
?>