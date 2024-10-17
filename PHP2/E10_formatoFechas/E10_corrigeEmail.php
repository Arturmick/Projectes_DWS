<?php

$email = '   nombreApellido@ggggggggmail.com   ';

echo "<p>Dirección a analizar:<br>'" . $email . "'";

echo "<p>Tiene " . strlen($email) . " letras.<br>";

if(substr_count($email, ' ') >= 1) {
    echo "Se han encontrado blancos.<br>Los eliminamos...";
    ltrim($email);
    rtrim($email);
}
echo "<p>Hasta ahora<br>email = " . $email . "<br>";

echo "<p>Buscamos .com en email...<br>";

if(substr_count($email, '.com') == 1) {
    echo "Hemos encontrado <b>.com</b><br>";
    
    $partes = explode('.', $email);
    $emailSinCom = $partes[0];
    $email = $emailSinCom . ".es";
    
    echo "Dirección corregida: '" . $email . "'.";
}


