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
