
<?php

echo '<table border="1">
        <thread>
        <tr>
        <th>' . 'Incremento el valor en 3' . '</th>
        </tr>
        </thread>
        <tbody>';

for($i = 32; $i <= 57; $i+=3) {
    
        echo '<tr>
            <td>' . $i . '</td>
            </tr>
            </tbody>
            </talbe>';
}
?>