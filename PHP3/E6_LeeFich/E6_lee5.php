<?php

$archivo = "E6_mensajes5_br.txt";
$tamanyo = filesize($archivo);


if (file_exists($archivo)) {

    if(filesize($archivo) > 0){
        echo "<h1>Lectura con readfile()</h1>";
        echo "Las peticiones contenidas en mensajes5.txt hasta la fecha 28/01/2018 son:<br><br>";
        readfile($archivo);
        echo "<br><br>";

    }

}else {
    echo "El fichero no existe o no se encuentra";
    exit(0);
}