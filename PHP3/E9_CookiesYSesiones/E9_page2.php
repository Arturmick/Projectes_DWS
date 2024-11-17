<?php
session_start();

echo "Intentemos acceder al valor de \$_SESSION['sess_var'] en esta página...<br>";
echo "<br>";
echo "El contenido de \$_SESSION['sess_var'] es:" . $_SESSION['sess_var'] . "<br>";
echo "<br>";
echo "Ahora aplicamos unset(\$_SESSION_[sess_var])<br>por lo que se pierde el valor de la variable...";
echo "<br>";

unset($_SESSION['sess_var']);

echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page3...<br>";
echo "<br>";
echo "<a href='E9_page3.php'>SIGUIENTE PÁGINA</a>";