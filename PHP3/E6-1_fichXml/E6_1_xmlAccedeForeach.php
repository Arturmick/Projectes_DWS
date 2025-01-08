<?php
$archivoXML = "peliculas.xml";

$datos = simplexml_load_file($archivoXML);
echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	foreach ($datos->pelicula as $pelicula) {
		echo "<h2>Título:" . $pelicula->titulo . "</h2>";
		
		foreach ($pelicula->personajes->personaje as $personaje) {
			echo "<h3>Nombre del Personaje:</h3> " . $personaje->nombre . "<br>";
			echo "<h3>Actor:</h3> " . $personaje->actor . "<br>";
		}
		echo "<h3>Argumento:</h3> " . $pelicula->argumento . "<br>";
		
		foreach ($pelicula->puntuacion as $puntuacion) {
			echo "<h3>Tipo:</h3> " . $puntuacion['tipo'] . " = Puntuación: " . $puntuacion . "<br>";
		}
		echo "<hr>";
	}
}
?>