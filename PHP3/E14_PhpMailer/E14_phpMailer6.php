<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$config = include 'E14_devuelve.php';
$decrypted_password = base64_decode($config['EMAIL_PASSWORD']);

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
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->Username = 'artur.trombo@gmail.com';
	$mail->Password = $decrypted_password;
	
	$mail->setFrom('artur.trombo@gmail.com', 'Arturo');
	
	
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $message;
	
	$mail->addAttachment('adjunto_test.xsd');
	
	$address = 'destino@servidor.com';
	$mail->addAddress($address, 'Test');
	
	$result = $mail->send();
	
	echo 'Correo enviado';
} catch (Exception $e) {
	echo 'Error al enviar el correo: ', $mail->ErrorInfo;
}