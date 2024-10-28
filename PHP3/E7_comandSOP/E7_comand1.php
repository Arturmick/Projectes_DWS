<?php
echo "<h1>Listado del contenido del directorio actual</h1>";
echo "<h2>Varias formas de hacerlo</h2>";

echo "<b>Versión mediante exec</b><br>";
echo "<pre>";
exec("dir", $salida);
for ($i = 0; $i < count($salida); $i++) {
	echo $salida[$i] . "<br>";
}
echo "</pre>";
echo "<br>";

echo "<b>Versión mediante system(comando)</b><br>";
echo "<pre>";
system("dir");
echo "</pre>";

echo "<br><br>";
echo "<b>Versión con apóstrofos invertidos: (`comando`)</b><br>";

echo "<pre>";
echo `dir`;
echo "</pre>";