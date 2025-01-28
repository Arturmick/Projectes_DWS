<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$files = $_FILES['file'];
	
	$mail = new PHPMailer(true);
	
	try {
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'artur.trombo@gmail.com';
		$mail->Password = '***********';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;
		
		$mail->setFrom('artur.trombo@gmail.com', 'Arturo');
		$mail->addAddress($email);
		
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $message;
		
		for ($i = 0; $i < count($files['tmp_name']); $i++) {
			if (!empty($files['tmp_name'][$i])) {
				$mail->addAttachment($files['tmp_name'][$i], $files['name'][$i]);
			}
		}
		
		$mail->send();
		echo 'Correo enviado';
	} catch (Exception $e) {
		echo 'Error al enviar el correo: ', $mail->ErrorInfo;
	}
}