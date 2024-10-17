<?php

include ("E9_libreriaListaArray.php");

$elementos = array(10,20,30,40);

echo "<p>Invocamos a la función listarVectorTabla ...</p>";

listarVectorTabla($elementos);

echo "<p>Invocamos a la función listarVectorNoOrdenada</p>";

listarVectorNoOrdenada($elementos);