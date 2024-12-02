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

    $id_articulo = 100;

    $query = "DELETE FROM ARTICULO WHERE idArticulo=$id_articulo";

    echo "Realizando el borrado del artículo con idArticulo=$id_articulo...<br>";

    if (mysqli_query($link, $query)) {
        $filas_borradas = mysqli_affected_rows($link);
        echo "Artículo borrado con éxito.<br>";
        echo "$filas_borradas fila(s) borrada(s).<br>";
    } else {
        echo "Error al borrar el artículo: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>
