<?php
$hostname = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "clientesdb_dwes";
$port = "3306";
$nombreTabla = "ARTICULO";
$cadenaConexion = "mysql:host=$hostname;dbname=$baseDatos;port=$port";

try {
	$pdo = new PDO($cadenaConexion, $usuario, $clave);
	
	echo "Conexión exitosa a la base de datos<br><b>clientesdb_dwes</b>";
	echo "<h4>Delete con parámetros posicionales</h4><br>";
	
	$id = 12;
	$dropTable_query = "DROP TABLE articulo6";
	
	$stmt = $pdo->prepare($dropTable_query);
	
	if($stmt->execute()) {
		echo "Tabla borrada con éxito";
	} else {
		print_r($stmt->errorInfo());
	}
	
	$pdo = null;
} catch(PDOException $e) {
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>