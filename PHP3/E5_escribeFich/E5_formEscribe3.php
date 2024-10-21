<?php

$archivo = "E5_petic3.txt";
$ficheroAbierto = fopen($archivo,"a+");


$fechaActual = date('D, d M Y H:i:s');
$linea = "\t\t" . $_POST['nombre'] . "\t" . $_POST['apellido'] . "\n";
$entrada = $fechaActual . $linea;

$escribirFichero = fwrite($ficheroAbierto,$entrada);

echo "<p><b><h3>Escritura datos Formulario en archivo</h3></b></p>";
echo "<b><i>Incluye control error en apertura y escritura de fichero</i></b>";

echo "<p>Intentando volcar la información al archivo...</p>";

if($ficheroAbierto){

    if($escribirFichero != false){

        echo "<p><i>Se ha escrito información en el fichero</i></p>";
    }else{

        echo "No se ha podido escribir la información";
    }
}else{

    echo "No se ha podido abrir el archivo";
}

fclose($ficheroAbierto);
?>