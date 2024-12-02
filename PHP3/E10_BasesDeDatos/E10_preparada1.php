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

    $id_articulo = 25;
    $descripcion_articulo = "Artículo de prueba";
    $precio_articulo = 19.99;
    $stock_articulo = 100;

    $query = "INSERT INTO ARTICULO (idArticulo, descripcion, precio, stock) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "isdi", $id_articulo, $descripcion_articulo, $precio_articulo, $stock_articulo);
        if (mysqli_stmt_execute($stmt)) {
            echo "Nuevo artículo insertado con éxito.<br>1 fila insertada.<br>";
        } else {
            echo "Error al insertar el artículo: " . mysqli_stmt_error($stmt) . "<br>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>