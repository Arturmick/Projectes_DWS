<?php

echo '<table border="1">
        <thread>
        <tr>
        <th>' . 'Décadas desde el 2000 al 2100' . '</th>
        </tr>
        </thread>
        <tbody>';

define ('DIVISOR',10);

for($i = 2000; $i <= 2100; $i++) {
    if($i % DIVISOR == 0){
        echo '<tr>
            <td>' . $i . '</td>
            </tr>
            </tbody>
            </talbe>';
    }
}
?>