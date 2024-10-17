<?php

echo '<table border="1">';
echo '<th><b>Listado de números</b></th>';

$contador = 200;
$param5 = 0;

while ($contador <= 500){
    
    echo '<tr>';
    echo '<td>' . $contador . '</td>';

    $param5 += $contador;
    $contador++;
}

echo '<tr><td><b>SUMA: ' . $param5 . '</b></td>';
?>
