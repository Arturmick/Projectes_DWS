<?php

define ('DIVISOR',2);
$contador = 0;

do {
    if($contador%DIVISOR == 0) {
        
        echo $contador . '|';
    }
    $contador++;
}while ($contador <= 100);

?>
