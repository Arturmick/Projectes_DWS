<?php
$passTotal = "";
$passEpeciales = "";
$passBasicos = "";

const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';

$numeroBasicos = $_GET['cantidadBasicos'];
$numeroCaracteresBasicos = strlen(CADENA_BASICOS);


$numeroEspeciales = $_GET['cantidadEspeciales'];
$numeroCaracteresEspeciales = strlen(CADENA_ESPECIALES);

if($numeroBasicos != "" && $numeroEspeciales != ""){

    for ($i = 1; $i <= $numeroBasicos; $i++) {

        $passBasicos .= CADENA_BASICOS[rand(0, $numeroCaracteresBasicos-1)];
    }

    for ($i = 1; $i <= $numeroEspeciales; $i++) {

        $passEpeciales .= CADENA_ESPECIALES[rand(0, $numeroCaracteresEspeciales-1)];
    }

    if($_GET['tipo'] == 'basicos'){

        $passTotal = $passBasicos . $passEpeciales;

    }else {

        $passTotal = $passEpeciales . $passBasicos;

    }
    echo "<br><b>El password generado aleatorioamente es: <br>$passTotal";
}else{
    echo "Hay algun valor que no se ha introducido, recarga la página.";
}


