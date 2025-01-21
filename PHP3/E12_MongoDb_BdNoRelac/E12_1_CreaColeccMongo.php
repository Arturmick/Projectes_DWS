<?php

$Fich_autoloadPhp = 'vendor/autoload.php';

require_once $Fich_autoloadPhp;

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	$bd->createCollection('userblog3');
	
	echo 'Colección userblog3 creada exitosamente<br>';
	
} catch (Exception $e) {
	echo 'Error: ' . $e->getMessage();
}