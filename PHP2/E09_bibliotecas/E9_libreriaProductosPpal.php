<?php

include("E9_libreriaProductos.php");

echo "Estamos en el Programa Principal<br>";

$producto1 = 12;
$producto2 = 10;

$a = 6;
$b = 5;
$c = 4;
$d = 3;
$e = 2;
$f = 1;

echo "<br>Producto de " . $producto1 . " y " . $producto2 . " = <b>" . producto($producto1, $producto2) . "</b><br>";
echo "<br>";
productoValores($a,$b,$c,$d,$e,$f);
