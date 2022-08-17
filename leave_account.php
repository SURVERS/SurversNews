<?
	$id = $_COOKIE['auth'];
	setcookie("auth", $id, time() - 3600);
	header("Location: index.php");
?>