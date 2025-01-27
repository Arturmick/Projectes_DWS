<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'artur.trombo@gmail.com';
$mail->Password = 'C0rr304rtur.tr0mb0!';
$mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';
$mail->Port = 587;

$mail->isHTML(true);
$mail->Subject = 'Prueba de correo';
$mail->Body = 'Hola, esto es una prueba de correo';

$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

$mail->setFrom('artur.trombo@gmail.com', 'Arturo');
$mail->addAddress('arturomiq_90@hotmail.com', 'Arturo Trombo');

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

try {
	$mail->send();
	echo 'Correo enviado';
} catch (Exception $e) {
	echo 'Error al enviar el correo: ', $mail->ErrorInfo;
}
