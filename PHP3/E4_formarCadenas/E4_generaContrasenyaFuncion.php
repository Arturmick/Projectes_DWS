<?php
$passTotal = "";

const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';

$numeroBasicos = $_GET['cantidadBasicos'];

$numeroEspeciales = $_GET['cantidadEspeciales'];

if($numeroBasicos != "" && $numeroEspeciales != ""){

    echo "La contraseña super segura final es: <br>";
    echo $passTotal = generaPassword($numeroBasicos,$numeroEspeciales);
}else{
    echo "Hay algun valor que no se ha introducido, recarga la página.";
}
function generaPassword($numeroBasicos,$numeroEspeciales)
{
    $passBasicos = "";
    $passEpeciales = "";


    for ($i = 1; $i <= $numeroBasicos; $i++) {
        $numeroCaracteresBasicos = strlen(CADENA_BASICOS);
        $passBasicos .= CADENA_BASICOS[rand(0, $numeroCaracteresBasicos-1)];
    }

    for ($i = 1; $i <= $numeroEspeciales; $i++) {
        $numeroCaracteresEspeciales = strlen(CADENA_ESPECIALES);
        $passEpeciales .= CADENA_ESPECIALES[rand(0, $numeroCaracteresEspeciales-1)];
    }

    if($_GET['tipo'] == 'basicos'){

        $password = $passBasicos . $passEpeciales;

    }else {

        $password = $passEpeciales . $passBasicos;

    }
    return $password;
}