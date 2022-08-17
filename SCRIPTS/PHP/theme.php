<?
	#------- > Инклуды < -------#
	include("SCRIPTS/PHP/connect.php");
	#------- > Переменные < -------#
	$id = $_COOKIE["auth"];
	$sql = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `Hash` = '$id' AND `Theme`");
	$row = mysqli_fetch_array($sql, MYSQLI_NUM);
	#------- > Выполнения кода < -------#
	switch ($row[3]) {
		case 1:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/news3.css\">";
 			break;
		
		default:
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/news.css\">";
			break;
	}
	mysqli_close($connect);
?>