<?php
require 'vendor/autoload.php';

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	$updateResult = $bd->userblog->updateOne(
		["cp"=>"39006"],
		['$set' => ["nombre_usuario"=>"Pablo_Teula"]]
	);
	
	echo "Documentos modificados: <br>".$updateResult->getModifiedCount();
	
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}