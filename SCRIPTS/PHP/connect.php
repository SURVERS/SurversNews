<?
	#---------> Подключение базы данных <---------#
	define("MYSQL_IP", 			"127.0.0.1"); 	# <--- ИП Базы данных
	define("MYSQL_USER", 		"mysql"); 		# <--- Имя пользователя
	define("MYSQL_PASS", 		"mysql"); 		# <--- Пароль от пользователя
	define("MYSQL_NAMEBD", 		"surversnews"); # <--- Название базы данных

	$connect = mysqli_connect(MYSQL_IP, MYSQL_USER, MYSQL_PASS, MYSQL_NAMEBD);
	$connect->query("SET NAMES 'utf8' ");
?>