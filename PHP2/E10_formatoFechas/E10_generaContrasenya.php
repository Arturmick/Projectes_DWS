<?php

$passTotal = "";
$passEpeciales = "";
$passBasicos = "";

const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
$numeroBasicos = 5;
$numeroCaracteresBasicos = strlen(CADENA_BASICOS);

const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';
$numeroEspeciales = 4;
$numeroCaracteresEspeciales = strlen(CADENA_ESPECIALES);

$basicosPrimero = 1;

if($numeroBasicos > 8 || $numeroEspeciales > 8){
    echo "<br>Has introducido un número de carácteres demasiado alto";
}else if ($numeroBasicos < 4 || $numeroEspeciales < 4){
    echo "<br>Has introducido un número de carácteres demasiado bajo";
}

echo "<br><b>El password generado aleatorioamente es:";

for ($i = 1; $i <= $numeroBasicos; $i++) {

    $passBasicos .= CADENA_BASICOS[rand(0, $numeroCaracteresBasicos-1)];
}

for ($i = 1; $i <= $numeroEspeciales; $i++) {

    $passEpeciales .= CADENA_ESPECIALES[rand(0, $numeroCaracteresEspeciales-1)];
}

if($basicosPrimero == 1){
    $passTotal = $passBasicos . $passEpeciales;
}
echo "<p>$passTotal</p>";