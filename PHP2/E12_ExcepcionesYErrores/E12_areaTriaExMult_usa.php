<?php
include_once "E12_areaTriaExMult.php";

$triangulo = new E12_areaTriaExMult();

$base1 = 5;
$altura1 = 4;

echo "Caso 1: base y altura positivos o cero<br>";
echo $triangulo->areaTriangulo($base1,$altura1);

$base2 = -5;
$altura2 = 4;

echo "<br>Caso 2: base y altura negativos<br>";
echo $triangulo->areaTriangulo($base2,$altura2);

$base3 = 5;
$altura3 = -4;

echo "<br>Caso 3: base y altura negativos<br>";
echo $triangulo->areaTriangulo($base3,$altura3);

$base4 = 6000;
$altura4 = 4;

echo "<br>Caso 4: base y altura negativos<br>";
echo $triangulo->areaTriangulo($base4,$altura4);
