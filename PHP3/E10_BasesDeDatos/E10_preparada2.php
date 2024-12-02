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

    $descripcion_articulo = "Artículo de prueba";

    $query = "SELECT idArticulo, descripcion FROM ARTICULO WHERE descripcion = ?";
    $stmt = mysqli_prepare($link, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $descripcion_articulo);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id_articulo, $descripcion);
            while (mysqli_stmt_fetch($stmt)) {
                echo "$id_articulo es el idArticulo del producto $descripcion<br>";
            }
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt) . "<br>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>