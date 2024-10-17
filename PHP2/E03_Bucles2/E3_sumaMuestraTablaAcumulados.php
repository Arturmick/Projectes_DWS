<?php

echo '<table border="1">';
echo '<th><b>Listado de números</b></th>';
echo '<th><b>Suma acumulada</b></th>';

$contador = 100;
$param5 = 0;

while ($contador <= 500){
    
    echo '<tr><td>' . $contador . '</td>';
    echo '<td>' . $param5 . '</td></tr>';

    $param5 += $contador;
    $contador++;
}
?>
