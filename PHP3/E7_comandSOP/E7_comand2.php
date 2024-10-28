<?php
echo "<b>Ficheros disponibles en el directorio actual. Sólo muestra los de tipo .PDF y .PS";
echo "<br>";
echo "Viste previa de los ficheros del directorio actual</b><br>";

echo "<pre>";

$dir = opendir(".");

while (($file = readdir($dir)) !== false) {
	
    $fileParts = explode('.', $file);
	
    if ($fileParts[1] === 'pdf' || $fileParts[1] === 'php') {
		
        echo basename($file) . "<br>";
    }
}
echo "</pre>";
closedir($dir);

