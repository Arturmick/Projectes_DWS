<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "notasdb_dwes";
$port = "3306";

$archivo = "notasPrimero.txt";
$archivoDat = "notasciclo.dat";
$conectado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$searchTipo = $_POST['tipo'];
	$searchUser = $_POST['usuarios'];
	$searchPass = $_POST['contrasenya'];
	
	echo "<br>FUNCION Validar Usuario";
	
	
	if(empty($searchTipo)||empty($searchUser)||empty($searchPass)) {
		echo "Error";
		exit();
	}
	
	$link = mysqli_connect($hostname, $username, $password, $database);
	
	if (!$link) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	}
	
	echo "<br>Conexión exitosa!";
	echo "<br><b>BD: $database</b>";
	
	$query = "SELECT * FROM usuarios";
	$result = mysqli_query($link, $query);
	
	echo "<br><br>Veamos si el usuario existe....";
	
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if ($searchUser == $row['User']&&$searchTipo == $row['Tipo']&&$searchPass == $row['Pass']){
					$conectado = true;
					break;
				}
			}
		}
	} else {
		echo "Error al ejecutar la consulta: " . mysqli_error($link) . "<br>";
	}
}
	echo "<br>Cerramos Conexión";
	mysqli_close($link);

if(!$conectado){
	echo "<br>Lo sentimos, los datos no corresponden a ningún usuario";
	exit();
}
echo "<br>Existe el usuario Seleccionado";

$matprim = fcargaNotasPriBDaMat($hostname, $username, $password, $database);

fVisualizaDatosMATPRI($matprim);

fEscribeDatosMATPRIaARCH($matprim, $archivo);

fcargaNotasSegBDaMat($hostname, $username,$password,$database);

$medias = fEscribeMediasBD($hostname, $username, $password, $database, $port);

fEScribeMediasaArchivo($medias,$archivoDat);




function fcargaNotasPriBDaMat($hostname, $username, $password, $database)
{
	echo "<br><b>Carga datos de BD - tabla NOTASPRIM...</b><br><br>";
	
	echo "<br>FUNCION fcargaNotasPriBDaMat";
	
	
	$link = mysqli_connect($hostname, $username, $password, $database);
	
	if (!$link) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	}
	
	echo "<br>Conexión exitosa!";
	echo "<br><b>BD: $database</b>";
	
	$query = "SELECT * FROM notasprim";
	$result = mysqli_query($link, $query);
	
	$filas_encontradas = mysqli_affected_rows($link);
	
	echo "<br><br>Num FIlas existentes (SELECT): $filas_encontradas";
	
	$matprim[0][0] = "ALUMNO";
	$matprim[0][1] = "NOTA1º";
	$matprim[0][2] = "FECHA_APROB";
	
	$j = 1;
	
	while ($row = mysqli_fetch_assoc($result)) {
		
		$matprim[$j][0] = $row['NomAlum'];
		$matprim[$j][1] = $row['MediaPrim'];
		$matprim[$j][2] = $row['FechAprobado'];
		
		$j++;
	}
	mysqli_close($link);
	return $matprim;
}

function fVisualizaDatosMATPRI ($matprim) {
	
	echo "<br><br>FUNCION fVisualizaDatosMATPRI";
	
	echo "<table border='1'>";
	
	for ($i = 0; $i <= 6; $i++) {
		
		echo "<tr>";
		echo "<td>" . $matprim[$i][0] . "</td>";
		echo "<td>" . $matprim[$i][1] . "</td>";
		echo "<td>" . $matprim[$i][2] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
}
function fEscribeDatosMATPRIaARCH($matprim, $archivo){
	
	echo "<br>Escribe datos de Matriz en Archivo notasPrimero.txt";
	
	$ficheroAbierto = fopen($archivo,"w+");
	
	if($ficheroAbierto){
		
		for ($i = 0; $i <= 6; $i++) {
			
			$texto = $matprim[$i][0];
			$texto2 = $matprim[$i][1];
			$texto3 = $matprim[$i][2];
			fwrite($ficheroAbierto,"\t\t$texto\t\t$texto2\t\t$texto3\n");
			
		}
	};
	fclose($ficheroAbierto);
}

function fcargaNotasSegBDaMat($hostname, $username,$password,$database)
{
	echo "<br><b>Lee datos segundo y pasa a matriz</b><br><br>";
	
	echo "<br>FUNCION fcargaNotasSegBDaMat";
	
	
	$link = mysqli_connect($hostname, $username, $password, $database);
	
	if (!$link) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	}
	
	echo "<br>Conexión exitosa!";
	echo "<br><b>BD: $database</b>";
	
	$query = "SELECT * FROM notasseg";
	$result = mysqli_query($link, $query);
	
	$filas_encontradas = mysqli_affected_rows($link);
	
	echo "<br><br>Num FIlas existentes (SELECT): $filas_encontradas";
	
	echo "<br>Creamos cabecera de la tabla";
	
	$matprim[0][0] = "ALUMNO";
	$matprim[0][1] = "NOTA1º";
	$matprim[0][2] = "FECHA_APROB";
	
	$j = 1;
	
	while ($row = mysqli_fetch_assoc($result)) {
		
		$matprim[$j][0] = $row['NomAlum'];
		$matprim[$j][1] = $row['NomAsig'];
		$matprim[$j][2] = $row['NotaAsig'];
		
		$j++;
	}
	echo "<br><br>Visualizamos datos de la tabla pasados a Matriz";
	
	echo "<table border='1'>";
	
	for ($i = 0; $i <= 30; $i++) {
		
		echo "<tr>";
		echo "<td>" . $matprim[$i][0] . "</td>";
		echo "<td>" . $matprim[$i][1] . "</td>";
		echo "<td>" . $matprim[$i][2] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	mysqli_close($link);
}

function fEscribeMediasBD($hostname, $username, $password, $database, $port){
	
	$cadenaConexion = "mysql:host=$hostname;dbname=$database;port=$port";
	
	$pdo = new PDO($cadenaConexion, $username, $password);

	 $medias = array(
		 array("PILAR",9,7,7.3),
		 array("HUGO",8,7.4,7.5),
		 array("JESUS",7,6.2,6.3),
		 array("RICARDO",6,5.8,5.8),
		 array("ARTURO",5,8,7.6),
		 array("MELISSA",5,6.8,6.5)
	 );
	
	$insert_query = "INSERT INTO medias (NomAlum, MediaPri, MediaSeg, MediaCiclo) VALUES (? ,?, ?, ?)";
	
	$stmt = $pdo->prepare($insert_query);
	
	try {
		$pdo->beginTransaction();
		
		foreach ($medias as $fila) {
			$stmt->execute($fila);
		}
		$pdo->commit();
		$pdo = null;
	} catch(PDOException $e) {
		$pdo->rollBack();
		echo "Conexión fallida a: " . $database . $e->getMessage();
	}
	return $medias;
}

function fEScribeMediasaArchivo($medias, $archivo) {
	
	echo "<br>Escribe datos de Matriz en Archivo notasciclo.dat";
	
	$ficheroAbierto = fopen($archivo,"w+");
	
	if($ficheroAbierto){
		
		for ($i = 0; $i <= 5; $i++) {
			
			for ($j = 0;$j <= 3; $j++){
				
				$texto = $medias[$i][$j];
				
				fwrite($ficheroAbierto,"\t$texto");
			}
			fwrite($ficheroAbierto,"\n");
		}
	};
	fclose($ficheroAbierto);
}
