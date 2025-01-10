<?php
$archivoXML = "peliculas.xml";
$datos = simplexml_load_file($archivoXML);
$personajes = $datos->xpath('//personaje');
$numeroCaso = 1;

echo '<br>';

if ($datos === false) {
	echo "Error cargando el archivo XML";
} else {
	
	echo '<h3>Información del personaje "Srta. Programadora"</h3>';
	
	foreach ($personajes as $valor) {
		
		echo '<h4>Caso ' . $numeroCaso . ':<br></h4>';
		
		if($valor->nombre != "Srta. Programadora") {
			echo '<br>El personaje "Srta. Programadora" no se ha encontrado<br>';
			continue;
		}
		
		echo '<b>Nombre: </b>' . $valor->nombre . '<br>';
		echo '<br>';
		echo '<b>Actor: </b>' . $valor->actor . '<br>';
		echo '<br>';
		
		$numeroCaso++;
	}
}
?>