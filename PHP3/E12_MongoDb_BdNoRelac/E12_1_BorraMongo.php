<?php
require 'vendor/autoload.php';

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	$deleteResult = $bd->userblog->deleteOne(
		["nombre_usuario"=>"Frank_blog"]
	);
	
	echo "Documentos borrados: <br>".$deleteResult->getDeletedCount();
	
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}