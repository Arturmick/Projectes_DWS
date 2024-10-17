<?php

include ("E11_coche.php");

$coche1 = new Coche();

$coche1->marca = "Audi";
$coche1->modelo = "Q5";
$coche1->pvp = 37000;
$coche1->potencia = 140;

$coche2 = new Coche();

$coche2->marca = "Audi";
$coche2->modelo = "Q7";
$coche2->pvp = 58000;
$coche2->potencia = 240;

echo "<p>Datos coche 1<br>===========<br>" .
    "Marca: $coche1->marca<br>" .
    "Modelo: $coche1->modelo<br>" .
    "Potencia: $coche1->potencia<br>" .
    "Pvp: $coche1->pvp<br></p>";
echo "<p>Datos coche 2<br>===========<br>" .
    "Marca: $coche2->marca<br>" .
    "Modelo: $coche2->modelo<br>" .
    "Potencia: $coche2->potencia<br>" .
    "Pvp: $coche2->pvp<br>";