<?php
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