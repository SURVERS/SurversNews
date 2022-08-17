<?
	require_once($_SERVER['DOCUMENT_ROOT'].'../SCRIPTS/PHP/PHPMail/PHPMailer.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'../SCRIPTS/PHP/PHPMail/SMTP.php');
	 
	class mail extends PHPMailer {
	    public function __construct(){
	        $this->isSMTP();
	        $this->isHTML(true);
	        $this->CharSet = 'UTF-8';
	        $this->Host = 'ssl://smtp.gmail.com';
	        $this->SMTPSecure = 'SSL';
	        $this->Port = 465;
	        $this->SMTPAuth = true;
	        $this->Username = 'surversemail@gmail.com'; // логин - до  @yandex.ru
	        $this->Password = 'gtx1060top';
	        $this->setFrom('computertv228@gmail.com', 'Name'); // почта и имя отправителя (эта информация будет приходить получателю. Почту я всегда указываю реальную.)
	    }
	}
?>