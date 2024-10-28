<?php

$archivo = "E6_mensajes5.txt";
$tamanyo = filesize($archivo);

if (file_exists($archivo) && $tamanyo > 0) {
	
	echo "<b>Utiliza fgetc()</b><br>";
	echo "Contenido del fichero mensajes7.txt hasta la fecha de hoy ".date("d/m/Y").":<br>";
	
	if (($gestor = @fopen($archivo, "r")) !== false) {
		
		while (($caracter = fgetc($gestor)) !== false) {
			
			if ($caracter == "\n") {
				echo "<br>";
			}
		    echo "<b>$caracter</b>";
		}
		fclose($gestor);
	}else {
		echo "El archivo está vacío";
	}
}else {
	echo "No se encuentra el archivo";
}