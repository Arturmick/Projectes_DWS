<?php
session_start();
$_SESSION['variable'] = 'Hola Mundo!';
echo "<br>El valor de la variable de sesión es: " . $_SESSION['variable']. '<br>';
?>
<br>
<a href="E11_page2.php">Ir a E11_page2.php</a>