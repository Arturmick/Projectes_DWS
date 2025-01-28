<?php
$password = '';

$encrypted_password = base64_decode($password);

echo "Contraseña encriptada: $encrypted_password" . $encrypted_password;