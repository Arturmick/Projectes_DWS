<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "clientesdb_dwes";

$link = mysqli_connect($hostname, $username, $password, $database);

if (!$link) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
} else {
    echo "Conexión a la base de datos <b>$database</b> realizada con éxito.<br>";

    $query = "DROP TABLE IF EXISTS ARTICULO2";

    if (mysqli_query($link, $query)) {
        echo "Tabla ARTICULO2 borrada con éxito.<br>";
    } else {
        echo "Error al borrar la tabla ARTICULO2: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>