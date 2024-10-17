<?php

echo '<table border="1">
        <thread>
        <tr>
        <th>' . 'Incremento el valor en 3' . '</th>
        </tr>
        </thread>
        <tbody>';

$contador = 32;

while ($contador <= 57){
        echo '<tr>
            <td>' . $contador . '</td>
            </tr>
            </tbody>
            </talbe>';
    
    $contador += 3;
}
?>