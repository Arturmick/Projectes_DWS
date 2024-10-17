<?php

echo "<p>Email a analizar:<br>";

$email = 'nombreApellido@gmail.com';

echo "'" . $email . "'";

echo "<p>Tiene " . strlen($email) . " letras.<br>";

$partes = explode('@', $email);
$nombreUsuario = $partes[0];
$dominio = $partes[1];

function comprobarEmail($email,$nombreUsuario, $dominio){
    
    if(substr_count($email, '@') != 1) {
        echo "<br><b>Email no válido</b><br>";
        return false;
    }     
    
    if(substr_count($dominio, '.') < 1){
        echo "<br><b>Email no válido</b><br>";
        return false;
    }

    if (strlen($nombreUsuario) === 0 || strlen($dominio) === 0) {
        echo "<br><b>Email no válido</b><br>";
        return false;
    }
    return true;
}

if(comprobarEmail($email,$nombreUsuario,$dominio)) {
    echo "Es una dirección de email válida.<br>";
}

echo "<p>El nombre de usuario es: <b>" . $nombreUsuario . "</b><br>";
echo "El dominio es: <b>" . $dominio;




        

