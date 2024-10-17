<?php

$aprobados = 0;
$alumno = 1;

while ( $alumno <= 5) {
    echo $nota = rand(0,10) . '<br>';
    if($nota >= 5){
        $aprobados++;
    } 
    $alumno++;
}
echo '<b>El número de aprobados es: </b>' . $aprobados;

