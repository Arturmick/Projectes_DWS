<?php
$archivoXML = "peliculas.xml";

$datos = simplexml_load_file($archivoXML);
echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	
	print_r($datos);
	
}