<?php
include_once ("E11_cuadrado.php");
include_once ("E11_pentagono.php");
include_once ("E11_hexagono.php");

$cuadrado = new E11_cuadrado(5);
$pentagono = new E11_pentagono(5,4);
$hexagono = new E11_hexagono(5,4);

echo "AREA del cuadrado: " . $cuadrado->calcularArea();
echo "<br>PERÍMETRO del cuadrado: " . $cuadrado->calcularPerimetro();
echo "<br>________________________________";
echo "<br>AREA del pentágono: " . $pentagono->calcularArea();
echo "<br>PERÍMETRO del pentágono: " . $pentagono->calcularPerimetro();
echo "<br>________________________________";
echo "<br>AREA del hexágono: " . $hexagono->calcularArea();
echo "<br>PERÍMETRO del hexágono: " . $hexagono->calcularPerimetro();
echo "<br>________________________________";