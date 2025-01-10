<?php
$archivoXML = "peliculas.xml";
$datos = simplexml_load_file($archivoXML);
$personajes = $datos->xpath('//personaje');

echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	
	echo '<h3>Personajes de la película:</h3>';
	
	foreach ($personajes as $valor) {
		
		echo '<b>Nombre: </b>' . $valor->nombre . '<br>';
		echo '<br>';
		echo '<b>Actor: </b>' . $valor->actor . '<br>';
		echo '<br>';
	}
}
?>