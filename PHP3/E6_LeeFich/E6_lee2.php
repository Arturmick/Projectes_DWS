<?php

$archivo = "E6_mensajes2.txt";
$tamanyo = filesize($archivo);
$gestor = @fopen($archivo,"r");

if ($gestor !== false) {

    $contenido = fread($gestor,filesize($archivo));

    if(filesize($archivo) > 0){
        echo "<h1>utiliza fread()</h1>";
        echo "El contenido del fichero mensajes2.txt es...<br><br>";
        echo $contenido;
    }

}else {
    echo "El fichero no existe o no se encuentra";
    exit(0);
}

fclose($gestor);