<?php
include_once "E12_areaTriangulo.php";

$triangulo = new E12_areaTriangulo();

$base1 = 5;
$altura1 = 4;

echo "Caso 1: base y altura positivos o cero<br>";
echo "<b>ÁREA del TRIÁNGULO de base $base1 y $altura1 = " .
    $triangulo->areaTriangulo($base1,$altura1) . "</b>";

$base2 = -5;
$altura2 = -4;

echo "<br>Caso 2: base y altura negativos<br>";
echo "<b>ÁREA del TRIÁNGULO de base $base2 y $altura2 = " .
    $triangulo->areaTriangulo($base2,$altura2);
