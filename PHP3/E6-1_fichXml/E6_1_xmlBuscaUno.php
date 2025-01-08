<?php
$archivoXML = "peliculas.xml";
$actor = "El Actor";

$datos = simplexml_load_file($archivoXML);
echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	
	foreach ($datos->pelicula->personajes as $personaje) {
		
		foreach ($personaje as $persona) {
			
			if ($persona->actor == $actor) {
				echo "<h3>Nombre del Personaje:</h3> " . $persona->nombre . "<br>";
				echo "<h3>Actor:</h3> " . $persona->actor . "<br>";
			}else {
				echo "No se ha encontrado el personaje<br>";
			}
		}
	}
}//acabar el ejercicio, me salen los dos actores y uno nunca está, solo debe salir uno
?>