<?php

echo '<table border="1">';
echo '<thread>';
echo '<tr>';
echo '<th>' . 'Numeros pares' . '</th>';
echo '</tr>';
echo '</thread>';
echo '<tbody>';


define ('DIVISOR',2);
$contador = 0;

while ($contador <= 100){
    if($contador%DIVISOR == 0) {
        
        echo '<tr>';
        echo '<td>' . $contador . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</talbe>';
    }
    $contador++;
}
?>



