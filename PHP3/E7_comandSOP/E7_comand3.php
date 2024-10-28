<?php
echo "<h3>Fichero disponibles en el directorio actual<br></h3>";
echo "<h3>Sólo muestra los de tipo .PDF y .PHP<br></h3>";
echo "Vista previa de los ficheros del directorio actual<br>";
echo "<br>";
echo "Ahora lo mostramos en formato tabla<br>";

echo "<table border='1'>";
echo "<tr>";
	echo "<th>Nombre del fichero</th>";
	echo "<th>Tamaño del fichero</th>";
echo "<tr>";
echo "<tr>";

$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
	$fileParts = explode('.', $file);
	if ($fileParts[1] === 'pdf' || $fileParts[1] === 'php') {
		echo "<td>".basename($file)."</td>";
		echo "<td>".filesize($file)."</td>";
		echo "</tr>";
	}
}
echo "</table>";
closedir($dir);
