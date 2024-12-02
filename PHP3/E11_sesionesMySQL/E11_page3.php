<?php
session_start();
echo '<br> Comprobamos si la variable de sesión está definida en E11_page3.php<br>';

if (!isset($_SESSION['variable'])) {
	echo "<br>La variable de sesión ha sido eliminada.";
} else {
	echo "<br>La variable de sesión todavía está definida.";
}
session_destroy();
?>