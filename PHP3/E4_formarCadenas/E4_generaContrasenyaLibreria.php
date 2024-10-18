<?php
include "E4_libGeneraContrasenya.php";

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