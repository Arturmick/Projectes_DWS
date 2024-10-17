<?php

include ("E9_libreriaMediaAritmetica.php");

echo "<h3><b>PROGRAMA PRINCIPAL</h3></b>";
echo "Invocamos a la función media aritmética con tatos valores como se desee...<br>";

mediaValores(10,20,30,40);

echo "Invocamos a la función media aritmética del vector que se le pase...<br>";

mediaArray(array(10,50,100));

echo "Invocamos a la función aritmética Referencia con do valores...<br>";

$valor1 = 50;
$valor2 = 100;
mediaValoresRefer($valor1, $valor2);
