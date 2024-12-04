<?php
$hostname = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "clientesdb_dwes";
$port = "3306";
$nombreTabla = "ARTICULO";
$cadenaConexion = "mysql:host=$hostname;dbname=$baseDatos;port=$port";

try {
	$conexion = new PDO($cadenaConexion, $usuario, $clave);
	
	echo "Conexión exitosa a la base de datos<br><b>clientesdb_dwes</b>";
} catch(PDOException $e) {
	echo "Conexión fallida";
}
?>