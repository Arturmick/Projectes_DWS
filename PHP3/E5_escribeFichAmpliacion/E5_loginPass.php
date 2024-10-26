<?php
$passTotal = "";

$contrasenya = "";

$contenidoArchivo = "";
const CADENA_BASICOS = '1234567890abcdefghijklmnopqrstuvwxyz';
const CADENA_ESPECIALES = '!?@€#*$%&/([{)]}';

$numeroBasicos = $_GET['cantidadBasicos'];

$numeroEspeciales = $_GET['cantidadEspeciales'];

$cantidadContrasenyas = 1;

$archivoGuardado = "E5_usuarios/E5_loginPass.txt";

$nombre = $_GET['usuario'];
$apellido1 = $_GET['apellido1'];
$apellido2 = $_GET['apellido2'];

/*********************CONTRASEÑAS**************************/



if($numeroBasicos != "" && $numeroEspeciales != ""){

    echo "La contraseña generada es: ";

    $contrasenya = generaPassword($numeroBasicos,$numeroEspeciales);

    echo "<br>";
    echo $contrasenya;

    if(guardarEnArchivo($contrasenya,$archivoGuardado)){

        $usuario = crearLogin($nombre,$apellido1,$apellido2);

        echo "<br>Su usuario es $usuario";

        $archivoGuardadoAbierto = fopen($archivoGuardado, "a+");

        $reescribirFichero = fwrite($archivoGuardadoAbierto,$usuario."\t".$contrasenya."\n");

        if($reescribirFichero !== false && $reescribirFichero !== 0){

            echo "<br>Usuario $usuario y contrasenya $contrasenya guardados";

        }else {

            echo "<br>Ha habido un error de guardado";
        }
        fclose($archivoGuardadoAbierto);
    }

}else{
    echo "Hay algun valor que no se ha introducido, recarga la página.";
}

/**********************GENERAR CONTRASEÑA*****************************/

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
function guardarEnArchivo($contrasenya, $archivoGuardado)
{
    if (!file_exists($archivoGuardado)) {
        echo "<br>El archivo de guardado no existe";
        echo "<br>Creando en el archivo: ".$archivoGuardado;
    }else {
        echo "<br>El archivo de guardado ya existe";
        echo "<br>Guardando en el archivo: " . $archivoGuardado;
        $contenidoArchivo = file_get_contents($archivoGuardado);
    }

    if(strpos($contenidoArchivo,$contrasenya) !== false){

        echo "<br>La contrasenya $contrasenya, ya existe, no se puede guardar";

    }else {
        return true;
    }
    return false;
}
/***************************CREAR LOGIN*************************/

function crearLogin($nombre, $apellido1,$apellido2)
{
    $loginNombre = completarConAleatorios(substr($nombre, 0, 4), 4);
    $loginApellido1 = completarConAleatorios(substr($apellido1, 0, 3), 3);
    $loginApellido2 = completarConAleatorios(substr($apellido2, -2), 2);

    $login = $loginNombre . $loginApellido1 . $loginApellido2;

    return $login;
}

/********************AÑADIR CARACTERES HASTA DESEADOS****************/

function completarConAleatorios($cadena, $longitud) {
    $cadenaAleatoria = 'abcdefghijklmnopqrstuvwxyz'; // Puedes personalizar el conjunto de caracteres
    while (strlen($cadena) < $longitud) {
        $cadena .= $cadenaAleatoria[rand(0, strlen($cadenaAleatoria) - 1)];
    }
    return substr($cadena, 0, $longitud);
}
