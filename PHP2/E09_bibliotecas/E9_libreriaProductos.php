<?php

function producto($a,$b) {
    return $a*$b;
}

function productoValores() {
    
    $argumentos = func_get_args();
    
    echo "<b>Función producto</b><br>Número elementos a multiplicar: " . count($argumentos) . "<br>";
    
    echo "Valores:<br>==========<br>(";
    
    $total = 1;
    
    foreach($argumentos as $arg){
        
        if($total != 1){
            echo ",";
        }
        echo $arg;
        $total *= $arg;
    }
    echo ")";
    echo "<br><b>El producto es: " . $total;
}