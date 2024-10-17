<?php
include_once "E12_areaTrianguloArr.php";

$triangulo = new E12_areaTrianguloArr();

$base1 = [1,6,4];
$altura1 = [2,6,4];

echo "Caso 1: todas las bases y alturas positivos o cero<br>";
echo $triangulo->areaTriangulo($base1,$altura1);

$base2 = [-1,6,4];
$altura2 = [2,-6,4];

echo "<br>Caso 2: alguna negatiava<br>";
echo $triangulo->areaTriangulo($base2,$altura2);

