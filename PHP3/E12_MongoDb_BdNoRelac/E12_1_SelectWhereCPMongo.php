<?php
$Fich_autoloadPhp = 'vendor/autoload.php';

require_once $Fich_autoloadPhp;

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	echo "<br>Todos los usuarios: <br>";
	
	$usuarios = $bd->userblog->find(['cp'=> ['$gte'=> '39005']],
	['projection' => ['_id' => 0, 'nombre_usuario' => 1, 'cuenta_twitter' => 1]]);
	
	foreach ($usuarios as $usuario) {
		
		var_dump($usuario);
		//print_r($usuarios);
	}
	
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}