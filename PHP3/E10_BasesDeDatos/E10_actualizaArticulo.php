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

    $id_articulo = 1;
    $descripcion_articulo = "Descripción actualizada";
    $precio_articulo = 29.99;
    $stock_articulo = 50;

    $query = "UPDATE ARTICULO SET descripcion='$descripcion_articulo', precio=$precio_articulo, stock=$stock_articulo WHERE idArticulo=$id_articulo";

    echo "Realizando la actualización del artículo con idArticulo=$id_articulo...<br>";

    if (mysqli_query($link, $query)) {
        $filas_modificadas = mysqli_affected_rows($link);
        echo "Artículo actualizado con éxito.<br>";
        echo "$filas_modificadas fila(s) modificada(s).<br>";
    } else {
        echo "Error al actualizar el artículo: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>