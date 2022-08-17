<?
	#~~~~~~~~~~~~~~~~~~~~~~~~ | Чек данные | ~~~~~~~~~~~~~~~~~~~~~~~~#
	function UserInformation($user_id, $type_connect, $type_data, $id_text = 1){
		require("connect.php");
		switch($type_connect){
			case 1:
				require("SCRIPTS/PHP/connect.php");
				break;
			case 2:
				require("connect.php");
				break;
		}
		
		$id = $_COOKIE["auth"];
		$sql = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `Hash` = '$id'");
		$row = mysqli_fetch_array($sql, MYSQLI_NUM);
		switch($type_data){
			case 1:{
				echo "<h5 class=\"nickname_profile\">$row[$user_id]</h5>";
				break;
			}
			case 2:{
				echo "<h5 class=\"text_two\" id=\"textof$id_text\" name=\"info$id_text\">$row[$user_id]</h5>";
				break;
			}
			case 3:{
				$id_row = $row[$user_id] ? print('true') : 'Отключена';
				echo "<h5 class=\"text_two\" id=\"textof$id_text\" name=\"info$id_text\">$id_row</h5>";
				break;
			}
			case 4:{
				$names_photo = "IMAGE/AVATARS/" . $row[7];
				echo "<img src=\"$names_photo\" class=\"avatar_css\">";
				break;
			}
		}
	}
	#~~~~~~~~~~~~~~~~~~~~~~~~ | Генератор кодов | ~~~~~~~~~~~~~~~~~~~~~~~~#
	function generateCode($length=6) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
		$code = "";
		$clen = strlen($chars) - 1;
		while (strlen($code) < $length) {
			$code .= $chars[mt_rand(0,$clen)];
		}
		return $code;
	}
	#~~~~~~~~~~~~~~~~~~~~~~~~ | Запускает новости | ~~~~~~~~~~~~~~~~~~~~~~~~#
    function GetNews(){
    	require("SCRIPTS/PHP/connect.php");

	    $posts = mysqli_query($connect, "SELECT `Text`, `Date` FROM `news` ORDER BY `id` DESC");
		$nums = mysqli_num_rows($posts);
		
		while ($nums > 0) {
			$row = mysqli_fetch_array($posts);
			array_push($row);
			echo "<div id='post_news'>
				<h4 class='name_owner_post'>Владислав Коробов</h4>
				<h4 class='time_owner_post'>($row[1])</h4>
				<div id=\"posts\">
					<h1 class='text_post_owner'>$row[0]</h1>
				</div>
			</div> <br>";
		 	$nums--;
		}
    }
    #~~~~~~~~~~~~~~~~~~~~~~~~ | Таймер | ~~~~~~~~~~~~~~~~~~~~~~~~#
    function setInterval($f, $milliseconds){
	    $seconds=(int)$milliseconds/1000;
	    while(true){
	        $f();
	        sleep($seconds);
	    }
	}
?>