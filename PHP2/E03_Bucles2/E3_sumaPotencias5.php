<?php

echo '<table border="1">';
echo '<th><b>Listado de potencia</b></th>';

$multiplo = 1;
$param5 = 0;
$contador = 5;

for($multiplo = 1; $multiplo <= 15; $multiplo++){
    echo '<tr><td>' . $contador . '</td></tr>';
    $param5 += $contador;    
    $contador = 5 ** ($multiplo + 1);
}
echo '<tr><td><b>SUMA: ' . $param5 . '</b></td></tr>';
?>