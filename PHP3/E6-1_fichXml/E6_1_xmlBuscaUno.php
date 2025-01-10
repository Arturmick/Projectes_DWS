<?php
$archivoXML = "peliculas.xml";
$actor = "El Actor";
$numeroCaso = 1;

$datos = simplexml_load_file($archivoXML);
echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	
	foreach ($datos->pelicula->personajes as $personaje) {
		
		foreach ($personaje as $persona) {
			
			echo '<h4>Caso ' . $numeroCaso . ':<br></h4>';
			
			if ($persona->actor == $actor) {
				echo "<h3>Nombre del Personaje:</h3> " . $persona->nombre . "<br>";
				echo "<h3>Actor:</h3> " . $persona->actor . "<br>";
			}else {
				echo "No se ha encontrado el personaje<br>";
			}
			$numeroCaso++;
		}
	}
}
?>