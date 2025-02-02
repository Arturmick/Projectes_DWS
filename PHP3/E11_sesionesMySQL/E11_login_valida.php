<?php
session_start();

if (isset($_POST['userid']) && isset($_POST['password'])) {
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$hostname = 'localhost';
	$user_bd = 'root';
	$pass_bd = '';
	$database = 'clientesdb_dwes';
	
	$link = mysqli_connect($hostname, $user_bd, $pass_bd, $database);
	
	if (!$link) {
		echo "Error: No se puede conectar a la base de datos" . PHP_EOL;
		echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
	} else {
		$query = "SELECT * FROM usuarios WHERE user = '$userid' AND pass = '$password'";
		$result = mysqli_query($link, $query);
		$num_filas = mysqli_affected_rows($link);
		
		if ($num_filas > 0) {
			$_SESSION['user'] = $userid;
			echo "Bienvenido $userid";
			mysqli_close($link);
		}
	}
}
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Pagina Inicial</h1>
<?php
if (isset($_SESSION['user'])) {
	echo "Has iniciado sesion como: " . $_SESSION['user'] . "<br>";
	echo "<a href='E11_logout.php'>Cerrar sesion</a>";
} else {
	if (isset($userid)) {
		echo "No has podido iniciar sesion<br>";
		echo "<a href='E11_login.php'>Volver a intentarlo</a>";
	} else {
		echo "No has iniciado sesion<br>";
	}
		echo "<form method='post' action='E11_login_valida.php'>";
		echo "<table>";
		echo "<tr><td>Usuario:</td><td><input type='text' name='userid'></td></tr>";
		echo "<tr><td>Contraseña:</td><td><input type='password' name='password'></td></tr>";
		echo "<tr><td colspan='2' align='center'><input type='submit' value='Conectar'></td></tr>";
		echo "</table></form>";
	
}
?>
<br>
<a href='E11_members_only.php'>Pagina de miembros</a>
</body>
</html>
