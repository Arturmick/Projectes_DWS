<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$file = $_FILES['file']['tmp_name'];
	$fileName = $_FILES['file']['name'];
	
	$mail = new PHPMailer(true);
	
	try {
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'artur.trombo@gmail.com';
		$mail->Password = 'C0rr304rtur.tr0mb0!';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;
		
		$mail->setFrom('artur.trombo@gmail.com', 'Arturo');
		$mail->addAddress($email);
		
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $message;
		
		if (!empty($file)) {
			$mail->addAttachment($file, $fileName);
		}
		
		$mail->send();
		echo 'Correo enviado';
	} catch (Exception $e) {
		echo 'Error al enviar el correo: ', $mail->ErrorInfo;
	}
}