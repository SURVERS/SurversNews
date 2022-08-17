<?
	#------- > Инклуды < -------#
	include("SCRIPTS/PHP/connect.php");
	include("SCRIPTS/PHP/function.php");
	#------- > Переменные < -------#
	$login = filter_var(trim($_POST["login_text"]), FILTER_SANITIZE_STRING);
	$pass = $_POST["password_text"];
	$sql = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `Login` = '$login' AND `Password` = '$pass'");
	$row = mysqli_fetch_row($sql);
	if(mysqli_num_rows($sql)){
		setcookie("auth", $row[0], strtotime("+999 days"));
		header("Location: profile.php");
	}
	else
		header("Location: login2.php");
	mysqli_close($connect);
?>