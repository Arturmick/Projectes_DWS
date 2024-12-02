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

    $query = "SELECT * FROM ARTICULO";
    $result = mysqli_query($link, $query);

    if ($result) {
        $filas_afectadas = mysqli_num_rows($result);
        echo "Número de filas afectadas: $filas_afectadas<br>";

        $articulos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($articulos as $articulo) {
            print_r($articulo);
            echo "<br>";
        }

    } else {
        echo "Error al realizar la consulta: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>
