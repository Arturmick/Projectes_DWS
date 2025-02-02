<?php
session_start();
$old_user = $_SESSION['user'];
unset($_SESSION['user']);
session_destroy();
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Logout</h1>
<?php
if (!empty($old_user)) {
	echo "Has cerrado sesion<br>";
} else {
	echo "No habias iniciado sesion<br>";
}
?>
<a href='E11_login_valida.php'>Volver a la pagina principal</a>
</body>
</html>
