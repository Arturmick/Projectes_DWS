<?php
session_start();
echo '<br> Comprobamos si la variable de sesión está definida en E11_page2.php<br>';

if (isset($_SESSION['variable'])) {
	echo "El valor de la variable de sesión es: " . $_SESSION['variable'] . '<br>';
	echo '<br>Aplicamos unset a la variable de sesión<br>';
	unset($_SESSION['variable']);
} else {
	echo "La variable de sesión no está definida.";
}

?>
<br>
<a href="E11_page3.php">Ir a E11_page3.php</a>