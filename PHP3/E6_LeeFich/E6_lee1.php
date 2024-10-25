<?php

$archivo = "E6_mensajes1.txt";

if (file_exists($archivo)) {

    echo "<h1>utiliza readfile()</h1>";
    echo "El contenido del fichero mensajes1.txt es...<br><br>";

    readfile($archivo);
}else {
    echo "El fichero no existe o no se encuentra";
}