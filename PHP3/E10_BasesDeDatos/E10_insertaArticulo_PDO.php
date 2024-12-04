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
	echo "<h4>Insert con parámetros posicionales</h4><br>";
	
	$id = 12;
	$desc = 'articulo insert';
	$precio = 12;
	$stock = 12;
	$insert_query = "INSERT INTO Articulo (idArticulo, Descripcion, Precio, Stock) VALUES (?, ?, ?, ?)";
	
	$stmt = $pdo->prepare($insert_query);
	
	$stmt->bindParam(1, $id);
	$stmt->bindParam(2, $desc);
	$stmt->bindParam(3, $precio);
	$stmt->bindParam(4, $stock);
	$stmt->execute();
	$num_filas = $stmt->rowCount();
	printf("<br>Se han insertado %d filas", $num_filas);
	echo "<br>";
	$pdo = null;
} catch(PDOException $e) {
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>