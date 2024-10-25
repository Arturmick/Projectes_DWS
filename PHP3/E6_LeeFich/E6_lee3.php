<?php

$archivo = "E6_mensajes3.txt";
$tamanyo = filesize($archivo);


if (file_exists($archivo)) {

    if(filesize($archivo) > 0){
        echo "<h1>utiliza readfile()</h1>";
        echo "El contenido del fichero mensajes2.txt es...<br><br>";
        readfile($archivo);
        echo "<br><br>";
        echo "El tamaño es:<br> $tamanyo caracteres";
    }

}else {
    echo "El fichero no existe o no se encuentra";
    exit(0);
}
