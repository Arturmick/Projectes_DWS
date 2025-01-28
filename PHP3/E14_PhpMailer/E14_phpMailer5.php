<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$emails = ['usuario1@example.com', 'usuario2@example.com'];
$subject = 'Asunto del correo';
$message = 'Este es el cuerpo del correo.';
$attachments = [
	['ruta' => '/path/to/file1.txt', 'nombre' => 'file1.txt'],
	['ruta' => '/path/to/file2.jpg', 'nombre' => 'file2.jpg']
];
	
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
	
	foreach ($emails as $email) {
		$mail->addAddress($email);
	}
	
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $message;
	
	foreach ($attachments as $attachment) {
		$mail->addAttachment($attachment['ruta'], $attachment['nombre']);
	}
	
	$mail->send();
	echo 'Correo enviado';
} catch (Exception $e) {
	echo 'Error al enviar el correo: ', $mail->ErrorInfo;
}
