<?php

$mensaje = '';
$param5 = 0;

echo '<b>Listado de números</b><br><br>';

for($i = 100; $i <= 200; $i++){
    $mensaje .= $i . '<br>';
    $param5 += $i;
}

$mensaje = rtrim($mensaje, '-');
echo $mensaje . '<br>';

echo 'La suma de los números es: ';
echo '<b>' . $param5;

?>