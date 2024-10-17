<?php
include_once "E12_areaTrianguloTrataEX.php";

$triangulo = new E12_areaTrianguloTrataEX();

$base1 = 5;
$altura1 = 4;

echo "Caso 1: base y altura positivos o cero<br>";
echo $triangulo->areaTriangulo($base1,$altura1);

$base2 = -5;
$altura2 = -4;

echo "<br>Caso 2: base y altura negativos<br>";
echo $triangulo->areaTriangulo($base2,$altura2);
