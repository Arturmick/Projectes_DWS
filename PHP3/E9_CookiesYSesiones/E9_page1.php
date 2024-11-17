<?php
session_start();
$_SESSION['sess_var'] = "Hola mundo!";

echo "El contenido de \$_SESSION['sess_var'] es:" . $_SESSION['sess_var'] . "<br>";
echo "<br>";
echo "Veamos cómo se mantiene su valor al enlazar con la siguiente página...<br>";
echo "<br>";
echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page2...<br>";
echo "<br>";
echo "<a href='E9_page2.php'>SIGUIENTE PÁGINA</a>";