<html>
    <head>
        <title>Hola Mundo</title>
    </head>
    <body>
        <?php
    $nombre = "Arturo";
    $apellido1 = "Miquel";
    $apellido2 = "Fortaña";
    $domicilio = "C/ Mayor, 15";
    $codigoPostal = "46389";
    $telefono = "666555666";
    $profesion = "Profesor de conservatorio de música";
    ?>
        <p class="nombre">Nombre: <b><?php echo $nombre; ?></b></p>
    <p class="apellido">Apellido: <?php echo $apellido1 . ' ' . $apellido2; ?></p>
    <p class="domicilio">Domicilio: <?php echo $domicilio; ?></p>
    <p class="codigoPostal">Código postal: <?php echo $codigoPostal; ?></p>
    <p class="telefono">Teléfono: <?php echo $telefono; ?></p>
    <p class="profesion">Profesión: <?php echo $profesion; ?></p>

    </body>
</html>



