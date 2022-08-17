<?
	include("SCRIPTS/PHP/connect.php");
	include("SCRIPTS/PHP/function.php");

	$textik = nl2br($_POST["commentsss"]);
	$dates = date("F j, Y, H:i:s");
	$result = mysqli_query($connect, "INSERT INTO `news` (`ID`, `Text`, `Date`) VALUES (NULL, '$textik', '$dates')");
	mysqli_close($connect);
	header("Location: index.php");
?>