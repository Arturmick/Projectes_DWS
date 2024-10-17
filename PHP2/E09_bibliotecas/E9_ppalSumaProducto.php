<?php
include ("E9_funcionSumaProducto.php");

echo "<br>Asignamos valores a los dos valores<br>\$a= 10<br>\$b =20<br>";
$a = 10;
$b = 20;

echo "<br>Llamada a la Función <b>Suma</b><br>" .
        "<br>La suma de " . $a . " y " . $b . " es " . suma($a,$b);

echo "<br>Llamada a la Función <b>Producto</b><br>" .
        "<br>El producto de " . $a . " y " . $b . " es " . producto($a,$b);
