<?php

echo '<table border="1">
        <thread>
        <tr>
        <th>' . 'Decadas' . '</th>
        </tr>
        </thread>
        <tbody>';


define ('DIVISOR',10);
$contador = 0;

do{
    if($contador%DIVISOR == 0) {
        
        echo '<tr>
            <td>' . $contador . '</td>
            </tr>
            </tbody>
            </talbe>';
    }
    $contador++;
}while ($contador <= 100);
?>
