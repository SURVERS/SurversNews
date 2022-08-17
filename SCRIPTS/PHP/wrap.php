<?
	#------- > require < -------#
	require("connect.php");
	#------- > Переменные < -------#
	$id = $_COOKIE['auth'];
	$email = $_GET['form_data'];
	$sql = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `Hash` = '$id'");
	$row = mysqli_fetch_array($sql);
	#------- > Выполнения кода < -------#
	if($row[4] == $email){
		setcookie("result", "1", time() + 10);
	}
	else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return setcookie("result", "3", time() + 10);
		}
		setcookie("result", "2", time() + 10);
	}
	mysqli_close($connect);
?>