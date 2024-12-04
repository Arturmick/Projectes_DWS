<?php
$hostname = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "clientesdb_dwes";
$port = "3306";
$nombreTabla = "ARTICULO";
$cadenaConexion = "mysql:host=$hostname;dbname=$baseDatos;port=$port";


$pdo = new PDO($cadenaConexion, $usuario, $clave);

echo "Conexión exitosa a la base de datos<br><b>clientesdb_dwes</b>";
echo "<h4>Insert con múltiples filas con TRANSACCIÓN</h4><br>";

$matriz_datos = [
	[20, 'articulo insert', 20, 20],
	[21, 'articulo insert', 21, 21]
];

$insert_query = "INSERT INTO Articulo (idArticulo, Descripcion, Precio, Stock) VALUES (?, ?, ?, ?)";

$stmt = $pdo->prepare($insert_query);

try {
	$pdo->beginTransaction();
	
	foreach ($matriz_datos as $fila) {
		$stmt->execute($fila);
	}
	$pdo->commit();
	$pdo = null;
} catch(PDOException $e) {
	$pdo->rollBack();
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>