<?php
$segundos_un_anyo = 365*24*60*60;
$fecha_expiracion = time() + $segundos_un_anyo;

if(isset($_COOKIE['contador'])) {
    $veces = $_COOKIE['contador'] + 1;
    setcookie('contador', $veces, $fecha_expiracion);
    $mensaje = "Esta es la visita número $veces";
    echo $mensaje . '<br>';
}else {
    setcookie('contador', 1, $fecha_expiracion);
    $mensaje = "Bienvenido a nuestra página";
    echo $mensaje . '<br>';
}
echo "Intentamos borrar manualmente el cookie...<br>";

if (borra_cookie('contador')) {
    echo "Cookie borrada correctamente<br>";

    echo "Intentamos ver su contenido...<br>";

    if (isset($_COOKIE['contador'])) {
        echo "Valor de la cookie 'contador': " . $_COOKIE['contador'] . "<br>";
    }else {
        echo "La cookie 'contador' no tiene contenido<br>";
    }
}else {
    echo "No se ha podido borrar la cookie<br>";
}

function borra_cookie($nombre_cookie){
    if ( isset($_COOKIE[$nombre_cookie]) ) {
        $tiempo_vida = -1;

        setcookie($nombre_cookie);
        unset($_COOKIE[$nombre_cookie]);
        return true;
    }else {
        return false;
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
<h4>Ejemplo de COOKIES en página web</h4>
</body>
</html>
