<?php
$archivo = "E5_mensajes2.txt";
$ficheroAbierto = fopen($archivo,"a+");

$fechaActual = date('D, d M Y H:i:s');
$linea = "\t\tPrimera línea de saludo\n<br>\tSegunda línea de saludo\n";
$entrada = "$fechaActual\n$linea\n";

echo "<p><b><h3>Gestión de ficheros en PHP</h3></b></p>";
echo "<b>Añadiendo en fichero</b>";
echo "<p>Se AÑADEN datos cada vez que ejecutamos</p>";

if($ficheroAbierto){
    $reescribirFichero = fwrite($ficheroAbierto, $entrada);
};

fclose($ficheroAbierto);
?>