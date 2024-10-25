<?php

$archivo = "E6_mensajes4.txt";
$tamanyo = filesize($archivo);


if (file_exists($archivo)) {

    if(filesize($archivo) > 0){

        echo "<h1>utiliza fpassthru()</h1>";
        echo "<b>Visualizamos el contenido del fichero mensajes4.txt</b><br>";
        echo "Con readfile()<br>";

        readfile($archivo);

        echo "<br><br>";

        $gestor = @fopen($archivo,"r");

        if($gestor !== false){
            $linea = fgets($gestor);
            echo "<b>$linea</b>";

            echo "<br><br>";

            echo "Resto con fpassthrou()<br>";
            fpassthru($gestor);
        }
        fclose($gestor);
    }

}else {
    echo "El fichero no existe o no se encuentra";
    exit(0);
}