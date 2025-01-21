<?php
require 'vendor/autoload.php';

try {
	//Cadena de conexion a MongoDB
	$cadenaConexion = 'mongodb://localhost:27017';
	//Crear una instancia del cliente de MongoDB
	$cliente = new MongoDB\Client($cadenaConexion);
	//Selecciona la base de datos
	$bd = $cliente->userblogdb;
	echo 'Conectado<br>';
	
	//Selecciona colección
	$usuarios = $bd->userblog3;
	
	//Inserta un nuevo usuario en la colección
	$resultado = $usuarios->insertMany([[
		"nombre_usuario" => "Frank_blog",
		"nombre"=>"Frank",
		"cuenta_twitter"=>"Frank_USA",
		"descripcion"=>"blogger aficionado",
		"telefono1"=>"73128989",
		"telefono2"=>"111111111",
		"calle"=>"Av. de los Castros",
		"numero"=>"2256",
		"cp"=>"39005",
		"ciudad"=>"Santander"
	],["nombre_usuario" => "Peter_blog",
		"nombre"=>"Peter",
		"cuenta_twitter"=>"Pete",
		"descripcion"=>"blogger aficionado",
		"telefono1"=>"808080",
		"telefono2"=>"4323424",
		"calle"=>"Av. de los Castros",
		"numero"=>"289s",
		"cp"=>"39005",
		"ciudad"=>"Santander"]]);
	
	//Mensaje de éxito
	echo "Documento insertado con el ID: ";
		foreach ($resultado->getInsertedIds() as $id) {
			echo $id . "<br>";
		}
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}