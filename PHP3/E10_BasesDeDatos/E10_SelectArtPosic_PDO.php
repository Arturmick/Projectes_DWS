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
	echo "<h4>Mostrar contenido de tabla con FetchAll</h4><br>";
	
	
	$select_query = "SELECT * FROM articulo";
	
	$stmt = $pdo->prepare($select_query);
	
	$stmt->execute();
	$num_filas_selected = $stmt->rowCount();
	printf("Número filas afectadas: %d<br>", $num_filas_selected);
	echo "<br><br>";
	echo 'Visualizamos datos:<br>';
	
	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th></tr>";
	
	
	$data = $stmt->fetchAll();
	foreach ($data as $row) {
		
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	$numn_filas_selected = $stmt->rowCount();
	printf("Número filas afectadas: %d<br>", $num_filas_selected);
	echo "<br><br>";
	
} catch(PDOException $e) {
	echo "Conexión fallida a: " . $baseDatos . $e->getMessage();
}
?>