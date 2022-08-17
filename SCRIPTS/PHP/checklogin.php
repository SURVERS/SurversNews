<?
	#----------- |  require  | -----------
	require("connect.php");
	#----------- |  переменные  | -----------
	$id = $_COOKIE['auth'];
	$sql = mysqli_query($connect, "SELECT * FROM `accounts`");
	$num = mysqli_num_rows($sql);
	while ($row = mysqli_fetch_array($sql, MYSQLI_NUM)) {
		$num -=1;
		if($num == 0){
			if($row[0] != $id){
				echo "<br><a href=\"login.php\">Ошибка авторизаци.. Попробуйте авторизоваться по новой!</a>";
				exit();
			}
		}
	}
?>