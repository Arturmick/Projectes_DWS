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
	$usuarios = $bd->userblog;
	
	//Inserta un nuevo usuario en la colección
	$resultado = $usuarios->insertOne([
		"nombre_usuario" => "Pablo_blog",
		"nombre"=>"Pablo",
		"cuenta_twitter"=>"Pablo_ESP",
		"descripcion"=>"gamer experto",
		"telefono1"=>"123123123",
		"telefono2"=>"321321321",
		"calle"=>"Av. de los Naranjos",
		"numero"=>"256",
		"cp"=>"39006",
		"ciudad"=>"Torrent"
	]);
	//Mensaje de éxito
	echo "Documento insertado con el ID: "
		. $resultado->getInsertedId()."<br>";
}catch (Exception $e) {
	echo 'Error: '. $e->getMessage();
}