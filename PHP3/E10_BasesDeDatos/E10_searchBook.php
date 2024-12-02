<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "bookorama";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchType = $_POST['searchType'];
    $searchValue = $_POST['searchValue'];
    $searchValue = trim($searchValue);

    if(!$searchType || !$searchValue) {
        echo "Por favor, introduzca un valor de búsqueda.";
        exit;
    }

    $searchType = addslashes($searchType);
    $searchValue = addslashes($searchValue);

    $link = mysqli_connect($hostname, $username, $password, $database);

    if (!$link) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    } else {
        echo "Conexión exitosa a la base de datos: <b>" . $database . "</b><br><br><br>";

        $query = "SELECT * FROM books WHERE $searchType LIKE '%" . $searchValue . "%'";
        $result = mysqli_query($link, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "ISBN: " . $row['isbn'] . "<br>";
                    echo "Título: " . $row['title'] . "<br>";
                    echo "Autor: " . $row['author'] . "<br>";
                    echo "Precio: " . $row['price'] . "<br><br>";
                }
            } else {
                echo "No se encontraron libros que coincidan con el criterio de búsqueda.";
            }
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($link) . "<br>";
        }

        mysqli_close($link);
    }
} else {
    echo "Método de solicitud no válido.";
}
?>