<?php
session_start();


echo "El contenido de \$_SESSION['sess_var'] es:" . $_SESSION['sess_var'] . "<br>";
echo "<br>";
echo "Hemos visto que se ha perdido el valor de la variable<br>";
echo "<br>";
echo "<i>A continuación vamos a destruir el identificador de la sesión<br>mediante session_destroy()</i></se>";
echo "<br>";

if (session_destroy()){
    echo "<b>Sesión destruida</b>";
}
