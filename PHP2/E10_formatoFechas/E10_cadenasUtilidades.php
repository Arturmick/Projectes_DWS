<?php

echo "<p>Cadena a analizar:<br>";

$cadenaCaracteres = 'el gato está en el agua';

echo "'" . $cadenaCaracteres . "'";

echo "<p>Tiene una longitud de: " . strlen($cadenaCaracteres) . "<br>";

$partes = explode(' ', $cadenaCaracteres);

echo "<br>La cadena tiene " . count($partes) . " palabras.<br>";

$acumulador = 0;

contarLetras($partes,$acumulador);

echo "<br>La cadena tiene " . $acumulador . " letras.<br>";

function contarLetras($palabras, &$acumulador){
    
    foreach($palabras as $palabra) {
        
        $longitud = strlen($palabra);
        
        echo "($palabra, $longitud)";
        
        $acumulador += $longitud;
    }
}