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
        echo "Número de filas afectadas: $filas_afectadas<br><br>";

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Descripción</th><th>Precio</th><th>Stock</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . (isset($row['idArticulo']) ? $row['idArticulo'] : 'N/A') . "</td>";
            echo "<td>" . (isset($row['Descripcion']) ? $row['Descripcion'] : 'N/A') . "</td>";
            echo "<td>" . (isset($row['Precio']) ? $row['Precio'] : 'N/A') . "</td>";
            echo "<td>" . (isset($row['Stock']) ? $row['Stock'] : 'N/A') . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo "Error al realizar la consulta: " . mysqli_error($link) . "<br>";
    }

    mysqli_close($link);
}
?>