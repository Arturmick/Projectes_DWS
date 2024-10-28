<?php

$numeroPalabras = shell_exec("dir /b | find /c /v \"\"");
$fechaActual = shell_exec("date /T");

echo "<b>Versión con shell_exec</b><br>";
echo "comando 1: <br>";
echo "FECHA: <br>";
echo $fechaActual;
echo "comando 2: <br>";
echo "CUENTA PALABRAS DE LISTADO: <br>";
echo $numeroPalabras;