<?php
echo"<b>Estamos en el Programa Principal</b><br>El valor de los parámetros lo establecemos desde él";

echo "<br>Hacemos la llamada a la función...";

productoValores(6,5,4,3,2,1);

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

