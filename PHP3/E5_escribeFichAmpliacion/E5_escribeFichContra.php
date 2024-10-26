<?php
$passTotal = "";

$arrayContrasenyas = array();

$contenidoArchivo = "";
const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';

$numeroBasicos = $_GET['cantidadBasicos'];

$numeroEspeciales = $_GET['cantidadEspeciales'];

$cantidadContrasenyas = $_GET['cantidadContrasenyas'];

$archivoGuardado = $_GET['archivoGuardado'];

/*********************CONTRASEÑAS**************************/

if($numeroBasicos != "" && $numeroEspeciales != ""){

    echo "Las contraseñas generadas son: ";

    for($i = 0; $i <= $cantidadContrasenyas;$i++){
        $arrayContrasenyas[$i] = generaPassword($numeroBasicos,$numeroEspeciales);
        echo "<br>";
        echo $arrayContrasenyas[$i];
    }

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

/***********************GUARDADO EN ARCHIVO***********************/

if (!file_exists($archivoGuardado)) {
    echo "<br>El archivo de guardado no existe";
    echo "<br>Creando en el archivo: ".$archivoGuardado;
}else {
    echo "<br>El archivo de guardado ya existe";
    echo "<br>Guardando en el archivo: " . $archivoGuardado;
    $contenidoArchivo = file_get_contents($archivoGuardado);
}

$archivoGuardadoAbierto = fopen($archivoGuardado, "a+");

$numeroContrasenyas = count($arrayContrasenyas);

for ($i = 0; $i < $numeroContrasenyas; $i++){

    if(strpos($contenidoArchivo,$arrayContrasenyas[$i]) !== false){

        echo "<br>La contrasenya $arrayContrasenyas[$i], ya existe, no se puede guardar";

    }else {

        $reescribirFichero = fwrite($archivoGuardadoAbierto,$arrayContrasenyas[$i]."\n");

        if($reescribirFichero !== false && $reescribirFichero !== 0){

            echo "<br>Contrasenya $arrayContrasenyas[$i] guardada en archivo";

        }else {

            echo "<br>Ha habido un error de guardado";
        }
    }
}
fclose($archivoGuardadoAbierto);