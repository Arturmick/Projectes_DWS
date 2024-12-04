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
	echo "<h4>Actualiza con parámetros posicionales</h4><br>";
	
	$update_query = "UPDATE Articulo SET Descripcion = ?, Precio = ?, Stock = ? WHERE idArticulo = ?";
	
	$desc= "Articulo actualizado";
	$precio = 10;
	$stock = 100;
	$idArticulo = 20;
	
	$stmt = $pdo->prepare($update_query);

	$stmt->bindParam(1, $desc);
	$stmt->bindParam(2, $precio);
	$stmt->bindParam(3, $stock);
	$stmt->bindParam(4, $idArticulo);
	
	$stmt->execute();
	$numFilas = $stmt->rowCount();
	printf("<br>Se han actualizado %d filas", $numFilas);
	
	$pdo = null;
} catch(PDOException $e) {
	
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>