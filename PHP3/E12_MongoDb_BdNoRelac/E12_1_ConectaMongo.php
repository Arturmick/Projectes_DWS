<?php

$Fich_autoloadPhp = "vendor/autoload.php";

require_once $Fich_autoloadPhp;
try {
	$cadenaConexion = "mongodb://localhost:27017";
	
	$cliente = new MongoDB\Client($cadenaConexion);
	$bd = $cliente->libroservidor;
	echo 'Conectado   jkjljk';
} catch (Exception $e) {
	echo 'error';
	print ($e);
}