<?php
$Fich_autoloadPhp = 'vendor/autoload.php';

require_once $Fich_autoloadPhp;

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	echo "<br>Todos los usuarios: <br>";
	
	$usuarios = $bd->userblog->find();
	
	foreach ($usuarios as $usuario) {
		var_dump($usuario);
		//print_r($usuarios);
	}
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}