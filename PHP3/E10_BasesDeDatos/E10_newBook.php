<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "bookorama";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    if (empty($isbn) || empty($title) || empty($author) || empty($price)) {
        echo "Error: Todos los campos son obligatorios.";
    } else {
        $link = mysqli_connect($hostname, $username, $password, $database);

        if (!$link) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO books (isbn, author, title, price) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($link, $query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssd", $isbn, $author, $title, $price);
                if (mysqli_stmt_execute($stmt)) {
                    echo "Nuevo libro insertado con éxito.<br>1 fila insertada.<br>";
                } else {
                    echo "Error al insertar el libro: " . mysqli_stmt_error($stmt) . "<br>";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Error al preparar la consulta: " . mysqli_error($link) . "<br>";
            }

            mysqli_close($link);
        }
    }
} else {
    echo "Método de solicitud no válido.";
}
?>