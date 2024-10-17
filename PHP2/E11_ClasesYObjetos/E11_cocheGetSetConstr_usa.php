<?php
include ("E11_cocheGetSetConstr.php");

$coche1 = new Coche("Audi","Q5",140,37000);

$coche2 = new Coche("Audi","Q7",240,58000);

echo "<p>Datos coche 1<br>==============" .
    "<br>Marca: " . $coche1->getMarca() .
    "<br>Modelo: " . $coche1->getModelo() .
    "<br>Potencia: " . $coche1->getPotencia() .
    "<br>Pvp: " . $coche1->getPvp() . "</p>";

echo "<p>Datos coche 2<br>==============" .
    "<br>Marca: " . $coche2->getMarca() .
    "<br>Modelo: " . $coche2->getModelo() .
    "<br>Potencia: " . $coche2->getPotencia() .
    "<br>Pvp: " . $coche2->getPvp() . "</p>";