<?php

define ('DIVISOR',2);

for($i = 0; $i <= 100; $i++) {
    if($i % DIVISOR == 0){
        echo $i . '|';
    }
}
?>

