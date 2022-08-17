<?
	require_once($_SERVER['DOCUMENT_ROOT'].'../SCRIPTS/PHP/mail.php');
	 
	$email = 'computertv228@gmail.com'; // почта получателя
	$subject = 'Тема письма';
	$html = '
	<html>
	<head><title>'.$subject.'</title></head>
	<body>
	<p>Текст письма</p>
	</body>
	</html>
	';
	 
	$mail = new mail();
	$mail->addAddress($email);
	$mail->Subject = $subject;
	$mail->Body = $html;
	// $mail->addAttachment('/путь/к/файлу/файл', 'имя_файла'); // приложить файл, если нужно (можешь даже несколько)
	$mail->send(); // возвращает true/false в зависимости от результата
	mail($email, $subject, "das");
	echo "Успешно";
?>