<?php
$Fich_autoloadPhp = 'vendor/autoload.php';

require_once $Fich_autoloadPhp;

$numeroUsuarios = 0;

try {
	$cadenaConexion = 'mongodb://localhost:27017';
	
	$cliente = new MongoDB\Client($cadenaConexion);
	
	$bd = $cliente->userblogdb;
	
	echo 'Conectado<br>';
	
	echo "<br>Todos los usuarios: <br>";
	
	$usuarios = $bd->userblog->find(["cp"=>"39005"]);
	
	foreach ($usuarios as $usuario) {
		$numeroUsuarios++;
		var_dump($usuario);
		//print_r($usuarios);
	}
	
	echo "<br>Numero de usuarios: $numeroUsuarios";
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}