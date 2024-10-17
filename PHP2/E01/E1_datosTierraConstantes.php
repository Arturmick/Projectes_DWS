<html>
    <head>
        <title>Datos Tierra constantes</title>
    </head>
    <body>
        <?php
    const radioTierra = 6378;
    const distaciaTierraSol = 150000000;
    const PI = 3.1416;
    ?>
        <p class="radio">El radio de la Tierra es: <b><?php echo radioTierra; ?> Km</b></p>
        <p class="distancia">La distancia de la Tierra al Sol es: <b><?php echo distaciaTierraSol; ?> Km</b></p>
        <p class="vuleta">La longitud de una vuelta al Ecuador es: <b><?php echo 2 * PI * radioTierra; ?> Km</b></p>
        <p class="longitudVuleta">La longitud equivale a: <b><?php echo distaciaTierraSol / (2* PI * radioTierra); ?> vueltas</b></p>
    </body>
</html>