<?php
session_start();
echo '<h1>Únicamente para miembros</h1>';
echo '<meta charset="UTF-8">';

if(isset($_SESSION['valid_user'])) {
	echo '<p>Has iniciado sesión como: ' . $_SESSION['valid_user'] . '</p>';
	echo '<p>Aquí iríaa el contenido de Socios Privados</p>';
	echo '<a href="E11_logout.php">Cerrar sesión</a>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
} else {
	echo '<p>No has iniciado sesión</p>';
	echo '<p>Solo los miembros pueden ver esta página</p>';
}
echo '<a href="E11_login_valida.php">Volver a la página principal</a>';