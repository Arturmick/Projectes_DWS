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
	$delete_query = "DELETE FROM Articulo WHERE idArticulo = ?";
	
	$stmt = $pdo->prepare($delete_query);
	
	$stmt->bindParam(1, $id);
	
	$stmt->execute();
	$numFilas = $stmt->rowCount();
	printf("<br>Se han borrado %d filas", $numFilas);
	
	$pdo = null;
} catch(PDOException $e) {
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>