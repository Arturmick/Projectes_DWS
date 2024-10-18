<?php
$passTotal = "";

$arrayContrasenyas = array();

const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';

$numeroBasicos = $_GET['cantidadBasicos'];

$numeroEspeciales = $_GET['cantidadEspeciales'];

$cantidadContrasenyas = $_GET['cantidadContrasenyas'];

if($numeroBasicos != "" && $numeroEspeciales != ""){

    echo "Las contraseñas generadas son: <br>";

    $arrayContrasenyas = generaArrayPassword($numeroBasicos,$numeroEspeciales, $cantidadContrasenyas);

    for($i = 1;$i <= $cantidadContrasenyas; $i++){
        echo $arrayContrasenyas[$i] . "<br>";
    }

}else{
    echo "Hay algun valor que no se ha introducido, recarga la página.";
}
function generaArrayPassword($numeroBasicos,$numeroEspeciales,$cantidadContrasenyas)
{
    $arrayPass = array();

    for($i = 1; $i <= $cantidadContrasenyas;$i++) {
        $passBasicos = "";
        $passEpeciales = "";

        for ($j = 1; $j <= $numeroBasicos; $j++) {
            $numeroCaracteresBasicos = strlen(CADENA_BASICOS);
            $passBasicos .= CADENA_BASICOS[rand(0, $numeroCaracteresBasicos-1)];
        }

        for ($k = 1; $k <= $numeroEspeciales; $k++) {
            $numeroCaracteresEspeciales = strlen(CADENA_ESPECIALES);
            $passEpeciales .= CADENA_ESPECIALES[rand(0, $numeroCaracteresEspeciales-1)];
        }

        if($_GET['tipo'] == 'basicos'){

            $password = $passBasicos . $passEpeciales;

        }else {

            $password = $passEpeciales . $passBasicos;

        }

        $arrayPass[$i] = $password;
    }
    return $arrayPass;
}