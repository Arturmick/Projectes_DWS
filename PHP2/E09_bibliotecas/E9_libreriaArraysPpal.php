<?php
include ("E9_libreriaArrays.php");

$array1 = array(10,20,30,40,50);

$array2 = range(10,100,1);

$array3 = array("Pepe","Juan", 23, "Antonio", "Javier");

$array4 = array(1,2,3,4,5,6,7,8,9);

vectoresUnordList($array1);

echo "<br>";

vectoresUnordListRange($array2);

echo "<br>";

vectoresWhile($array3);

echo "<br>";

vectoresInverso($array4);

echo "<br>";

vectoresForeach($array4);

