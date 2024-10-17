<?php

echo '<table border="1">
        <thread>
        <tr>
        <th>' . 'Decadas desde el 2000 al 2100' . '</th>
        </tr>
        </thread>
        <tbody>';


define ('DIVISOR',10);
$contador = 2000;

while ($contador <= 2100){
    if($contador%DIVISOR == 0) {
        
        echo '<tr>
            <td>' . $contador . '</td>
            </tr>
            </tbody>
            </talbe>';
    }
    $contador++;
}
?>
