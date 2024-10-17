<?php

$mensaje = '';
$param5 = 0;

for($i = 1; $i <= 100; $i++){
    $mensaje .= $i . '-';
    $param5 += $i;
}

$mensaje = rtrim($mensaje, '-');
echo $mensaje . '<br>';

echo 'La suma de los números entre 1 y 100 es: ';
echo '<b>' . $param5;

?>