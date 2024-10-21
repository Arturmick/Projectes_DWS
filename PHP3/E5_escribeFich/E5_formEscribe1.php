<?php
$archivo = "E5_mensajes1.txt";
$ficheroAbierto = fopen($archivo,"w+");

echo "<p><b><h3>Gestión de ficheros en PHP</h3></b></p>";
echo "<b>Genera un fichero .txt en directorio actual</b>";
echo "<p>Versión son comprobación de errores en acceso al archivo<br>El fichero se CREA cada vez que ejecutamos</p>";

if($ficheroAbierto){
    $reescribirFichero = fwrite($ficheroAbierto,"\t\tPrimera línea de saludo\n<br>\tSegunda línea de saludo\n");
};

fclose($ficheroAbierto);

?>