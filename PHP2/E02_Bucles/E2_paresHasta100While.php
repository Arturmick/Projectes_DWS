<?php

define ('DIVISOR',2);
$contador = 0;

while ($contador <= 100){
    if($contador%DIVISOR == 0) {
        
        echo $contador . '|';
    }
    $contador++;
}
?>
